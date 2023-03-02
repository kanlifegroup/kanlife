@extends('frontend.layouts.app')

@section('title')
  Home
@endsection

@section('style')
<link rel="stylesheet" href="https://cdn.rawgit.com/michalsnik/aos/1.0.1/dist/aos.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/7.3.1/swiper-bundle.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@500&family=Montserrat:wght@500&family=Nunito:wght@500;600;700;900&family=Roboto:wght@500&display=swap" rel="stylesheet">
@endsection

@section('content')

<div class="banner slider">
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
    <div class="carousel-indicators">
      @foreach($slideshow['view'] as $key => $slide)
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{$key}}" class="@if($key == 0) active @endif" aria-current="true" aria-label="Slide {{$key+1}}"></button>
      @endforeach
    </div>
    <div class="carousel-inner">
      @foreach($slideshow['view'] as $key => $slide)
      <div class="carousel-item @if($key == 0) active @endif">
        <img src="{{ url('/') }}/public/storage/slideshow/{{ $slide->slide_image }}" class="d-block w-100 banerw"  alt="...">
        <div class="carousel-caption deu-slidepad text-left">
          <div class="col-12">
            <h1 class="deu-slidehead text-start pb-4" aos="zoom-in">Kanlife Group </h1>
            <div class="d-flex flex-column flex-md-row flex-wrap gap-3 gap-md-5 ms-3">
              <div class="d-flex" aos="fade-down">
                <img class="img-fluid deu-healthimg" src="{{ asset('public/image/s1.png') }}">
                <p class="deu-health">Health</p>
              </div>
              <div class="d-flex" aos="fade-down"  aos-delay="400">
                <img class="img-fluid deu-healthimg" src="{{ asset('public/image/s2.png') }}">
                <p class="deu-health">Medical</p>
              </div>
              <div class="d-flex" aos="fade-down"  aos-delay="800">
                <img class="img-fluid deu-healthimg" src="{{ asset('public/image/s3.png') }}">
                <p class="deu-health">Wellness</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</div>

<div class="container-fluid my-5">
  <div class="row g-0 gap-3">
    <div class="col-12 col-md" aos="fade-right" >
      <div class="inforide h-100">
        <div class="row g-0 justify-content-between">
          <div class="order-2 order-md-1 col-md-7 fontsty d-flex flex-column justify-content-between ">
            <h4 class="deu-buytxt">Buy Medical Equipment.</h4>
            <button class="deu-buybtn">Buy Now</button>
          </div>
          <div class="order-1 order-md-2 col-md-5 rideone d-flex justify-content-md-end justify-content-center mb-4 mb-md-0 align-items-center">
            <img class="img-fluid deu-buyheight" src="{{ asset('public/image/buy1.png') }}">
          </div>
        </div>
      </div>
    </div>
    <div class="col-12 col-md" aos="fade-down" aos-delay="400">
      <div class="inforide1 h-100">
        <div class="row g-0 justify-content-between">
          <div class="order-2 order-md-1 col-md-7 fontsty d-flex flex-column justify-content-between">
            <h4 class="deu-buytxt">Rent Medical Equipment.</h4>
            <button class="deu-buybtn">Rent Now</button>
          </div>
          <div class="order-1 order-md-2 col-md-5 rideone d-flex justify-content-md-end justify-content-center mb-4 mb-md-0 align-items-center">
            <img class="img-fluid deu-buyheight" src="{{ asset('public/image/buy2.png') }}">
          </div>
        </div>
      </div>
    </div>
    <div class="col-12 col-md"  aos="fade-left" aos-delay="800">
      <div class="inforide2 h-100">
        <div class="row h-100 g-0 justify-content-between">
          <div class="order-2 order-md-1 col-md-7 fontsty d-flex flex-column justify-content-between">
            <h4 class="deu-buytxt">Consult A Dr.</h4>
            <button class="deu-buybtn">Consult Now</button>
          </div>
          <div class="order-1 order-md-2 col-md-5 rideone d-flex justify-content-md-end justify-content-center mb-4 mb-md-0 align-items-center">
            <img class="img-fluid deu-buyheight" src="{{ asset('public/image/buy3.png') }}">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- About Us -->
