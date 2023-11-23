@extends('frontend.layouts.app')

@section('meta')
<meta name="title" content="Digital Radiography | Pedodontist  | Orthodontist | Dentist">
<meta name="description" content="Non-invasive solution for fatty liver. Measure liver fat & scarring using ultrasound waves. Fast & painless. Act now for a healthier liver!">
<link rel="canonical" href="https://www.kanlifegroup.com/about-us/contact-us">
@endsection

@section('title')
  Home
@endsection

@section('style')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/7.3.1/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
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
@if (session('success'))
        <div class="col-sm-12">
        <div class="alert  alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
        </div>
    </div>
@endif
<div class="container-fluid bgteam-overlay" style="background:url({{asset('public/kanlife/contact_us.png')}});background-size: cover;background-position: center center;background-repeat: no-repeat;">
    <div class="text-left">
        <h1 class="deu-meethead">Connect With Us</h1>
    </div>
</div>
<div class="container-fl px-5 mt-5">
    <div class="row deu-conpads align-items-center">
        <div class="col-md-3 col-sm-3 text-center deu-conborder" aos="fade-right">
          <img class="img-fluid deucontactwid" src="{{ asset('public/image/location.png') }}">
            <p class="mt-1 mb-1 deu-contactadress1">Address</p>
        </div>
        <div class="col-md-9 col-sm-9" aos="fade-left">
          @if(array_intersect([$user_location],['india']))
            <p class="my-5 ps-3 deu-contacttxt">36/3, 1st Cross, Pukhraj Layout, Adugodi, Bangalore, Karnataka - 560030</p>
          @endif
          @if(array_intersect([$user_location],['singapore']))
            <p class="my-5 ps-3 deu-contacttxt">141 Middle Rd Singapore 188976</p>
          @endif
          @if(array_intersect([$user_location],['london']))
            <p class="my-5 ps-3 deu-contacttxt">27 Old Gloucester Street, London, England, WC1N 3AX</p>
          @endif
        </div>
    </div>
</div>

<div class="container-fluid px-5 mt-5">
        <div class="row deu-conpads align-items-center">
            <div class="col-md-3 col-sm-3 text-center deu-conborder" aos="fade-right">
            <img class="img-fluid deucontactwid" src="{{ asset('public/image/phone.png') }}">
                <p class="mt-1 mb-1 deu-contactadress1">Phone No.</p>
            </div>
            <div class="col-md-9 col-sm-9" aos="fade-left">
                <p class="my-5 ps-3 deu-contacttxt">080 4224 2929</p>
            </div>
        </div>
</div>

<div class="container-fluid px-5 mt-5">
        <div class="row deu-conpads align-items-center">
            <div class="col-12 col-sm-3 text-center deu-conborder" aos="fade-right">
                <img class="img-fluid deucontactwid" src="{{ asset('public/image/email.png') }}">
                <p class="mt-1 mb-1 deu-contactadress1">Email</p>
            </div>
            <div class="col-12 col-sm-3 text-center deu-conborder deu-conborder-margin" aos="fade-left">
                <p class="mb-2 deu-contactsales">Sales and product related support</p>
                <p class="deu-contactasia">sales@kanlifemedical.asia</p>
            </div>
            <div class="col-12 col-sm-3 text-center deu-conborder deu-conborder-margin" aos="fade-left" aos-delay="200">
                <p class="mb-2 deu-contactsales">Accounts related support</p>
              @if(array_intersect([$user_location],['india']))
                <p class="deu-contactasia">india@kanlifemedical.asia</p>
              @endif
              @if(array_intersect([$user_location],['singapore']))
                <p class="deu-contactasia">singapore@kanlifemedical.asia</p>
              @endif
              @if(array_intersect([$user_location],['london']))
                <p class="deu-contactasia">sales@tamboos.co.uk</p>
              @endif
            </div>
            <div class="col-12 col-sm-3 text-center deu-conborder-margin" aos="fade-left" aos-delay="400">
                <p class="mb-2 deu-contactsales">Marketing related support</p>
                <p class="deu-contactasia">marketing@kanlifemedical.asia</p>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <h3 class="text-center mt-5 mb-5 deu-bloghead" aos="zoom-in">Partner/Dealer With Us</h3>
    <div class="row deu-conborderss">
        <div class="col-md-12">
            <div class="container">
                <form class="form-horizontal" aos="fade-right" method="post" action="{{ route('save.contact') }}">
                  @csrf
                    <div class="form-group row justify-content-center px-3">
                        <div class="col-9 px-0">
                            <label class="deu-contactadress1">Name</label>
                            <input name="name" required type="text" placeholder="Enter Name" @auth value="{{Auth::user()->name}}" @endauth style="font-size: 20px;padding: 16px !important;"
                                class="form-control border-info placeicon deu-logininputs">
                        </div>
                    </div>
                    <div class="form-group row justify-content-center px-3">
                        <div class="col-9 px-0">
                            <label class="deu-contactadress1">Phone Number</label>
                            <input name="phone" onkeypress='return /^[0-9\s]*$/.test(event.key)' maxlength='10' minlength="10" type="text" placeholder="Enter Phone Number" @auth value="{{Auth::user()->user_phone}}" @endauth style="font-size: 20px;padding: 16px !important;"
                                class="form-control border-info placeicon deu-logininputs">
                        </div>
                    </div>
                    <div class="form-group row justify-content-center px-3">
                        <div class="col-9 px-0">
                            <label class="deu-contactadress1">Email ID</label>
                            <input name="email" required type="email" placeholder="Enter Email ID" @auth value="{{Auth::user()->email}}" @endauth style="font-size: 20px;padding: 16px !important;"
                                class="form-control border-info placeicon deu-logininputs">
                        </div>
                    </div>
                    @auth
                      @php
                        $address = '';
                        if(Auth::user()->user_address) $address .= Auth::user()->user_address;
                        if(Auth::user()->user_city) $address .= ' ,'.Auth::user()->user_city;
                        if(Auth::user()->user_state) $address .= ' ,'.Auth::user()->user_state;
                        if(Auth::user()->user_pincode) $address .= ' ,'.Auth::user()->user_pincode;
                      @endphp
                    @endauth
                    <div class="form-group row justify-content-center px-3">
                        <div class="col-9 px-0">
                            <label class="deu-contactadress1">Address</label>
                            <input name="address" type="text" placeholder="House number and street name" @auth value="{{$address}}" @endauth style="font-size: 20px;padding: 16px !important;"
                                class="form-control border-info placeicon deu-logininputs">
                        </div>
                    </div>
                    <div class="form-group row justify-content-center px-3">
                        <div class="col-9 px-0">
                            <label class="deu-contactadress1">Message</label>
                            <textarea required name="message" class="form-control deu-logininputs" rows="3" placeholder="Enter Message"
                            style="font-size: 20px;padding: 16px !important;" id="comment"></textarea>
                        </div>
                    </div>
                    <div class="form-group row justify-content-center px-3">
                        <div class="col-9 px-0">
                            <div class="form-check-inline">
                                <label class="form-check-label deu-contactadress1">
                                    <input required name="type" type="radio" value="Dealer" class="form-check-input me-3" >Dealer
                                </label>
                            </div>
                            <div class="form-check-inline">
                                <label class="form-check-label deu-contactadress1">
                                    <input required name="type" type="radio" value="Partner" class="form-check-input me-3" >Partner
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row justify-content-center mt-5 text-center">
                        <div class="col-5 px-3 col-lg-4">
                            <button class="about-more">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@if(array_intersect([$user_location],['india']))
