@if(Auth::guest())
<!-- The Modal login -->
<div class="modal fade logS1" id="myModal">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header pt-xxl-5">
        <h4 class="modal-title"></h4>
        <button type="button" class="close close_model btn btn-dark" onclick="closeModels()" data-dismiss="modal">Close</button>
      </div>
      <div class="modal-body py-5">
        <p class="deu-loginhead">Login</p>
        <p class="deu-loginhead">To Your Account</p>
        <p class="deu-logintxt">Please enter your email address and password</p>
        <form class="form-horizontal pb-xxl-5" action="{{ route('login') }}" method="POST" id="login_form">
          @csrf
          <div class="form-group row justify-content-center px-3">
            @if ($message = Session::get('success'))
              <div class="col-9 px-0">
                <div class="alert alert-success" role="alert">
                  <span class="alert_icon lnr lnr-checkmark-circle"></span>
                    {{ $message }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <i class="fa fa-close"></i>
                    </button>
                </div>
              </div>
            @endif
            @if ($message = Session::get('error'))
              <div class="col-9 px-0">
                <div class="alert alert-danger" role="alert">
                  <span class="alert_icon lnr lnr-checkmark-circle"></span>
                    {{ $message }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <i class="fa fa-close"></i>
                    </button>
                </div>
              </div>
            @endif
            <div class="col-9 px-0">
              <input type="text" name="email"  value="{{ old('email') }}" placeholder="Email*" class="@error('error') is-invalid @enderror form-control border-info placeicon deu-logininput">
              @error('error')
                <span class="invalid-feedback error-font" role="alert">
                <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
          </div>
          <div class="form-group row justify-content-center px-3">
            <div class="col-9 px-0 position-relative">
              <input type="password" name="password" placeholder="Password*" class="form-control password border-info placeicon deu-logininput">
              <span class="seepassword" style="display:none;" onclick="hide_password(this)"><i class="fa fa-eye"></i></span>
              <span class="seepassword" onclick="see_password(this)"><i class="fa fa-eye-slash"></i></span>
            </div>
          </div>
          <div class="form-group row justify-content-center px-3">
            <div class="col-9">
              <div class="row">
                <div class="col-6 px-0">
                  <span><a href="#" class="deu-loginforget logS12" onclick="openModel('myModal2')"><b class="deu-underline">Forgot Password?</b></a></span>
                </div>
                <div class="col-6 px-0 text-end">
                  <span><a href="#" class="deu-loginforget logS" onclick="openModel('myModal1')"><b class="deu-underline">Don’t have an account?</b></a></span>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group row justify-content-center mt-4 text-center">       
            <div class="col-6 px-3 col-lg-3">
              <button type="submit" class="about-more w-100">Login</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- The Modal Register -->
<div class="modal fade regiS" style="overflow-y: scroll;" id="myModal1">
  <div class="modal-dialog modal-xl modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title"></h4>
        <button type="button" class="close close_model" onclick="closeModels()" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <p class="deu-loginhead">Register <br> Your Account</p>
        <p class="deu-logintxt">Please fill the following fields with appropriate information to register form</p>
        <form class="form-horizontal" method="POST" action="{{ route('register') }}" id="register_form">
          @csrf
          <input type="hidden" name="user_type" value="customer">
          <div class="form-group row justify-content-center px-3">
            <div class="col-9 px-0">
              <input type="text" name="name" value="{{ old('name') }}" placeholder="Enter your name*" class="@error('name') is-invalid @enderror form-control border-info placeicon deu-logininput" autocomplete="name" autofocus>
              @error('name')
                <span class="invalid-feedback error-font" role="alert">
                <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
          </div>
          <div class="form-group row justify-content-center px-3">
            <div class="col-9 px-0">
              <input type="email" name="email" value="{{ old('email') }}" placeholder="Enter Email Address*" class="@error('email') is-invalid @enderror form-control border-info placeicon deu-logininput" >
              @error('email')
                <span class="invalid-feedback error-font" role="alert">
                <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
          </div>
          <div class="form-group row justify-content-center px-3">
            <div class="col-9 px-0">
              <input type="number" name="user_phone" value="{{ old('user_phone') }}" placeholder="+91 | Contact Number*" class="@error('user_phone') is-invalid @enderror form-control border-info placeicon deu-logininput" onkeypress="return /^[0-9\s]*$/.test(event.key)">
              @error('user_phone')
                <span class="invalid-feedback error-font" role="alert">
                <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
          </div>
          {{--
          <div class="form-group row justify-content-center px-3">
            <div class="col-9 px-0">
              <textarea name="user_address" class="@error('user_address') is-invalid @enderror form-control border-info placeicon deu-logininput" placeholder="Enter Address*" rows="3" id="comment" >{{ old('user_address') }}</textarea>
              @error('user_address')
                <span class="invalid-feedback error-font" role="alert">
                <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
          </div>
          <div class="form-group row justify-content-center px-3">
            <div class="col-9 px-0">
              <input type="number" name="user_pincode" value="{{ old('user_pincode') }}" placeholder="Enter Pincode*" class=" @error('user_pincode') is-invalid @enderror form-control border-info placeicon deu-logininput" onkeypress="return /^[0-9\s]*$/.test(event.key)">
              @error('user_pincode')
                <span class="invalid-feedback error-font" role="alert">
                <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
          </div>
          --}}
          <div class="form-group row justify-content-center px-3">
            <div class="col-9 px-0 position-relative">
              <input style="margin-bottom: 0;" type="password" name="password" placeholder="Enter Password*" class="@error('password') is-invalid @enderror form-control border-info placeicon deu-logininput" onkeypress="return /^([0-9a-zA-Z!@#$%^&*(\).,<>{}[\]<>?_=+\-|;:\'\/\s])*[^\s]\1*$/.test(event.key)">
              <p style="margin: 9px 0 10px 5px;font-size: 12px;line-height: 12px;" class="psword-font">Please enter atleast 8 characters, a number, a special character, an upper case and a lower case alphabate.</p>
              
              <span class="seepassword" style="display:none;" onclick="hide_password(this)"><i class="fa fa-eye"></i></span>
              <span class="seepassword" onclick="see_password(this)"><i class="fa fa-eye-slash"></i></span>
              @error('password')
                <span class="invalid-feedback error-font" role="alert">
                <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
          </div>
          <div class="form-group row justify-content-center px-3">
            <div class="col-9 px-0 position-relative">
              <input type="password" name="password_confirmation" placeholder="Enter Confirm Password*" class="@error('password_confirmation') is-invalid @enderror form-control border-info placeicon deu-logininput" onkeypress="return /^([0-9a-zA-Z!@#$%^&*(\).,<>{}[\]<>?_=+\-|;:\'\/\s])*[^\s]\1*$/.test(event.key)">
              <span class="seepassword" style="display:none;" onclick="hide_password(this)"><i class="fa fa-eye"></i></span>
              <span class="seepassword" onclick="see_password(this)"><i class="fa fa-eye-slash"></i></span>
              @error('password_confirmation')
                <span class="invalid-feedback error-font" role="alert">
                <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
          </div>
          <div class="form-group row justify-content-center px-3">
            <div class="col-9">
              <div class="row">
                <div class="col-12 px-0 text-end">
                  <span><a href="#" class="deu-loginforget" onclick="openModel('myModal')"><b class="deu-underline">Already have an Account?</b></a></span>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group row justify-content-center mt-3 text-center">       
            <div class="col-6 px-3 col-lg-3">
              <button type="submit" class="about-more w-100">Register</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- The Modal forget -->
<div class="modal fade forgeT" id="myModal2">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title"></h4>
        <button type="button" class="close close_model" onclick="closeModels()" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <p class="deu-loginhead mt-4">Forgot Password</p>
        <p class="deu-logintxt">Please Enter Email for forgot password</p>
        <div>
          @if (session('reset'))
            <div class="alert alert-success text-center" role="alert">
                {{ session('reset') }}
            </div>
          @endif
          @if (session('reset_error'))
            <div class="alert alert-danger text-center" role="alert">
                {{ session('reset_error') }}
            </div>
          @endif
        </div>
        <form class="form-horizontal mt-5" method="POST" action="{{ route('forgot') }}">
          @csrf
          <div class="form-group row justify-content-center px-3">
            <div class="col-9 px-0 mt-3">
              <input type="email" name="email" placeholder="Enter Email Address" class="form-control border-info placeicon deu-logininput">
            </div>
          </div>
          <div class="form-group row justify-content-center mt-5 text-center">       
            <div class="col-9 px-3 col-lg-6">
              <button class="about-more">Reset Password</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endif
@if(Auth::user())
<!-- The Modal success -->
<div class="modal fade" id="myModal3">
  <div class="modal-dialog modal-md">
    <div class="modal-content" style="margin-top: 25%;">
      <div class="modal-header">
        <h4 class="modal-title"></h4>
      </div>
      <div class="modal-body text-center">
        <img width="200px"  src="{{ url('/') }}/public/img/success.gif" alt="">
        <p class="product-name text-center">Registered Successfully!!</p>
        <p class="deu-logintxt">Congratulation! Your account has been created successfully.</p>
      </div>
    </div>
  </div>
</div>
@endif