<div class="us-section">
  <div class="container pb-5">
    <h3 class="text-center mb-3 mt-5 deu-bloghead">About Us</h3>
    <div class="row mt-3 align-items-center">
      <div class="col-md-5 col-sm-6 h-100">
        <div class="about-img d-flex align-items-center" aos="fade-right">
          <img class="img-fluid deu-marg" src="{{ asset('public/image/us.png') }}" alt="">
        </div>
      </div>
      <div class="col-md-7 col-sm-6" aos="fade-left">
        <div class="about-title clearfix">
          <div class="sub-head">Global medical and health care delivered locally</div>
          <div class="mt-3 mb-3 contents">Kanlife Group was conceptualized and founded in 2009 in Singapore as
            Kanlife Asia Pte. Ltd. with a vision to provide a go-to-market platform
            to medical technology and healthcare companies from across the globe that are looking to
            establish a presence or strengthen their distribution foothold in Asia.</div>
          <div class="mt-3 mb-3 contents">Over the years Kanlife grew from a single shareholder company based out of
            Singapore to a multi-national group with shareholder limited companies at strategic global
            business locations like India and the UK.</div>
          <button class="about-more">Know More</button>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="about-section">
  <div class="container">
    <div class="row deu-knowborder align-items-center">
      <div class="col-md-7 col-sm-6" aos="fade-down">
        <div class="about-title clearfix">
          <div class="sub-head">Enabling efficient product distribution</div>
          <div class="mt-3 mb-3 contents">Over the years Kanlife has become the partner of choice for medical
            equipment manufacturers looking to introduce,
            establish and grow their business and channel partner network in India and South East Asia.
          </div>
          <button class="about-more">Know More</button>
        </div>
      </div>
      <div class="col-md-5 col-sm-6" aos="fade-up">
        <div class="about-img">
          <img class="img-fluid" src="{{ asset('public/image/video.png') }}" alt="">
        </div>
      </div>
    </div>
  </div>
</div>

@include('frontend.sections.ceo_desk')

<!-- Our Team -->
<section>
  <div class="container-fluid px-4 pt-5">
    <h3 class="text-center mt-5 mb-5 deu-bloghead">Our Team</h3>
    <div class="row">
      <div class="col-md-12">
        <div class="container-fluid">
          <ul class="row portfolio lightbox list-unstyled mb-0 shuffle boxed-portfolio" id="grid">
            <!-- project -->
            <li class="col-md-6 col-lg-4 project shuffle-item filtered" aos="fade-right">
              <div class="card mb-0">
                <div class="project m-0">
                  <figure class="portfolio-item">
                    <div class="hovereffect">
                      <img class="img-responsive" src="{{ asset('image/team.png') }}" alt="">
                    </div>
                  </figure>
                </div>
                <div class="card-body text-center">
                  <a href="#" class="card-title title-link mt-5">Dr. Jessica Tailor</a>
                  <p class="card-txt mt-2">Dental Surgeon</p>
                  <p class="card-text mt-3 mb-4">
                    <i class="fa fa-facebook-official larger deu-teamfa" aria-hidden="true"></i>
                    <i class="fa fa-twitter deu-teamfa" aria-hidden="true"></i>
                    <i class="fa fa-instagram deu-teamfa" aria-hidden="true"></i>
                    <i class="fa fa-linkedin-square deu-teamfa" aria-hidden="true"></i>
                  </p>
                </div>
              </div>
            </li>
            <li class="col-md-6 col-lg-4 project shuffle-item filtered" aos="fade-down">
              <div class="card mb-0">
                <div class="project m-0">
                  <figure class="portfolio-item">
                    <div class="hovereffect">
                      <img class="img-responsive" src="{{ asset('image/team.png') }}" alt="">
                    </div>
                  </figure>
                </div>
                <div class="card-body text-center">
                  <a href="#" class="card-title title-link mt-5">Dr. Jessica Tailor</a>
                  <p class="card-txt mt-2">Dental Surgeon</p>
                  <p class="card-text mt-3 mb-4">
                    <i class="fa fa-facebook-official larger deu-teamfa" aria-hidden="true"></i>
                    <i class="fa fa-twitter deu-teamfa" aria-hidden="true"></i>
                    <i class="fa fa-instagram deu-teamfa" aria-hidden="true"></i>
                    <i class="fa fa-linkedin-square deu-teamfa" aria-hidden="true"></i>
                  </p>
                </div>
              </div>
            </li>
            <li class="col-md-6 col-lg-4 project shuffle-item filtered" aos="fade-left">
              <div class="card mb-0">
                <div class="project m-0">
                  <figure class="portfolio-item">
                    <div class="hovereffect">
                      <img class="img-responsive" src="{{ asset('image/team.png') }}" alt="">
                    </div>
                  </figure>
                </div>
                <div class="card-body text-center">
                  <a href="#" class="card-title title-link mt-5">Dr. Jessica Tailor</a>
                  <p class="card-txt mt-2">Dental Surgeon</p>
                  <p class="card-text mt-3 mb-4">
                    <i class="fa fa-facebook-official larger deu-teamfa" aria-hidden="true"></i>
                    <i class="fa fa-twitter deu-teamfa" aria-hidden="true"></i>
                    <i class="fa fa-instagram deu-teamfa" aria-hidden="true"></i>
                    <i class="fa fa-linkedin-square deu-teamfa" aria-hidden="true"></i>
                  </p>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Rapidly Expanding Network -->
