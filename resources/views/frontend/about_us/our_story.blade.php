@extends('frontend.layouts.app')

@section('title')
  Home
@endsection

@section('style')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/7.3.1/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/7.3.1/swiper-bundle.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/css/swiper.min.css">
<link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@500&family=Montserrat:wght@500&family=Nunito:wght@500;600;700;900&family=Roboto:wght@500&display=swap"
        rel="stylesheet">
@endsection

@section('content')

<div class="container-fluid bgteam-overlay">
    <div class="text-left">
        <h1 class="deu-meethead">Our Story</h1>
    </div>
</div>

<div class="us-section">
    <div class="container-fluid px-5 mt-4">
        <div class="row deu-padds align-items-center">
            <div class="col-md-6 col-sm-6 mb-5">
                <p class="story-group" aos="fade-right"><span style="color: #3787C9;">Kanlife Group</span> - Enabling efficient
                    product distribution</p>
            </div>
            <div class="col-md-6 col-sm-6 mb-5" aos="fade-left">
                <p class="story-txt">Over the years kanlife has become the partner of choice for medical equipment
                    manufacturers looking to introduce,
                    establish and grow heir business and channel partner networking India and South East Asia.</p>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row deu-misionpads">
        <div class="container p-0 px-md-5">
            <div class="row py-3">
                <p class="vision-head" aos="zoom-in">Mission</p>
            </div>
            <div class="row mb-5 align-items-center">
                <div class="col-md-6 col-sm-6 pe-5">
                <img class="img-fluid" aos="fade-right" src="{{ asset('public/image/mission.png') }}">
                </div>
                <div class="col-md-6 col-sm-6 ps-5">
                    <p class="vision-txt" aos="fade-left">Over the years kanlife has become the partner of choice for medical
                        equipment manufacturers looking to introduce,
                        establish and grow heir business and channel partner networking India and South East Asia.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid deu-visionpads">
    <div class="row">
        <div class="container p-0 px-md-5 mt-5">
            <div class="row mb-5 align-items-center">
                <div class="col-md-6 col-sm-6 pe-5">
                    <p class="vision-head pb-5" aos="zoom-in">Vision</p>
                    <p class="vision-txt" aos="fade-right">Kanlife Group was conceptualized and founded in 2009 in Singapore as
                        Kanlife Asia Pte. Ltd. with a vision to provide a
                        go-to- market platform to medical technology and healthcare companies from across the globe
                        that are looking to establish a presence or strengthen their distribution foothold in Asia.
                    </p>
                </div>
                <div class="col-md-6 col-sm-6 ps-5">
                <img class="img-fluid" aos="fade-left" src="{{ asset('public/image/vision.png') }}">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid mt-5">
    <div class="row pt-5">
        <div class="col-md-12 position-relative">
            <p class="deu-journey" aos="zoom-in">Our Journey</p>
        </div>
        <div>
        <div class="container mt-5 mb-5">
	<div class="row py-5">
		<div class="col-md-12 offset-md-0">
            <div class="d-flex">
                <img aos="fade-up" style="width:150px; margin-left:-40px; height: fit-content;" src="{{ asset('public/img/logo1.png') }}" alt="">
                <div aos="fade-left"class="toptext">
                <h4>OUR JOURNEY</h4>
                <h1>HOW IT ALL BEGAN</h1>
                <h5>The Foundation of Kanlife</h5>
                <li>
                Started As A Small Family Owned Trading Firm - Mumbai- India
            </li>

                </div>
                
            </div>
			<ul class="timeline">
				<li>
					<a data-bs-toggle="collapse" class="design1" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">2004</a>
                    <div class="collapse multi-collapse show" id="multiCollapseExample1">
                    <div class="row">
                    <div class="col-md-5 text-end">
                        <img aos="fade-up" src="{{ asset('public/img/stock_ui.png') }}" alt="">
                    </div>
                    <div class="col-md-6 m-auto offset-md-0" aos="fade-left">
                        <ul>
                            <li>  Established Kanlife Asia Pte Ltd. Singapore. Medical / Healthcare Import & Export</li>
                        </ul>    
                    </div>
                        </div>
					  </div>
                </li>
				<li>
					<a data-bs-toggle="collapse"  class="design1"  href="#multiCollapseExample2" role="button" aria-expanded="false" aria-controls="multiCollapseExample2">2008</a>
                    <div class="collapse multi-collapse show" id="multiCollapseExample2">
                    <div class="row">
                   
                    <div class="col-md-5 m-auto offset-md-2 order-2 order-md-1" aos="fade-up">
                    <ul>
                        <li>  Established Direct Sales Team In Malaysia And Indonesia.
                  </li>
                    </ul>  
                    </div>
                    <div class="col-md-5 text-end  order-1 order-md-2">
                        <img  aos="fade-left" src="{{ asset('public/img/maskg.png') }}" alt="">
                    </div>
                   
                        </div>
					  </div>
                   	</li>
				<li>
					<a data-bs-toggle="collapse" class="design1"  href="#multiCollapseExample3" role="button" aria-expanded="false" aria-controls="multiCollapseExample3">2009</a>
                    <div class="collapse multi-collapse show" id="multiCollapseExample3">
                    <div class="row">
                    <div class="col-md-5 text-end">
                        <img aos="fade-up" src="{{ asset('public/img/stock_ui.png') }}" alt="">
                    </div>
                    <div class="col-md-6 m-auto offset-md-0" aos="fade-left">
                    <ul>
                        <li> Increased Channel Partner Base Toa Total Of 120 Across 9 Countries.
                  </li>
                    </ul>
                    </div>
                        </div>
					  </div>	
                </li>
                <li>
					<a data-bs-toggle="collapse" class="design1"  href="#multiCollapseExample4" role="button" aria-expanded="false" aria-controls="multiCollapseExample4">2019</a>
                    <div class="collapse multi-collapse show" id="multiCollapseExample4">
                    <div class="row">
                   
                    <div class="col-md-6 m-auto offset-md-2 order-2 order-md-1" aos="fade-up">
                    <ul>
                        <li> Established Kanlife India Pvt Ltd. Bangalore-India Import And Distribution.
                  </li>
                    </ul>
                    </div>
                    <div class="col-md-5 text-end order-1 order-md-2">
                        <img aos="fade-left" src="{{ asset('public/img/maskg.png') }}" alt="">
                    </div>
                        </div>
					  </div>	
                </li>
                <li>
					<a data-bs-toggle="collapse" class="design1"  href="#multiCollapseExample5" role="button" aria-expanded="false" aria-controls="multiCollapseExample5">2020</a>
                    <div class="collapse multi-collapse show" id="multiCollapseExample5">
                    <div class="row">
                    <div class="col-md-5 text-end">
                        <img aos="fade-up" src="{{ asset('public/img/stock_ui.png') }}" alt="">
                    </div>
                    <div class="col-md-6 m-auto offset-md-0" aos="fade-left">
                    <ul>
                        <li> Gastroenterology / Mepatology Products Equipment Pan-India
                  </li>
                  <li>Established Kanlife London Ltd Import Distribution Pan-Eu L Hygiene And Wellness Products.</li>
                  <li>Started Mfq Of Tamboos Range Of Women And Child Products</li>
                    </ul>
                    </div>
                    
                        </div>
					  </div>	
                </li>
                <li>
					<a data-bs-toggle="collapse" class="design1"  href="#multiCollapseExample6" role="button" aria-expanded="false" aria-controls="multiCollapseExample5">2021</a>
                    <div class="collapse multi-collapse show" id="multiCollapseExample6">
                    <div class="row">
                   
                    <div class="col-md-6 m-auto offset-md-0 order-2 order-md-1" aos="fade-up">
                    <ul >
                        <li> Dental Xray Products Distribution Pan-India
                  </li>
                  <li>Established Kanlife London Ltd Import Distribution Pan-Eu L Hygiene And Wellness Products</li>
                  <li>Started Mfq Of Tamboos Range Of Women And Child Products</li>
                    </ul>
                    </div>
                    <div class="col-md-5 text-end order-1 order-md-2">
                        <img  aos="fade-left" src="{{ asset('public/img/maskg.png') }}" alt="">
                    </div>
                        </div>
					  </div>	
                </li>
                <li>
					<a data-bs-toggle="collapse" class="design1"  href="#multiCollapseExample7" role="button" aria-expanded="false" aria-controls="multiCollapseExample5">2022</a>
                    <div class="collapse multi-collapse show" id="multiCollapseExample7">
                    <div class="row">
                    <div class="col-md-5 text-end">
                        <img aos="fade-up" src="{{ asset('public/img/stock_ui.png') }}" alt="">
                    </div>
                    <div class="col-md-6 m-auto offset-md-0" aos="fade-left">
                    <ul >
                        <li> Kanlife Kolkata And Mumbai Branches </li>
                    </ul>
                    </div>
                   
                        </div>
					  </div>	
                </li>
			</ul>
		</div>
	</div>
