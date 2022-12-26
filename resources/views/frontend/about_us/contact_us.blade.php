@extends('frontend.layouts.app')

@section('title')
  Home
@endsection

@section('style')
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/7.3.1/swiper-bundle.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@500&family=Montserrat:wght@500&family=Nunito:wght@500;600;700;900&family=Roboto:wght@500&display=swap" rel="stylesheet">
@endsection

@section('content')

<div class="container-fluid bgteam-overlay">
	<div class="text-left">
		<h1 class="deu-meethead">Connect With Us</h1>
	</div>
</div>

<div class="container mt-5">
  <div class="row deu-conpads">
    <div class="col-md-3 col-sm-3 text-center deu-conborder">
      <img class="img-fluid deucontactwid" src="{{ asset('public/image/location.png') }}">
      <p class="mt-1 mb-1 deu-contactadress">Address</p>
    </div>
    <div class="col-md-9 col-sm-9">
      <p class="mt-5 mb-3 deu-contacttxt">36/3, 1st Cross, Pukhraj Layout, Adugodi, Bangalore - 560030</p>
    </div>
  </div>
</div>

<div class="container mt-5">
  <div class="row deu-conpads">
    <div class="col-md-3 col-sm-3 text-center deu-conborder">
      <img class="img-fluid deucontactwid" src="{{ asset('public/image/phone.png') }}">
      <p class="mt-1 mb-1 deu-contactadress">Phone No.</p>
    </div>
    <div class="col-md-9 col-sm-9">
      <p class="mt-5 mb-3 deu-contacttxt">080 4224 2929</p>
    </div>
  </div>
</div>

<div class="container mt-5">
  <div class="row deu-conpads">
    <div class="col-md-3 col-sm-3 text-center deu-conborder">
      <img class="img-fluid deucontactwid" src="{{ asset('public/image/email.png') }}">
      <p class="mt-1 mb-1 deu-contactadress">Email</p>
    </div>
    <div class="col-md-3 col-sm-3 text-center deu-conborder">
      <p class="mb-2 deu-contactsales">Sales and product related support</p>
      <p class="deu-contactasia">sales@kanlifemedical.asia</p>
    </div>
    <div class="col-md-3 col-sm-3 text-center deu-conborder">
      <p class="mb-2 deu-contactsales">Accounts related support</p>
      <p class="deu-contactasia">india@kanlifemedical.asia</p>
    </div>
    <div class="col-md-3 col-sm-3 text-center">
      <p class="mb-2 deu-contactsales">Marketing related support</p>
      <p class="deu-contactasia">marketing@kanlifemedical.asia</p>
    </div>
  </div>
</div>

<div class="container">
  <h3 class="text-center mt-5 mb-5 deu-bloghead">Partner/Dealer With Us</h3>
  <div class="row deu-conborderss">
    <div class="col-md-12">
      <div class="container">
        <form class="form-horizontal">
          <div class="form-group row justify-content-center px-3">
            <div class="col-9 px-0">
              <label class="deu-contactadress">Name</label>
              <input type="text" placeholder="Enter Name" class="form-control border-info placeicon deu-logininputs">
            </div>
          </div>
          <div class="form-group row justify-content-center px-3">
            <div class="col-9 px-0">
              <label class="deu-contactadress">Phone Number</label>
              <input type="text" placeholder="Enter Phone Number" class="form-control border-info placeicon deu-logininputs">
            </div>
          </div>
          <div class="form-group row justify-content-center px-3">
            <div class="col-9 px-0">
              <label class="deu-contactadress">Email ID</label>
              <input type="text" placeholder="Enter Email ID" class="form-control border-info placeicon deu-logininputs">
            </div>
          </div>
          <div class="form-group row justify-content-center px-3">
            <div class="col-9 px-0">
              <label class="deu-contactadress">Address</label>
              <input type="text" placeholder="House number and street name" class="form-control border-info placeicon deu-logininputs">
            </div>
          </div>
          <div class="form-group row justify-content-center px-3">
            <div class="col-9 px-0">
              <label class="deu-contactadress">Message</label>
              <textarea class="form-control deu-logininputs" rows="3" placeholder="Enter Message" id="comment"></textarea>
            </div>
          </div>
          <div class="form-group row justify-content-center px-3">
            <div class="col-9 px-0">
              <div class="form-check-inline">
                <label class="form-check-label deu-contactadress">
                  <input type="radio" class="form-check-input" name="optradio">Dealer
                </label>
              </div>
              <div class="form-check-inline">
                <label class="form-check-label deu-contactadress">
                  <input type="radio" class="form-check-input" name="optradio">Partner
                </label>
              </div>
            </div>
          </div>
          <div class="form-group row justify-content-center mt-5 text-center">       
            <div class="col-3 px-3">
              <button class="about-more">Submit</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <h3 class="text-center mt-5 mb-5 deu-bloghead">Our Branch in India</h3>
</div>
<div class="container deu-branchgray">
  <div class="row">
    <div class="col-lg-4">
      <div class="card deu-teamcards">
        <div class="card-body">
          <p class="deu-conlocation">BANGALORE</p> 
          <p class="mt-4 deu-coN">
            <img class="img-fluid deu-contactwid" src="{{ asset('public/image/location.png') }}"> &nbsp; 36/3, 1st Cross, Pukhraj Layout, &nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Adugodi, Bangalore - 560030
          </p>
          <p class="mt-4 deu-coN">
            <img class="img-fluid deu-contactwid" src="{{ asset('public/image/phone.png') }}"> &nbsp; +91 9898675634
          </p>
          <p class="mt-4 deu-coN">
            <img class="img-fluid deu-contactwid" src="{{ asset('public/image/email.png') }}"> &nbsp; sales@kanlifemedical.asia
          </p>
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="card deu-teamcards">
        <div class="card-body">
          <p class="deu-conlocation">MUMBAI</p> 
          <p class="mt-4 deu-coN">
            <img class="img-fluid deu-contactwid" src="{{ asset('public/image/location.png') }}"> &nbsp; 36/3, 1st Cross, Pukhraj Layout, &nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Adugodi, Bangalore - 560030
          </p>
          <p class="mt-4 deu-coN">
            <img class="img-fluid deu-contactwid" src="{{ asset('public/image/phone.png') }}"> &nbsp; +91 9898675634
          </p>
          <p class="mt-4 deu-coN">
            <img class="img-fluid deu-contactwid" src="{{ asset('public/image/email.png') }}"> &nbsp; sales@kanlifemedical.asia
          </p>
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="card deu-teamcards">
        <div class="card-body"> 
          <p class="deu-conlocation">KOLKATA</p> 
          <p class="mt-4 deu-coN">
            <img class="img-fluid deu-contactwid" src="{{ asset('public/image/location.png') }}"> &nbsp; 36/3, 1st Cross, Pukhraj Layout, &nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Adugodi, Bangalore - 560030
          </p>
          <p class="mt-4 deu-coN">
            <img class="img-fluid deu-contactwid" src="{{ asset('public/image/phone.png') }}"> &nbsp; +91 9898675634
          </p>
          <p class="mt-4 deu-coN">
            <img class="img-fluid deu-contactwid" src="{{ asset('public/image/email.png') }}"> &nbsp; sales@kanlifemedical.asia
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
@include('frontend.sections.get_in_touch')

@endsection

@section('script')
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>
@endsection