<section>
  <div class="container pt-5">
    <h3 class="text-center mt-5 mb-5 deu-bloghead">Rapidly Expanding Network</h3>
  </div>
  <div class="container-fluid bg-overlay">
    <div class="container-fluid px-5">
      <div class="row text-center deu-rapidbg p-3">
        <div class="row g-0 gap-4 justify-content-around">
          <div class="col-12 col-md-auto" aos="fade-right">
            <div class="deu-dealers">Dealers Network</div>
            <div class="deu-dealershead">150+</div>
            <div class="deu-dealerstxt">Dealres</div>
          </div>
          <div class="col-12 col-md-auto" aos="fade-down" aos-delay="300">
            <div class="deu-dealers">Reach-India</div>
            <div class="deu-dealershead">50+</div>
            <div class="deu-dealerstxt">Cities</div>
          </div>
          <div class="col-12 col-md-auto" aos="fade-up" aos-delay="600">
            <div class="deu-dealers">Reach-Global</div>
            <div class="deu-dealershead">20+</div>
            <div class="deu-dealerstxt">Countries</div>
          </div>
          <div class="col-12 col-md-auto" aos="fade-down" aos-delay="900">
            <div class="deu-dealers">Offices</div>
            <div class="deu-dealershead">6</div>
          </div>
          <div class="col-12 col-md-auto" aos="fade-left" aos-delay="1200">
            <div class="deu-dealers">Warehouses</div>
            <div class="deu-dealershead">3</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@include('frontend.sections.blog')

<!-- Testimonials -->
@if(count($testimonials)>0)
<div class="container mb-5 pt-5">
  <p class="text-center deu-bloghead mt-5">Testimonials</p>
  <div class="owl-carousel owl-theme mt-5" id="owl-testi">
    @foreach($testimonials as $testimonial)
    <div class="owl-item">
      <div class="card">
        <div class="row col-md-12">
          <div class="col-md-4">
            @if($testimonial->image!='')
            <img class="img-fluid" src="{{ url('/') }}/public/storage/testimonial/{{ $testimonial->image }}" alt="">
            @else
            <img class="img-fluid" src="{{ asset('public/image/testimonial.png') }}" alt="">
            @endif
          </div>
          <div class="col-md-8">
            <p class="deu-john">{{$testimonial->name}}</p>
            <p class="deu-entro">{{$testimonial->designation}}</p>
          </div>
        </div>
        <div class="testimonial mt-4 mb-2">
        {{$testimonial->description}}
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>
@endif

<!-- Our Brands -->
<section class="deu-bandbg">
  <div class="container mt-5">
    <p class="text-center deu-bloghead">Our Brands</p>
    <p class="text-center deu-bandtxt">World class products from the best Global brands</p>
  </div>
  <div class="container deu-bandlogopad">
  <div class="row">
<div class="owl-carousel owl-theme" id="owl-carousel">
  
  <div class="item  ">
     <img src="{{ asset('public/image/our1.png') }}" class="img-responsive" alt="client-logo">
                    </div>
  
  <div class="item ">
     <img src="{{ asset('public/image/our2.png') }}" class="img-responsive" alt="client-logo">
                    </div>
  
   <div class="item ">
    <img src="{{ asset('public/image/our3.png') }}" class="img-responsive" alt="client-logo">
                    </div>
  
   <div class="item">
      <img src="{{ asset('public/image/our4.png') }}" class="img-responsive" alt="client-logo">
                    </div>
  
   <div class="item">
      <img src="{{ asset('public/image/our5.png') }}" class="img-responsive" alt="client-logo">
                    </div>
                </div>
            </div>

</div>
</section>

@endsection

@section('script')
<script src="https://cdn.rawgit.com/michalsnik/aos/1.0.1/dist/aos.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>
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

    $(document).ready(function () {
      var silder = $("#owl-testi");
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
    $(document).ready(function () {
      var silder = $("#owl-blog");
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
    $(document).ready(function() {
      $("#news-slider10").owlCarousel({
        items : 3,
        itemsDesktop:[1199,3],
        itemsDesktopSmall:[980,2],
        itemsMobile : [600,1],
        navigation:true,
        navigationText:["",""],
        pagination:true,
        autoPlay:true,
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

    $(document).ready(function() {
      $(".logS").click(function() {
        $(".regiS").show();
      });
      $(".logS").click(function() {
        $(".logS1").hide();
      });
      $(".logS12").click(function() {
        $(".forgeT").show();
      });
      $(".logS12").click(function() {
        $(".logS1").hide();
      });
    });
AOS.init({
				easing: 'ease-out-back',
				duration: 1000
			});

hljs.initHighlightingOnLoad();

			$('.hero__scroll').on('click', function(e) {
				$('html, body').animate({
					scrollTop: $(window).height()
				}, 1200);
			});
  </script>
@endsection