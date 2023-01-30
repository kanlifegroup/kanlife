<?php

namespace ZigKart\Http\Controllers\Dealer;

use Illuminate\Http\Request;
use ZigKart\Http\Controllers\Controller;
use Session;
use ZigKart\Models\Members;
use ZigKart\Models\Settings;
use ZigKart\Models\Volunteers;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Auth;
use URL;
use Mail;


class MembersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
	  
	/* edit profile */

	public function edit_profile()
  {
    $token = Auth::user()->id;
		$edit['userdata'] = Members::editprofileData($token);
		return view('dealer.edit-profile', [ 'edit' => $edit, 'token' => $token]);
  }
	
	public function update_profile(Request $request)
	{
	
    $name = $request->input('name');
    $username = $request->input('username');
    $email = $request->input('email');
		 
    if(!empty($request->input('password')))
    {
      $password = bcrypt($request->input('password'));
      $pass = $password;
    }
    else
    {
		 $pass = $request->input('save_password');
    }
    $token = $request->input('edit_id');
		 
    $request->validate([
      'name' => 'required',
      // 'username' => 'required',
      'email' => 'required|email',
      'user_photo' => 'mimes:jpeg,jpg,png,gif|max:3000',
    ]);
    $rules = array(
      // 'username' => ['required', 'regex:/^[\w-]*$/', 'max:255', Rule::unique('users') ->ignore($token, 'id') -> where(function($sql){ $sql->where('drop_status','=','no');})],
      'email' => ['required', 'email', 'max:255', Rule::unique('users') ->ignore($token, 'id') -> where(function($sql){ $sql->where('drop_status','=','no');})],
    );
		 
    $messsages = array();
		 
		$validator = Validator::make($request->all(), $rules,$messsages);
		
		if ($validator->fails()) 
		{
      $failedRules = $validator->failed();
      return back()->withErrors($validator);
		} 
		else
		{
      if ($request->hasFile('user_photo')) {
          
        Members::droprofilePhoto($token); 
        
        $image = $request->file('user_photo');
        $img_name = time() . '.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/storage/users');
        $imagePath = $destinationPath. "/".  $img_name;
        $image->move($destinationPath, $img_name);
        $user_image = $img_name;
      }
		  else
		  {
		     $user_image = $request->input('save_photo');
		  }
		  $data = array('name' => $name, 'username' => $username, 'email' => $email, 'password' => $pass, 'user_photo' => $user_image, 'updated_at' => date('Y-m-d H:i:s'));
      Members::updateprofileData($token, $data);
      return redirect()->back()->with('success', 'Update successfully.');
    }     
	}
	
  /* edit profile */
	
}