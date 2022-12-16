@if($allsettings->maintenance_mode == 0)
<!doctype html>
<html class="no-js" lang="en">
    <head>
        <title>{{ Helper::translation(2212,$translate,'') }} - {{ $allsettings->site_title }}</title>
        @include('style')
        {!! NoCaptcha::renderJs() !!}
    </head>
	<body id="LoginForm">
	   <div class="container mt-5">
        <div align="center" class="mt-5 mb-5">
        @if($allsettings->site_logo != '')
    	<a href="{{ URL::to('/') }}" class="navbar-brand">
    	<img src="{{ url('/') }}/public/storage/settings/{{ $allsettings->site_logo }}" alt="{{ $allsettings->site_title }}" class="logo">
    	</a>
    	@endif
        </div>
        <div class="login-form mt-5">
           <div class="main-div loginform col-md-5 mx-auto">
               <div>
                @if ($message = Session::get('success'))
                  <div class="alert alert-success" role="alert">
                    <span class="alert_icon lnr lnr-checkmark-circle"></span>
                        {{ $message }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <i class="fa fa-close"></i>
                        </button>
                  </div>
                @endif
                @if ($message = Session::get('error'))
                  <div class="alert alert-danger" role="alert">
                    <span class="alert_icon lnr lnr-warning"></span>
                      {{ $message }}
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <i class="fa fa-close"></i>
                      </button>
                  </div>
                @endif
                {{--
                @if (!$errors->isEmpty())
                  <div class="alert alert-danger" role="alert">
                  <span class="alert_icon lnr lnr-warning"></span>
                  @foreach ($errors->all() as $_error)
                  {{ $_error }}
                  @endforeach
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <i class="fa fa-close"></i>
                  </button>
                  </div>
                @endif
                --}}
               </div>
               <div class="panel">
               <h2>{{ Helper::translation(2213,$translate,'') }}</h2>
                   <p>{{ Helper::translation(2214,$translate,'') }} <br/> {{ Helper::translation(2215,$translate,'') }}</p>
               </div>
              <form method="POST" action="{{ route('register') }}" id="login_form">
               @csrf
               <input type="hidden" name="user_type" value="vendor">
                  <div class="form-group">
                    <label for="name">{{ Helper::translation(2216,$translate,'') }}<span class="required">*</span></label>
                       <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="{{ Helper::translation(2217,$translate,'') }}" value="{{ old('name') }}" data-bvalidator="required" autocomplete="name" autofocus>
                       @error('name')
                         <span class="invalid-feedback" role="alert">
                         <strong>{{ $message }}</strong>
                         </span>
                        @enderror
                    </div>
                      {{--
                  <div class="form-group">
                    <label for="user_name">{{ Helper::translation(2101,$translate,'') }}<span class="required">*</span></label>
                    <input id="username" type="text" name="username" class="form-control" placeholder="{{ Helper::translation(2218,$translate,'') }}" data-bvalidator="required">
                  </div>
                  --}}
                <div class="form-group">
                 <label for="email_ad">{{ Helper::translation(2001,$translate,'') }} <span class="required">*</span></label>
                 <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="{{ Helper::translation(2034,$translate,'') }}"  autocomplete="email" data-bvalidator="email,required">
                 @error('email')
                     <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                     </span>
                     @enderror
                </div>
                <div class="form-group">
                 <label for="phone">Mobile No. <span class="required">*</span></label>
                 <input id="phone" type="number" class="form-control @error('user_phone') is-invalid @enderror" name="user_phone" value="{{ old('user_phone') }}" placeholder="Mobile No." data-bvalidator="user_phone,required">
                 @error('user_phone')
                     <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                     </span>
                     @enderror
                </div>
                {{--
                  <input type="hidden" name="user_type" value="customer">
                <div class="form-group">
                <label for="email_ad">{{ Helper::translation(2007,$translate,'') }} <span class="required">*</span></label>
                   <select id="user_country" class="form-control" name="user_country" data-bvalidator="required">
                      <option value=""></option>
                      @foreach($allcountry as $country)
                      <option value="{{ $country->country_id }}">{{ $country->country_name }}</option>
                      @endforeach
                   </select>
                </div>
                --}}
                <div class="form-group">
                  <label for="gst">GST Number<span class="required">*</span></label>
                  <input id="gst" type="text" class="form-control @error('gst') is-invalid @enderror" name="gst" placeholder="Enter Your GST No." value="{{ old('gst') }}" data-bvalidator="required">
                  @error('gst')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="account_no">Account No.<span class="required">*</span></label>
                  <input id="account_no" type="number" class="form-control @error('account_no') is-invalid @enderror" name="account_no" placeholder="Enter You Account No" value="{{ old('account_no') }}" data-bvalidator="required" >
                  @error('account_no')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="ifsc">IFSC<span class="required">*</span></label>
                  <input id="ifsc" type="text" class="form-control @error('ifsc') is-invalid @enderror" name="ifsc" placeholder="Enter IFSC Code" value="{{ old('ifsc') }}" data-bvalidator="required">
                  @error('ifsc')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="account_holder">Account Holder Name<span class="required">*</span></label>
                  <input id="account_holder" type="text" class="form-control @error('account_holder') is-invalid @enderror" name="account_holder" placeholder="Enter Account Holder name" value="{{ old('account_holder') }}" data-bvalidator="required">
                  @error('account_holder')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="form-group">
                    <label for="password">{{ Helper::translation(2102,$translate,'') }} <span class="required">*</span></label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="{{ __('Enter your password') }}" autocomplete="new-password" data-bvalidator="required">
                       @error('password')
                       <span class="invalid-feedback" role="alert">
                       <strong>{{ $message }}</strong>
                       </span>
                       @enderror
                </div>
                <div class="form-group">
                    <label for="con_pass"> {{ Helper::translation(2162,$translate,'') }} <span class="required">*</span></label>
                       <input id="password-confirm" type="password" class="form-control @error('password_confirmation') is-invalid @enderror"" name="password_confirmation" placeholder="{{ Helper::translation(2221,$translate,'') }}" data-bvalidator="equal[password],required" autocomplete="new-password">
                       @error('password_confirmation')
                       <span class="invalid-feedback" role="alert">
                       <strong>{{ $message }}</strong>
                       </span>
                       @enderror
                      </div>
                {{--
                 <div class="form-group{{ $errors->has('g-recaptcha-response') ? ' has-error' : '' }}">
                <label for="con_pass">{{ Helper::translation(2222,$translate,'') }}<span class="required">*</span></label>
                {!! app('captcha')->display() !!}
                @if ($errors->has('g-recaptcha-response'))
                  <span class="help-block">
                     <strong class="red">{{ $errors->first('g-recaptcha-response') }}</strong>
                  </span>
                @endif
              </div>
              --}}
             <button type="submit" class="btn button-color btn-block rounded button-off">{{ Helper::translation(2212,$translate,'') }}</button>
             <div class="d-flex justify-content-between forgot">
             <div>
             </div>
             <div>
             <a href="{{ URL::to('dealer/login') }}" class="link-color">{{ Helper::translation(2223,$translate,'') }}</a>
             </div>
             </div>
             </div>
            </form>
         </div>
       </div>
    </div>
    </div>
    @include('script')
</body>
</html>
@else
@include('503')
@endif