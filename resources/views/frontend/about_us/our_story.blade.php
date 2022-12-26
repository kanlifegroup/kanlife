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
		<h1 class="deu-meethead">Our Story</h1>
	</div>
</div>

<div class="us-section">
  <div class="container">
    <div class="row deu-padds">
      <div class="col-md-6 col-sm-6 mt-5 mb-5">
        <p class="story-group"><span style="color: #3787C9;">Kanlife Group</span> - Enabling efficient product distribution</p>
      </div>	
      <div class="col-md-6 col-sm-6 mt-5 mb-5">
        <p class="story-txt">Over the years kanlife has become the partner of choice for medical equipment manufacturers looking to introduce, 
            establish and grow heir business and channel partner networking India and South East Asia.</p>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid">
  <div class="row deu-misionpads">
    <div class="container">
      <div class="row">
        <p class="vision-head">Mission</p>
      </div>
      <div class="row mb-5">
        <div class="col-md-6 col-sm-6">
          <img class="img-fluid" src="{{ asset('public/image/mission.png') }}">
        </div>	
        <div class="col-md-6 col-sm-6">
          <p class="vision-txt">Over the years kanlife has become the partner of choice for medical equipment manufacturers looking to introduce, 
              establish and grow heir business and channel partner networking India and South East Asia.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid deu-visionpads">
  <div class="row">
    <div class="container mt-5">
      <div class="row mb-5">
        <div class="col-md-6 col-sm-6">
          <p class="vision-head">Vision</p>
          <p class="vision-txt">Kanlife Group was conceptualized and founded in 2009 in Singapore as Kanlife Asia Pte. Ltd. with a vision to provide a 
              go-to- market platform to medical technology and healthcare companies from across the globe that are looking to establish a presence or strengthen their distribution foothold in Asia.</p>
        </div>
        <div class="col-md-6 col-sm-6">
          <img class="img-fluid" src="{{ asset('public/image/vision.png') }}">
        </div>	
      </div>
    </div>
  </div>
</div>

<div class="container-fluid mt-5">
  <div class="row">
    <div class="col-md-12">
      <p class="deu-journey">Our Journey</p>
    </div>
      <img class="img-fluid" src="{{ asset('public/image/time1.png') }}">
  </div>
</div>

@include('frontend.sections.ceo_desk')

<div class="container-fluid swipe-bgs">  
  <p class="deu-life">Life @</p> 
  <p class="deu-life1">Kanlife Group</p> 
  <div class="swiper-container deu-lifeposi">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img class="img-fluid" src="{{ asset('public/image/life.png') }}">
        <p class="text-left swipe-txts">Be part of global Events</p>
        <p class="text-left swipe-txts1">Get exposure to global trend event with us</p>
      </div>
      <div class="swiper-slide">
        <img class="img-fluid" src="{{ asset('public/image/life.png') }}">
        <p class="text-left swipe-txts">Be part of global Events</p>
        <p class="text-left swipe-txts1">Get exposure to global trend event with us</p>
      </div>
      <div class="swiper-slide">
        <img class="img-fluid" src="{{ asset('public/image/life.png') }}">
        <p class="text-left swipe-txts">Be part of global Events</p>
        <p class="text-left swipe-txts1">Get exposure to global trend event with us</p>
      </div>
      <div class="swiper-slide">
        <img class="img-fluid" src="{{ asset('public/image/life.png') }}">
        <p class="text-left swipe-txts">Be part of global Events</p>
        <p class="text-left swipe-txts1">Get exposure to global trend event with us</p>
      </div>
      <div class="swiper-slide">
        <img class="img-fluid" src="{{ asset('public/image/life.png') }}">
        <p class="text-left swipe-txts">Be part of global Events</p>
        <p class="text-left swipe-txts1">Get exposure to global trend event with us</p>
      </div>
      <div class="swiper-slide">
        <img class="img-fluid" src="{{ asset('public/image/life.png') }}">
        <p class="text-left swipe-txts">Be part of global Events</p>
        <p class="text-left swipe-txts1">Get exposure to global trend event with us</p>
      </div>
    </div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
  </div>
</div> 

@include('frontend.sections.brands')

@include('frontend.sections.get_in_touch')

@endsection

@section('script')
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/js/swiper.min.js"></script>
<script>
$(document).ready(function() {
// Swiper: Slider
    new Swiper('.swiper-container', {
        loop: true,
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        slidesPerView: 3,
        paginationClickable: true,
        spaceBetween: 20,
        breakpoints: {
            1920: {
                slidesPerView: 3,
                spaceBetween: 30
            },
            1028: {
                slidesPerView: 2,
                spaceBetween: 30
            },
            480: {
                slidesPerView: 1,
                spaceBetween: 10
            }
        }
    });
});
</script>
@endsection