<div class="container">
    <h3 class="text-center mt-5 mb-5 deu-bloghead" aos="zoom-in">Our Branch in India</h3>
</div>
<div class="container deu-branchgray">
    <div class="row">
        <div class="col-lg-4 mb-4 mb-lg-0">
            <div class="card deu-teamcards1" aos="fade-up">
                <div class="card-body" >
                    <p class="deu-conlocation">BANGALORE</p>
                    <p class="mt-4 deu-coN">
                        <img class="img-fluid deu-contactwid" src="{{ asset('public/image/location.png') }}">  36/3, 1st Cross, Pukhraj Layout, Adugodi, Bangalore - 560030
                    </p>
                    <p class="mt-4 deu-coN">
                        <img class="img-fluid deu-contactwid" src="{{ asset('public/image/phone.png') }}"> +91 805 093 1561
                    </p>
                    <p class="mt-4 deu-coN">
                        <img class="img-fluid deu-contactwid" src="{{ asset('public/image/email.png') }}"> 
                        india@kanlifemedical.asia
                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-4 mb-lg-0">
            <div class="card deu-teamcards1" aos="fade-up" aos-delay="300">
                <div class="card-body">
                    <p class="deu-conlocation">MUMBAI</p>
                    <p class="mt-4 deu-coN">
                        <img class="img-fluid deu-contactwid" src="{{ asset('public/image/location.png') }}"> 10th Floor, Ajay Apartment Complex, Hansraj Lane, Mazgaon, Mumbai 400010

                    </p>
                    <p class="mt-4 deu-coN">
                        <img class="img-fluid deu-contactwid" src="{{ asset('public/image/phone.png') }}">  +91 805 093 1561
                    </p>
                    <p class="mt-4 deu-coN">
                        <img class="img-fluid deu-contactwid" src="{{ asset('public/image/email.png') }}"> 
                        sylvester@kanlifemedical.asia
                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card deu-teamcards1" aos="fade-up" aos-delay="500">
                <div class="card-body">
                    <p class="deu-conlocation">KOLKATA</p>
                    <p class="mt-4 deu-coN">
                        <img class="img-fluid deu-contactwid" src="{{ asset('public/image/location.png') }}">  IFS Business Center, 206/1, Rash Behari Ave, opp. Standard Chartered Bank, Hindustan Park, Gariahat, Kolkata 700029

                    </p>
                    <p class="mt-4 deu-coN">
                        <img class="img-fluid deu-contactwid" src="{{ asset('public/image/phone.png') }}">  +91 805 093 1561
                    </p>
                    <p class="mt-4 deu-coN">
                        <img class="img-fluid deu-contactwid" src="{{ asset('public/image/email.png') }}"> 
                        hirak@kanlifemedical.asia
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
@include('frontend.sections.get_in_touch')

@endsection

@section('script')
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
        crossorigin="anonymous"></script>
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
    <script>
        $(document).ready(function () {
            $("#news-slider10").owlCarousel({
                items: 3,
                itemsDesktop: [1199, 3],
                itemsDesktopSmall: [980, 2],
                itemsMobile: [600, 1],
                navigation: true,
                navigationText: ["", ""],
                pagination: true,
                autoPlay: true
            });
        });
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>
    <script>
        $(document).ready(function () {
            var silder = $(".owl-carousel");
            silder.owlCarousel({
                autoplay: true,
                autoplayTimeout: 3000,
                autoplayHoverPause: false,
                items: 1,
                stagePadding: 20,
                center: true,
                nav: false,
                margin: 30,
                dots: true,
                loop: true,
                responsive: {
                    0: { items: 1 },
                    480: { items: 2 },
                    575: { items: 2 },
                    768: { items: 2 },
                    991: { items: 3 },
                    1200: { items: 3 }
                }
            });
        });
    </script>
@endsection