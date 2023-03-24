@extends('frontend.layouts.app')

@section('title')
  Buy
@endsection

@section('style')

  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/7.3.1/swiper-bundle.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/7.3.1/swiper-bundle.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/css/swiper.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@500&family=Montserrat:wght@500&family=Nunito:wght@500;600;700;900&family=Roboto:wght@500&display=swap" rel="stylesheet"> -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/7.3.1/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
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
            <div class="d-flex flex-column flex-md-row flex-wrap gap-1 gap-md-5 ms-3">
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

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 mx-auto">
            <h3 class="text-center deu-bloghead mb-4 mt-5">Top Categories</h3>
            <div class="deu-lifeposi storycat p-5 mt-5">
                <div class="col-12 swiper-container">
                    <div class="swiper-wrapper position-relative py-4">
                        <div class="swiper-slide shadow shadow-md" aos="fade-right">
                            <div class="img-box">
                                <img src="{{ asset('public/image/c1.png') }}" class="img-fluid deu-slideimg" alt="">
                            </div>
                            <div class="deu-thumbss">
                                <div>Anaesthesia</div>
                            </div>
                        </div>
                        <div class="swiper-slide shadow shadow-md" aos="fade-up" aos-delay="300">
                            <div class="img-box">
                                <img src="{{ asset('public/image/c1.png') }}" class="img-fluid deu-slideimg" alt="">
                            </div>
                            <div class="deu-thumbss">
                                <div>Anaesthesia</div>
                            </div>
                        </div>
                        <div class="swiper-slide shadow shadow-md"aos="fade-down" aos-delay="600">
                            <div class="img-box">
                                <img src="{{ asset('public/image/c1.png') }}" class="img-fluid deu-slideimg" alt="">
                            </div>
                            <div class="deu-thumbss">
                                <div>Anaesthesia</div>
                            </div>
                        </div>
                        <div class="swiper-slide shadow shadow-md" aos="fade-left" aos-delay="900">
                            <div class="img-box">
                                <img src="{{ asset('public/image/c1.png') }}" class="img-fluid deu-slideimg" alt="">
                            </div>
                            <div class="deu-thumbss">
                                <div>Anaesthesia</div>
                            </div>
                        </div>
                        <div class="swiper-slide shadow shadow-md" aos="fade-left" aos-delay="900">
                            <div class="img-box">
                                <img src="{{ asset('public/image/c1.png') }}" class="img-fluid deu-slideimg" alt="">
                            </div>
                            <div class="deu-thumbss">
                                <div>Anaesthesia</div>
                            </div>
                        </div>
                        <div class="swiper-slide shadow shadow-md" aos="fade-left" aos-delay="900">
                            <div class="img-box">
                                <img src="{{ asset('public/image/c1.png') }}" class="img-fluid deu-slideimg" alt="">
                            </div>
                            <div class="deu-thumbss">
                                <div>Anaesthesia</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-prev">
                    <img src="{{ asset('public/image/carousal-left.svg') }}" alt="" class="d-block" style="max-width: 130%;">
                </div>
                <div class="swiper-button-next">
                    <img src="{{ asset('public/image/carousal-right.svg') }}" alt="" class="d-block" style="max-width: 130%;">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="us-section" >
    <div class="container">
        <div class="row">
            <div class="col-md-12" >
                <img class="img-fluid" src="{{ asset('public/image/video.png') }}" style="width: 100%;">
            </div>
        </div>
    </div>
</div>

