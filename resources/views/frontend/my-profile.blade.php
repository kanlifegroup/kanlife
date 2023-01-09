@extends('frontend.layouts.app')

@section('title')
  Order confirmation
@endsection

@section('style')
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/7.3.1/swiper-bundle.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">

  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@500&display=swap" rel="stylesheet"> -->
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@500&family=Montserrat:wght@500&family=Nunito:wght@500;600;700;900&family=Roboto:wght@500&display=swap" rel="stylesheet">
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
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span class="fa fa-close" aria-hidden="true"></span>
          </button>
      </div>
      @endif
      @if ($message = Session::get('error'))
      <div class="alert alert-danger" role="alert">
        <span class="alert_icon lnr lnr-warning"></span>
        {{ $message }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span class="fa fa-close" aria-hidden="true"></span>
        </button>
      </div>
      @endif
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <p class="deu-carthead">Edit Profile</p>
      <form action="{{ route('my-profile') }}" method="post" enctype="multipart/form-data">
      {{ csrf_field() }}
      <div class="col-md-12 deu-personalline">
        <div class="row col-12 mt-4">
          <div class="col-md-6">
            <label class="deu-contactadress">Name</label>
            <input type="text" placeholder="Name" id="name" name="name" value="{{ old('name') ?? $edit['profile']->name }}" required class="form-control deu-checkinput @error('name') is-invalid @enderror">
            @error('name')
              <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
          <div class="col-md-6">
            <label class="deu-contactadress">Password</label>
            <input type="password" placeholder="Password" id="password" name="password" class="form-control deu-checkinput @error('password') is-invalid @enderror" onkeypress="return /^([0-9a-zA-Z!@#$%^&*(\).,<>{}[\]<>?_=+\-|;:\'\/\s])*[^\s]\1*$/.test(event.key)">
            @error('password')
              <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
        </div>
        <div class="row col-12">
          <div class="col-md-6">
            <label class="deu-contactadress">Email Id</label>
            <input type="email" placeholder="Email Id" id="email" name="email" value="{{ old('email') ?? $edit['profile']->email }}" required class="form-control deu-checkinput @error('email') is-invalid @enderror">
            @error('email')
              <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
          <div class="col-md-6">
            <label class="deu-contactadress">Confirm Password</label>
            <input type="password" placeholder="Confirm Password" id="password_confirmation" name="password_confirmation" class="form-control deu-checkinput @error('password_confirmation') is-invalid @enderror" onkeypress="return /^([0-9a-zA-Z!@#$%^&*(\).,<>{}[\]<>?_=+\-|;:\'\/\s])*[^\s]\1*$/.test(event.key)">
            @error('password_confirmation')
              <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
        </div>
        <div class="row col-12">
          <div class="col-md-6">
            <label class="deu-contactadress">Phone Number</label>
            <input type="number" placeholder="Phone Number" id="user_phone" name="user_phone" value="{{ old('user_phone') ?? $edit['profile']->user_phone }}" required class="form-control deu-checkinput @error('user_phone') is-invalid @enderror" onkeypress="return /^[0-9\s]*$/.test(event.key)">
            @error('user_phone')
              <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
        </div>
        <input type="hidden" name="edit_id" value="{{ $edit['profile']->user_token }}">
        <div class="text-center">
          <button type="submit" class="deu-editbtn">Edit Profile</button>
        </div>
      </div>
      </form>
    </div>
  </div>
</div>

@endsection

@section('script')
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

@endsection
