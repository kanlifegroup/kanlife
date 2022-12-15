@extends('frontend.layouts.app')

@section('title')
  Home
@endsection

@section('content')

<div class="banner slider">
  <div id="demo" class="carousel slide" data-ride="carousel"  data-interval="false">
    <!-- Indicators -->
    <ul class="carousel-indicators">
      @foreach($slideshow['view'] as $key => $slide)
      <li data-target="#demo" data-slide-to="{{$key}}" class="@if($key == 0) active @endif"></li>
      @endforeach
    </ul>
    <!-- The slideshow -->
    <div class="carousel-inner">
      @foreach($slideshow['view'] as $key => $slide)
        <div class="carousel-item @if($key == 0) active @endif">
          <img class="img-fluid deu-slideheight" src="{{ url('/') }}/public/storage/slideshow/{{ $slide->slide_image }}" alt="{{ $slide->slide_image }}">
          <div class="carousel-caption deu-slidepad text-left">
            <div class="col-md-6">
              <h1 class="pb-2 deu-slidehead">Kanlife Group </h1>
              <div class="row">
                <div class="col-md-4">
                  <img class="img-fluid deu-healthimg" src="{{ asset('public/image/s1.png') }}">
                  <p class="deu-health">Health</p>
                </div>
                <div class="col-md-4">
                  <img class="img-fluid deu-healthimg" src="{{ asset('public/image/s2.png') }}">
                  <p class="deu-health">Medical</p>
                </div>
                <div class="col-md-4">
                  <img class="img-fluid deu-healthimg" src="{{ asset('public/image/s3.png') }}">
                  <p class="deu-health">Wellness</p>
                </div>
              </div>
            </div>
          </div> 
        </div>
      @endforeach
    </div>
    <!--<a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>-->
  </div>
</div>

<div class="container mt-5 mb-5">
  <div class="row">
    <div class="col-lg-4 col-md-4 col-sm-6">
      <div class="inforide">
        <div class="row">
          <div class="col-lg-7 col-md-7 fontsty">
            <h4 class="deu-buytxt">Buy Medical Equipment’s.</h4>
            <button class="deu-buybtn">Buy Now</button>
          </div>
          <div class="col-lg-5 col-md-5 rideone">
            <img class="img-fluid deu-buyheight" src="{{ asset('public/image/buy1.png') }}">
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-6">
      <div class="inforide1">
        <div class="row">
          <div class="col-lg-7 col-md-7 fontsty">
            <h4 class="deu-buytxt">Rent Medical Equipment’s.</h4>
            <button class="deu-buybtn">Rent Now</button>
          </div>
          <div class="col-lg-5 col-md-5 rideone">
            <img class="img-fluid deu-buyheight" src="{{ asset('public/image/buy2.png') }}">
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-6">
      <div class="inforide2">
        <div class="row">
          <div class="col-lg-7 col-md-7 fontsty">
            <h4 class="deu-buytxt">Consult A Dr.</h4><br>
            <button class="deu-buybtn">Consult Now</button>
          </div>
          <div class="col-lg-5 col-md-5 rideone">
            <img class="img-fluid deu-buyheight" src="{{ asset('public/image/buy3.png') }}">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- About Us -->
