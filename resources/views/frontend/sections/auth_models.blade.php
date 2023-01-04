<!-- The Modal login -->
<div class="modal fade logS1" id="myModal">
  <div class="modal-dialog modal-xl">
    <div class="modal-content" style="margin-top: 9%;">
      <div class="modal-header">
        <h4 class="modal-title"></h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <p class="deu-loginhead">Login</p>
        <p class="deu-loginhead">To Your Account</p>
        <p class="deu-logintxt">Please enter your email address and password</p>
        
        <form class="form-horizontal" action="{{ route('login') }}" method="POST" id="login_form">
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
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
          </div>
          <div class="form-group row justify-content-center px-3">
            <div class="col-9 px-0">
              <input type="password" name="password" placeholder="Password*" class="form-control border-info placeicon deu-logininput">
            </div>
          </div>
          <div class="form-group row justify-content-center px-3">
            <div class="col-9">
              <div class="row">
                <div class="col-6 px-0">
                  <!-- <span><a href="#" class="deu-loginforget logS12" data-toggle="modal" data-target="#myModal2"><b class="deu-underline">Forgot Password?</b></a></span> -->
                  <span><a href="#" class="deu-loginforget logS12" onclick="openModel('myModal2')"><b class="deu-underline">Forgot Password?</b></a></span>
                </div>
                <div class="col-6 px-0 text-right">
                  <!-- <span><a href="#" class="deu-loginforget logS" data-toggle="modal" data-target="#myModal1"><b class="deu-underline">Don’t have an account?</b></a></span> -->
                  <span><a href="#" class="deu-loginforget logS" onclick="openModel('myModal1')"><b class="deu-underline">Don’t have an account?</b></a></span>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group row justify-content-center mt-4 text-center">       
            <div class="col-3 px-3">
              <button type="submit" class="about-more">Login</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- The Modal Register -->
<div class="modal fade regiS" style="overflow-y: scroll;" id="myModal1">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title"></h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
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
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
          </div>
          <div class="form-group row justify-content-center px-3">
            <div class="col-9 px-0">
              <input type="email" name="email" value="{{ old('email') }}" placeholder="Enter Email Address*" class="@error('email') is-invalid @enderror form-control border-info placeicon deu-logininput" >
              @error('email')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
          </div>
          <div class="form-group row justify-content-center px-3">
            <div class="col-9 px-0">
              <input type="number" name="user_phone" value="{{ old('user_phone') }}" placeholder="+91 | Contact Number*" class="@error('user_phone') is-invalid @enderror form-control border-info placeicon deu-logininput" onkeypress="return /^[0-9\s]*$/.test(event.key)">
              @error('user_phone')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
          </div>
          <div class="form-group row justify-content-center px-3">
            <div class="col-9 px-0">
              <textarea name="user_address" class="@error('user_address') is-invalid @enderror form-control border-info placeicon deu-logininput" placeholder="Enter Address*" rows="3" id="comment" >{{ old('user_address') }}</textarea>
              @error('user_address')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
          </div>
          <div class="form-group row justify-content-center px-3">
            <div class="col-9 px-0">
              <input type="number" name="user_pincode" value="{{ old('user_pincode') }}" placeholder="Enter Pincode*" class=" @error('user_pincode') is-invalid @enderror form-control border-info placeicon deu-logininput" onkeypress="return /^[0-9\s]*$/.test(event.key)">
              @error('user_pincode')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
          </div>
          <div class="form-group row justify-content-center px-3">
            <div class="col-9 px-0">
              <input type="password" name="password" placeholder="Enter Password*" class="@error('password') is-invalid @enderror form-control border-info placeicon deu-logininput" >
              @error('password')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
          </div>
          <div class="form-group row justify-content-center px-3">
            <div class="col-9 px-0">
              <input type="password" name="password_confirmation" placeholder="Enter Confirm Password*" class="@error('password_confirmation') is-invalid @enderror form-control border-info placeicon deu-logininput" >
              @error('password_confirmation')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
          </div>
          <div class="form-group row justify-content-center px-3">
            <div class="col-9">
              <div class="row">
                <div class="col-12 px-0 text-right">
                  <!-- <span><a href="#" class="deu-loginforget" data-target="#myModal"><b class="deu-underline">Already have an Account?</b></a></span> -->
                  <span><a href="#" class="deu-loginforget" onclick="openModel('myModal')"><b class="deu-underline">Already have an Account?</b></a></span>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group row justify-content-center mt-3 text-center">       
            <div class="col-3 px-3">
              <button type="submit" class="about-more">Register</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- The Modal forget -->
<div class="modal fade forgeT" id="myModal2">
  <div class="modal-dialog modal-xl">
    <div class="modal-content" style="margin-top: 13%;">
      <div class="modal-header">
        <h4 class="modal-title"></h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <p class="deu-loginhead">Forgot Password</p>
        <p class="deu-logintxt">Please Enter Email for forgot password</p>
        <form class="form-horizontal mt-5">
          <div class="form-group row justify-content-center px-3">
            <div class="col-9 px-0 mt-3">
              <input type="text" placeholder="Enter Email Address" class="form-control border-info placeicon deu-logininput">
            </div>
          </div>
          <div class="form-group row justify-content-center mt-5 text-center">       
            <div class="col-3 px-3">
              <button class="about-more">Reset Password</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>