<div class="container-fluid mb-5">
    <div class="row">
        <div class="col-md-12 mx-auto">
            <h3 class="text-center deu-bloghead mb-4 mt-5">Featured Products</h3>
            <div class="deu-lifeposi storycat p-5 mt-5">
                <div class="col-12 swiper-container px-3">
                    <div class="swiper-wrapper position-relative py-4">
                        <div class="swiper-slide shadow shadow-md" aos="fade-right" >
                            <div class="home-doctors  text-center doc-item">
                                <div class="common-doctor animated fadeInUp clearfix ae-animation-fadeInUp deu-features position-relative">
                                    <div class="position-absolute px-3 py-1 mt-2 end-0 me-2 deu-new">New</div>
                                    <ul class="list-inline social-lists animate">
                                        <li><a href="#"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-shopping-cart"
                                                    aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                        </li>
                                    </ul>
                                    <figure>
                                        <img src="{{ asset('public/image/f1.png') }}"
                                            class="img-fluid doc-img animate attachment-gallery-post-single wp-post-image"
                                            alt="">
                                    </figure>
                                    <div class="text-content">
                                        <h5 class="deu-pro">Cardiskan</h5>
                                        <h5 class="deu-protxt"><i class="fa fa-inr" aria-hidden="true"></i> 200
                                            <small>
                                                <s>
                                                    <i class="fa fa-inr" aria-hidden="true"></i>
                                                    300
                                                </s>
                                            </small>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide shadow shadow-md" aos="fade-up" aos-dlay="200">
                            <div class="home-doctors  text-center doc-item">
                                <div
                                    class="common-doctor animated fadeInUp clearfix ae-animation-fadeInUp deu-features">
                                    <p class="deu-blue">-10%</p>
                                    <ul class="list-inline social-lists animate">
                                        <li><a href="#"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-shopping-cart"
                                                    aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                        </li>
                                    </ul>
                                    <figure>
                                        <img src="{{ asset('public/image/f2.png') }}"
                                            class="img-fluid doc-img animate attachment-gallery-post-single wp-post-image"
                                            alt="">
                                    </figure>
                                    <div class="text-content">
                                        <h5 class="deu-pro">Skansiesta</h5>
                                        <h5 class="deu-protxt"><i class="fa fa-inr" aria-hidden="true"></i> 200
                                            <small><s><i class="fa fa-inr" aria-hidden="true"></i>
                                                    300</s></small>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide shadow shadow-md"  aos="fade-up" aos-dlay="400">
                            <div class="home-doctors  text-center doc-item">
                                <div
                                    class="common-doctor animated fadeInUp clearfix ae-animation-fadeInUp deu-features">
                                    <ul class="list-inline social-lists animate">
                                        <li><a href="#"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-shopping-cart"
                                                    aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                        </li>
                                    </ul>
                                    <figure>
                                        <img src="{{ asset('public/image/f3.png') }}"
                                            class="img-fluid doc-img animate attachment-gallery-post-single wp-post-image"
                                            alt="">
                                    </figure>
                                    <div class="text-content">
                                        <h5 class="deu-pro">Dental</h5>
                                        <h5 class="deu-protxt"><i class="fa fa-inr" aria-hidden="true"></i> 200
                                            <small><s><i class="fa fa-inr" aria-hidden="true"></i>
                                                    300</s></small>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide shadow shadow-md" aos="fade-left">
                            <div class="home-doctors  text-center doc-item">
                                <div
                                    class="common-doctor animated fadeInUp clearfix ae-animation-fadeInUp deu-features">
                                    <ul class="list-inline social-lists animate">
                                        <li><a href="#"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-shopping-cart"
                                                    aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                        </li>
                                    </ul>
                                    <figure>
                                        <img src="{{ asset('public/image/f4.png') }}"
                                            class="img-fluid doc-img animate attachment-gallery-post-single wp-post-image"
                                            alt="">
                                    </figure>
                                    <div class="text-content">
                                        <h5 class="deu-pro">Diathermy</h5>
                                        <h5 class="deu-protxt"><i class="fa fa-inr" aria-hidden="true"></i> 200
                                            <small><s><i class="fa fa-inr" aria-hidden="true"></i>
                                                    300</s></small>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide shadow shadow-md" aos="fade-left">
                            <div class="home-doctors  text-center doc-item">
                                <div
                                    class="common-doctor animated fadeInUp clearfix ae-animation-fadeInUp deu-features">
                                    <ul class="list-inline social-lists animate">
                                        <li><a href="#"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-shopping-cart"
                                                    aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                        </li>
                                    </ul>
                                    <figure>
                                        <img src="{{ asset('public/image/f4.png') }}"
                                            class="img-fluid doc-img animate attachment-gallery-post-single wp-post-image"
                                            alt="">
                                    </figure>
                                    <div class="text-content">
                                        <h5 class="deu-pro">Diathermy</h5>
                                        <h5 class="deu-protxt"><i class="fa fa-inr" aria-hidden="true"></i> 200
                                            <small><s><i class="fa fa-inr" aria-hidden="true"></i>
                                                    300</s></small>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide shadow shadow-md" aos="fade-right">
                            <div class="home-doctors  text-center doc-item">
                                <div
                                    class="common-doctor animated fadeInUp clearfix ae-animation-fadeInUp deu-features">
                                    <ul class="list-inline social-lists animate">
                                        <li><a href="#"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-shopping-cart"
                                                    aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                        </li>
                                    </ul>
                                    <figure>
                                        <img src="{{ asset('public/image/f4.png') }}"
                                            class="img-fluid doc-img animate attachment-gallery-post-single wp-post-image"
                                            alt="">
                                    </figure>
                                    <div class="text-content">
                                        <h5 class="deu-pro">Diathermy</h5>
                                        <h5 class="deu-protxt"><i class="fa fa-inr" aria-hidden="true"></i> 200
                                            <small><s><i class="fa fa-inr" aria-hidden="true"></i>
                                                    300</s></small>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-prev">
                    <img src="{{ asset('public/image/carousal-left.svg') }}" alt="" class="d-block" style="max-width: 130%;">
                </div>
                <div class="swiper-button-next">
                    <img src="{{ asset('public/image/carousal-right.svg') }}" alt="" class="d-block" style="max-width: 130%;">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid deu-seelbggray px-5">
    <div class="container-fluid px-5">
        <h3 class="text-center deu-bloghead my-5">Best Selling Products</h3>
        <div class="row mb-4">
            <div class="col-lg-4 col-md-4 col-sm-6" aos="fade-right">
                <div class="deu-sellbg">
                    <div class="row align-items-center" >
                        <div class="col-lg-5 col-md-5 rideone">
                            <img class="img-fluid deu-sellwiD" src="{{ asset('public/image/p1.png') }}">
                        </div>
                        <div class="col-lg-7 col-md-7 d-flex flex-column justify-content-center">
                            <h4 class="deu-digitalhead">Digital Stethoscope</h4>
                            <div class="deu-digitaltxt"><i class="fa fa-inr" aria-hidden="true"></i> 200
                                <span><s><small><i class="fa fa-inr" aria-hidden="true"></i> 300</small></s></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6"  aos="fade-up" aos-dlay="200">
                <div class="deu-sellbg">
                    <div class="row align-items-center">
                        <div class="col-lg-5 col-md-5 rideone">
                          <img class="img-fluid deu-sellwiD" src="{{ asset('public/image/p2.png') }}">
                        </div>
                        <div class="col-lg-7 col-md-7 d-flex flex-column justify-content-center">
                            <h4 class="deu-digitalhead">Thermometer Gun</h4>
                            <div class="deu-digitaltxt"><i class="fa fa-inr" aria-hidden="true"></i> 200
                                <span><s><small><i class="fa fa-inr" aria-hidden="true"></i> 300</small></s></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6" aos="fade-down" aos-dlay="400">
                <div class="deu-sellbg">
                    <div class="row align-items-center">
                        <div class="col-lg-5 col-md-5 rideone">
                            <img class="img-fluid deu-sellwiD" src="{{ asset('public/image/p3.png') }}">
                        </div>
                        <div class="col-lg-7 col-md-7 d-flex flex-column justify-content-center">
                            <h4 class="deu-digitalhead">Thermometer Gun</h4>
                            <div class="deu-digitaltxt"><i class="fa fa-inr" aria-hidden="true"></i> 200
                                <span><s><small><i class="fa fa-inr" aria-hidden="true"></i> 300</small></s></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6" aos="fade-up" aos-dlay="600">
                <div class="deu-sellbg">
                    <div class="row">
                        <div class="col-lg-5 col-md-5 rideone">
                            <img class="img-fluid deu-sellwiD" src="{{ asset('public/image/p4.png') }}">
                        </div>
                        <div class="col-lg-7 col-md-7 d-flex flex-column justify-content-center">
                            <h4 class="deu-digitalhead">Wheel Chair</h4>
                            <div class="deu-digitaltxt"><i class="fa fa-inr" aria-hidden="true"></i> 200
                                <span><s><small><i class="fa fa-inr" aria-hidden="true"></i> 300</small></s></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6" aos="fade-down" aos-dlay="200">
                <div class="deu-sellbg">
                    <div class="row">
                        <div class="col-lg-5 col-md-5 rideone">
                            <img class="img-fluid deu-sellwiD" src="{{ asset('public/image/p5.png') }}">
                        </div>
                        <div class="col-lg-7 col-md-7 d-flex flex-column justify-content-center">
                            <h4 class="deu-digitalhead">Cardiskan</h4>
                            <div class="deu-digitaltxt"><i class="fa fa-inr" aria-hidden="true"></i> 200
                                <span><s><small><i class="fa fa-inr" aria-hidden="true"></i> 300</small></s></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6" aos="fade-left" aos-dlay="800">
                <div class="deu-sellbg">
                    <div class="row">
                        <div class="col-lg-5 col-md-5 rideone">
                            <img class="img-fluid deu-sellwiD" src="{{ asset('public/image/p6.png') }}">
                        </div>
                        <div class="col-lg-7 col-md-7 d-flex flex-column justify-content-center">
                            <h4 class="deu-digitalhead">Skansiesta</h4>
                            <div class="deu-digitaltxt"><i class="fa fa-inr" aria-hidden="true"></i> 200
                                <span><s><small><i class="fa fa-inr" aria-hidden="true"></i> 300</small></s></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center">
            <button class="about-more dd mb-3 mt-4">View More</button>
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


        $(function () {
            $('#listURL').find('a').click(function () {
                $('#listURL').find('a').removeClass('active');
                $(this).addClass('active');
            });
        });
    </script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.1.6/js/swiper.js"></script>
    <script>
        $(document).ready(function () {
            // Swiper: Slider
            new Swiper('.swiper-container', {
                loop: true,
                nextButton: '.swiper-button-next',
                prevButton: '.swiper-button-prev',
                slidesPerView: 4,
                paginationClickable: true,
                spaceBetween: 40,
                breakpoints: {
                    1920: {
                        slidesPerView: 4,
                        spaceBetween: 30
                    },
                    1028: {
                        slidesPerView: 2,
                        spaceBetween: 30
                    },
                    480: {
                        slidesPerView: 1,
                        spaceBetween: 0
                    }
                }
            });
        });
      
    </script>
@endsection