</div>

        </div>
        <!-- <img class="img-fluid" src="{{ asset('public/image/time1.png') }}"> -->
    </div>
</div>

@include('frontend.sections.ceo_desk')

<div class="container-fluid swipe-bgs">  
  <p class="deu-life" aos="fade-right">Life @</p> 
  <p class="deu-life1" aos="fade-left">Kanlife Group</p> 
  <div class="swiper-container deu-lifeposi">
    <div class="swiper-wrapper">
      <div class="swiper-slide" aos="fade-left">
        <img class="img-fluid" src="{{ asset('public/image/life.png') }}">
        <p class="text-left swipe-txts">Be part of global Events</p>
        <p class="text-left swipe-txts1">Get exposure to global trend event with us</p>
      </div>
      <div class="swiper-slide" aos="fade-right">
        <img class="img-fluid" src="{{ asset('public/image/life.png') }}">
        <p class="text-left swipe-txts">Be part of global Events</p>
        <p class="text-left swipe-txts1">Get exposure to global trend event with us</p>
      </div>
      <div class="swiper-slide" aos="fade-left">
        <img class="img-fluid" src="{{ asset('public/image/life.png') }}">
        <p class="text-left swipe-txts">Be part of global Events</p>
        <p class="text-left swipe-txts1">Get exposure to global trend event with us</p>
      </div>
      <div class="swiper-slide" aos="fade-right">
        <img class="img-fluid" src="{{ asset('public/image/life.png') }}">
        <p class="text-left swipe-txts">Be part of global Events</p>
        <p class="text-left swipe-txts1">Get exposure to global trend event with us</p>
      </div>
      <div class="swiper-slide" aos="fade-left">
        <img class="img-fluid" src="{{ asset('public/image/life.png') }}">
        <p class="text-left swipe-txts">Be part of global Events</p>
        <p class="text-left swipe-txts1">Get exposure to global trend event with us</p>
      </div>
      <div class="swiper-slide" aos="fade-right">
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
        crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/js/swiper.min.js"></script>
<script>
    $(document).ready(function () {
      var silder = $("#owl-carousel");
      silder.owlCarousel({
        autoplay: true,
        autoplayTimeout: 2000,
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
          768: { items: 3 },
          991: { items: 4 },
          1200: { items: 5 }
        }
      });
    });
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

<script>
$(document).ready(function() {
    $("#news-slider10").owlCarousel({
        items : 3,
        itemsDesktop:[1199,3],
        itemsDesktopSmall:[980,2],
        itemsMobile : [600,1],
        navigation:true,
        navigationText:["",""],
        pagination:true,
        autoPlay:true
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