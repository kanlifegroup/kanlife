<?php

namespace ZigKart\Http\Controllers\Auth;

use ZigKart\User;
use ZigKart\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Input;
use ZigKart\Models\Members;
use ZigKart\Models\Settings;
use ZigKart\Models\Product;
use Mail;
use Auth;
use Cookie, Session;
use Illuminate\Validation\Rules\Password;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }
    
	public function register(Request $request)
  {
     $allsettings = Settings::allSettings();
		 $name = $request->input('name');
		//  $username = $request->input('username');
		 $username = $request->input('name');
     $email = $request->input('email');
     $user_phone = $request->input('user_phone');
     $user_pincode = $request->input('user_pincode');
		 $user_type = $request->input('user_type');
		 $user_address = $request->input('user_address');
		 $password = bcrypt($request->input('password'));
		 if(!empty($request->input('earnings')))
		 {
		  $earnings = $request->input('earnings');
     }
		 else
		 {
		   $earnings = 0;
		 }
		 if(!empty(Cookie::get('referral')))
		 {
	      $referral_by = decrypt(Cookie::get('referral'));
		  $referral_commission = $allsettings->site_referral_commission;
		  $check_referral = Members::referralCheck($referral_by);
		  if($check_referral != 0)
		  {
			  $referred['display'] = Members::referralUser($referral_by);
			  $wallet_amount = $referred['display']->earnings + $referral_commission;
			  $referral_amount = $referred['display']->referral_amount + $referral_commission;
			  $referral_count = $referred['display']->referral_count + 1;
			  
			  $update_data = array('earnings' => $wallet_amount, 'referral_amount' => $referral_amount, 'referral_count' => $referral_count);
			  Members::updateReferral($referral_by,$update_data);
		   } 
         }
		 else
		 {
		  $referral_by = "";
		 }
		 $rules = array(
      'name' => 'required',
      'email' => ['required', 'email', 'max:255', Rule::unique('users') -> where(function($sql){ $sql->where('drop_status','=','no');})],
      'user_phone' => ['required', 'digits:10','numeric', Rule::unique('users') -> where(function($sql){ $sql->where('drop_status','=','no');})],
      'password' => ['required', 'min:8',Password::min(8)
                                                  ->letters()
                                                  ->mixedCase()
                                                  ->numbers()
                                                  ->symbols()
                                                  ->uncompromised()],
      'user_pincode' => ['required', 'digits:6','numeric'],
      'user_address' => 'required',
      'password_confirmation' => 'required|same:password',				
	     );		 
		 $messsages = array();		 
		$validator = Validator::make($request->all(), $rules,$messsages);
		if ($validator->fails()) 
		{
		 $failedRules = $validator->failed();
     if($user_type == 'customer'){
		 return back()->with('signup','signup')->withInput()->withErrors($validator);
     }
     else{
		 return back()->withErrors($validator);
     }
		} 
		else
		{
		  
		  if($allsettings->email_verification == 1)
		  {
		  $verified = 0;
		  }
		  else
		  {
		  $verified = 1;
		  }
		  $user_token = $this->generateRandomString();
		 
		$data = array('name' => $name, 'username' => $username, 'email' => $email, 'user_phone' => $user_phone, 'user_type' => $user_type, 'user_pincode'=>$user_pincode,'user_address'=>$user_address, 'password' => $password, 'earnings' => $earnings, 'verified' => $verified, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'), 'user_token' => $user_token, 'referral_by' => $referral_by);
		Members::insertData($data);
		if($allsettings->email_verification == 1)
		{
			$sid = 1;
			$setting['setting'] = Settings::editGeneral($sid);
			$from_name = $setting['setting']->sender_name;
			$from_email = $setting['setting']->sender_email;
			Mail::send('register_mail', $data, function($message) use ($from_name, $from_email, $email, $name, $user_token) {
				$message->to($email, $name)
						->subject('Email Confirmation For Registration');
				$message->from($from_email,$from_name);
			});
      return back()->with(['signin'=>'signin','success'=>'We sent you an activation code. Check your email and click on the link to verify.']);
		  // return redirect('login')->with('success','We sent you an activation code. Check your email and click on the link to verify.');	
        }
		else
		{
      // Ae#12345
      $session_id = Session::getId();
      return $this->login_user($request);
        // return redirect('login')->with('success','Your account has been created. You can now login.');
		}        
		}        
    }

    protected function login_user(Request $request)
    {
      $field = 'email';
      $email = trim($request->email);
      $password = trim($request->password);
      $session_id = Session::getId();
    
      if (Auth::attempt(array($field => $email, 'password' =>  $password, 'verified' => 1, 'drop_status' => 'no' )))
      {
        Session::setId($session_id);
        $updata = array('user_id' => auth()->user()->id); 
        Product::changeOrder($session_id,$updata);
          return redirect('/');
      }
      return back()->with('signin','signin');
      
    } 
	
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
			'username' => ['required', 'regex:/^[\w-]*$/', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
			'user_country' => 'required',
			'g-recaptcha-response' => 'required|captcha',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \ZigKart\User
     */
	public function generateRandomString($length = 25) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
    } 
	 
    protected function create(array $data)
    {
	    $allsettings = Settings::allSettings();
		if(!empty(Cookie::get('referral')))
		 {
	      $referral_by = decrypt(Cookie::get('referral'));
		  $referral_commission = $allsettings->site_referral_commission;
		  $check_referral = Members::referralCheck($referral_by);
		  if($check_referral != 0)
		  {
			  $referred['display'] = Members::referralUser($referral_by);
			  $wallet_amount = $referred['display']->earnings + $referral_commission;
			  $referral_amount = $referred['display']->referral_amount + $referral_commission;
			  $referral_count = $referred['display']->referral_count + 1;
			  
			  $update_data = array('earnings' => $wallet_amount, 'referral_amount' => $referral_amount, 'referral_count' => $referral_count);
			  Members::updateReferral($referral_by,$update_data);
		   } 
         }
		 else
		 {
		  $referral_by = "";
		 } 
        $token = $this->generateRandomString();
		return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
			'username' => $data['username'],
            'password' => Hash::make($data['password']),
			'user_token' => $token,
			'earnings' => 0,
			'user_type' => $data['user_type'],
			'user_country' => $data['user_country'],
			'referral_by' => $referral_by,
			'g-recaptcha-response' => 'required|captcha',
			    
        ]);
    }
}
