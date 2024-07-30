@extends('frontend.layouts.app')

@section('title')
  My Account
@endsection

@section('style')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/7.3.1/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <!-- <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@500&display=swap" rel="stylesheet"> -->
    <link
        href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@500&family=Montserrat:wght@500&family=Nunito:wght@500;600;700;900&family=Roboto:wght@500&display=swap"
        rel="stylesheet">
@endsection

@section('content')

<div class="container-fluid bgteam-overlay">
    <div class="text-left">
        <h1 class="deu-meethead">My Account</h1>
    </div>
</div>

<div class="container-fluid mt-5 mb-5">
  <div class="row">
    <div class="col-md-12">
      @if ($message = Session::get('success'))
      <div class="alert alert-success" role="alert">
        <span class="alert_icon lnr lnr-checkmark-circle"></span>
          {{ $message }}
          <!-- <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span class="fa fa-close" aria-hidden="true"></span>
          </button> -->
      </div>
      @endif
      @if ($message = Session::get('error'))
      <div class="alert alert-danger" role="alert">
        <span class="alert_icon lnr lnr-warning"></span>
        {{ $message }}
        <!-- <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span class="fa fa-close" aria-hidden="true"></span>
        </button> -->
      </div>
      @endif
    </div>
  </div>
  <div class="row">
      <div class="col-md-12 px-2 px-md-5">
          <p class="deu-carthead">Edit Profile</p>
          <form action="{{ route('my-profile') }}" method="post" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="col-md-12 deu-personalline px-4">
              <div class="row col-12 mt-4">
                  <div class="col-md-6" aos="fade-right">
                      <label class="deu-contactadress">Name</label>
                      <input type="text" placeholder="Name" id="name" name="name" value="{{ old('name') ?? $edit['profile']->name }}" required class="form-control deu-checkinput @error('name') is-invalid @enderror">
                      @error('name')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                  </div>
                  <div class="col-md-6 position-relative" aos="fade-left">
                      <label class="deu-contactadress">Password</label>
                      <input type="password" placeholder="Password" id="password" name="password" class="form-control deu-checkinput @error('password') is-invalid @enderror" onkeypress="return /^([0-9a-zA-Z!@#$%^&*(\).,<>{}[\]<>?_=+\-|;:\'\/\s])*[^\s]\1*$/.test(event.key)">
                      <span class="seepassword1" style="display:none" onclick="hide_password(this)"><i class="fa fa-eye"></i></span>
                      <span class="seepassword1"  onclick="see_password(this)"><i class="fa fa-eye-slash"></i></span>
            @error('password')
              <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
              </span>
            @enderror
                  </div>
              </div>
              <div class="row col-12">
                  <div class="col-md-6" aos="fade-right">
                      <label class="deu-contactadress">Email Id</label>
                      <input type="email" placeholder="Email Id" id="email" name="email" value="{{ old('email') ?? $edit['profile']->email }}" required class="form-control deu-checkinput @error('email') is-invalid @enderror">
            @error('email')
              <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
              </span>
            @enderror
                  </div>
                  <div class="col-md-6 position-relative" aos="fade-left">
                      <label class="deu-contactadress">Confirm Password</label>
                      <input type="password" placeholder="Confirm Password" id="password_confirmation" name="password_confirmation" class="form-control deu-checkinput @error('password_confirmation') is-invalid @enderror" onkeypress="return /^([0-9a-zA-Z!@#$%^&*(\).,<>{}[\]<>?_=+\-|;:\'\/\s])*[^\s]\1*$/.test(event.key)">
                      <span class="seepassword1" style="display:none;" onclick="hide_password(this)"><i class="fa fa-eye"></i></span>
                      <span class="seepassword1" onclick="see_password(this)"><i class="fa fa-eye-slash"></i></span>
            @error('password_confirmation')
              <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
              </span>
            @enderror
                  </div>
              </div>
              <div class="row col-12">
                  <div class="col-md-6" aos="fade-right">
                      <label class="deu-contactadress">Phone Number</label>
                      <input type="number" placeholder="Phone Number" id="user_phone" name="user_phone" value="{{ old('user_phone') ?? $edit['profile']->user_phone }}" required class="form-control deu-checkinput @error('user_phone') is-invalid @enderror" onkeypress="return /^[0-9\s]*$/.test(event.key)">
            @error('user_phone')
              <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
              </span>
            @enderror
                  </div>
                  <div class="col-md-6"  aos="fade-right">
                    <label class="deu-contactadress">Address</label>
                    <input type="text" placeholder="Address" id="user_address" name="user_address" value="{{ old('user_address') ?? $edit['profile']->user_address }}" class="form-control deu-checkinput">
                  </div>
              </div>
              <div class="row col-12">
                <div class="col-md-6"  aos="fade-right">
                  <label class="deu-contactadress">Country</label>
                  <select class="form-control deu-checkinput" style="height:60px;" name="user_country">
                  <option value="" disabled selected>Select Country</option>
                  @foreach($allcountry as $country)
                  <option value="{{ $country->country_id }}" @if($edit['profile']->user_country && $edit['profile']->user_country == $country->country_id) selected @endif>{{ $country->country_name }}</option>
                  @endforeach
                  </select>
                </div>
                <div class="col-md-6"  aos="fade-right">
                  <label class="deu-contactadress">State</label>
                  <input type="text" placeholder="State" id="user_state" name="user_state" value="{{ old('user_state') ?? $edit['profile']->user_state }}" class="form-control deu-checkinput">
                </div>
              </div>
              <div class="row col-12">
                <div class="col-md-6"  aos="fade-right">
                  <label class="deu-contactadress">City</label>
                  <input type="text" placeholder="City" id="user_city" name="user_city" value="{{ old('user_city') ?? $edit['profile']->user_city }}" class="form-control deu-checkinput">
                </div>
                <div class="col-md-6"  aos="fade-right">
                  <label class="deu-contactadress">ZIP Code</label>
                  <input type="text" maxlength="6" placeholder="ZIP Code" id="user_pincode" name="user_pincode" value="{{ old('user_pincode') ?? $edit['profile']->user_pincode }}" class="form-control deu-checkinput" onkeypress="return /^[0-9]*$/.test(event.key)">
                </div>
              </div>
              <input type="hidden" name="edit_id" value="{{ $edit['profile']->user_token }}">
              <div class="text-center" aos="fade-left">
                  <button type="submit" class="deu-editbtn px-5" style="border-radius: 5px;font-size: 1.4rem;">Update</button>
              </div>
          </div>
          </form>
      </div>
  </div>
</div>

@endsection

@section('script')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>

@endsection