<div class="us-section">
  <div class="container">
    <h3 class="text-center mb-5 deu-bloghead">About Us</h3>
    <div class="row">
      <div class="col-md-5 col-sm-6">
        <div class="about-img">
          <img class="img-fluid mt-5 deu-marg" src="{{ asset('public/image/us.png') }}" alt="">
        </div>
      </div>	
      <div class="col-md-7 col-sm-6">
        <div class="about-title clearfix">
          <h1>Global medical and health care delivered locally</h1>
          <p class="mt-3 mb-3">Kanlife Group was conceptualized and founded in 2009 in Singapore as Kanlife Asia Pte. Ltd. with a vision to provide a go-to-market platform
          to medical technology and healthcare companies from across the globe that are looking to establish a presence or strengthen their distribution foothold in Asia.</p>
          <p class="mt-3 mb-3">Over the years Kanlife grew from a single shareholder company based out of Singapore to a multi-national group with shareholder limited companies at strategic global business locations like India and the UK.</p>
          <button class="about-more">Know More</button>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="about-section">
  <div class="container">
    <div class="row deu-knowborder">
      <div class="col-md-7 col-sm-6">
        <div class="about-title clearfix">
          <h1>Enabling efficient product distribution</h1>
          <p class="mt-3 mb-3">Over the years Kanlife has become the partner of choice for medical equipment manufacturers looking to introduce,
              establish and grow their business and channel partner network in India and South East Asia.</p>
          <button class="about-more">Know More</button>
        </div>
      </div>
      <div class="col-md-5 col-sm-6">
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
  <div class="container">
    <h3 class="text-center mt-5 mb-5 deu-bloghead">Our Team</h3>
    <div class="row">
      <div class="col-md-12">
        <div class="container">
          <ul class="row portfolio lightbox list-unstyled mb-0 shuffle boxed-portfolio" id="grid" >
            <!-- project -->
            <li class="col-md-6 col-lg-4 project shuffle-item filtered" >
              <div class="card mb-0">
                <div class="project m-0">
                  <figure class="portfolio-item">
                    <div class="hovereffect">
                      <img class="img-responsive" src="{{ asset('public/image/team.png') }}" alt="">
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
            <li class="col-md-6 col-lg-4 project shuffle-item filtered" >
              <div class="card mb-0">
                <div class="project m-0">
                  <figure class="portfolio-item">
                    <div class="hovereffect">
                      <img class="img-responsive" src="{{ asset('public/image/team.png') }}" alt="">
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
            <li class="col-md-6 col-lg-4 project shuffle-item filtered" >
              <div class="card mb-0">
                <div class="project m-0">
                  <figure class="portfolio-item">
                    <div class="hovereffect">
                      <img class="img-responsive" src="{{ asset('public/image/team.png') }}" alt="">
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
          <!-- / portfolio -->
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Rapidly Expanding Network -->
<section>
  <div class="container">
    <h3 class="text-center mt-5 mb-5 deu-bloghead">Rapidly Expanding Network</h3>
  </div>
  <div class="container-fluid bg-overlay">
    <div class="container">
      <div class="row text-center deu-rapidbg">
        <div class="flex-container">
          <div>
            <p class="deu-dealers">Dealers Network</p>
            <p class="deu-dealershead">150+</p>
            <p class="deu-dealerstxt">Dealres</p>
          </div>
          <div>
            <p class="deu-dealers">Reach-India</p>
            <p class="deu-dealershead">50+</p>
            <p class="deu-dealerstxt">Cities</p>
          </div>
          <div>
            <p class="deu-dealers">Reach-Global</p>
            <p class="deu-dealershead">20+</p>
            <p class="deu-dealerstxt">Countries</p>
          </div>
          <div>
            <p class="deu-dealers">Offices</p>
            <p class="deu-dealershead">6</p>
          </div>
          <div>
            <p class="deu-dealers">Warehouses</p>
            <p class="deu-dealershead">3</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@include('frontend.sections.blog')

<!-- Testimonials -->
<div class="container mb-5">
  <p class="text-center deu-bandhead mt-5">Testimonials</p>
  <div class="owl-carousel owl-theme mt-5">
    <div class="owl-item">
      <div class="card">
        <div class="row col-md-12">
          <div class="col-md-4">
            <img class="img-fluid" src="{{ asset('public/image/testimonial.png') }}" alt="">
          </div>
          <div class="col-md-8">
            <p class="deu-john">John Doe</p>
            <p class="deu-entro">Entrepreneur</p>
          </div>
        </div>
        <div class="testimonial mt-4 mb-2">
        Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Ipsum Ipsum
        </div>
      </div>
    </div>
    <div class="owl-item">
      <div class="card">
        <div class="row col-md-12">
          <div class="col-md-4">
            <img class="img-fluid" src="{{ asset('public/image/testimonial.png') }}" alt="">
          </div>
          <div class="col-md-8">
            <p class="deu-john">John Doe</p>
            <p class="deu-entro">Entrepreneur</p>
          </div>
        </div>
        <div class="testimonial mt-4 mb-2">
        Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Ipsum Ipsum
        </div>
      </div>
    </div>
    <div class="owl-item">
      <div class="card">
        <div class="row col-md-12">
          <div class="col-md-4">
            <img class="img-fluid" src="{{ asset('public/image/testimonial.png') }}" alt="">
          </div>
          <div class="col-md-8">
            <p class="deu-john">John Doe</p>
            <p class="deu-entro">Entrepreneur</p>
          </div>
        </div>
        <div class="testimonial mt-4 mb-2">
        Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Ipsum Ipsum
        </div>
      </div>
    </div>
    <div class="owl-item">
      <div class="card">
        <div class="row col-md-12">
          <div class="col-md-4">
            <img class="img-fluid" src="{{ asset('public/image/testimonial.png') }}" alt="">
          </div>
          <div class="col-md-8">
            <p class="deu-john">John Doe</p>
            <p class="deu-entro">Entrepreneur</p>
          </div>
        </div>
        <div class="testimonial mt-4 mb-2">
        Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Ipsum Ipsum
        </div>
      </div>
    </div>
  </div>
</div>

@include('frontend.sections.brands')

@endsection

@section('script')
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
  </script>
@endsection