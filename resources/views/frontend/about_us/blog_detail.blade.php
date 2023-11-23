@extends('frontend.layouts.app')

@section('title')
@if($blogPost->meta_title)
  {{$blogPost->meta_title}}
@else
  {{$blogPost->post_title}}
@endif
@endsection

@section('meta')
<meta name="description" content="{{ $blogPost->post_seo_desc }}">
<link rel="canonical" href="{{ $blogPost->post_seo_canon }}" />
@endsection

@section('style')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/7.3.1/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@500&family=Montserrat:wght@500&family=Nunito:wght@500;600;700;900&family=Roboto:wght@500&display=swap"
        rel="stylesheet">
@endsection

@section('content')

<div class="blog-section">
    <div class="container-fluid px-5">
        <div class="row blog-pads blog-detail align-items-center" aos="zoom-in">
            <div class="text-center title2 py-3">
                <h1>
                {{ $blogPost->post_title }}
                </h1>
            </div>
            <div class="carousel carousel-blog mb-md-5">
            <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel " aos="fade-up" >
  <div class="carousel-indicators d-sm-none d-none  d-md-flex">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1">
        <img src="{{ url('/') }}/public/storage/post/{{ $blogPost->post_image }}" alt="{{ $blogPost->post_image_alt }}">
    </button>
    @if(!empty($postImages))
    @foreach($postImages as $key => $postImage)
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="{{$key+1}}" aria-label="Slide {{$key+2}}">
    <img src="{{ url('/') }}/public/storage/post/{{ $postImage->image }}" alt="{{ $postImage->image_alt }}">
    </button>
    @endforeach
    @endif
  </div>
  <div class="carousel-inner" aos="fade-left">
    <div class="carousel-item active ratio ratio-21x9" data-bs-interval="10000">
      <img src="{{ url('/') }}/public/storage/post/{{ $blogPost->post_image }}" class="d-block w-100" alt="{{ $blogPost->post_image_alt }}">
     
    </div>
    @if(!empty($postImages))
    @foreach($postImages as $key => $postImage)
    <div class="carousel-item ratio ratio-21x9" data-bs-interval="2000">
      <img src="{{ url('/') }}/public/storage/post/{{ $postImage->image }}" class="d-block w-100" alt="{{ $postImage->image_alt }}">
     
    </div>
    @endforeach
    @endif
  </div>
  @if(count($postImages) > 0)
  <button class="carousel-control-prev m-auto" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
  <img class="arr-l" src="{{ asset('public/image/arr-l.svg') }}" alt=""> 
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next m-auto" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
  <img class="arr-r" src="{{ asset('public/image/arr-l.svg') }}" alt=""> 
    <span class="visually-hidden">Next</span>
  </button>
  @endif
</div>
            </div>    
            <div class="sociala mb-3 text-center" aos="fade-down">
      @if($blogPost->facebook)  
      <a href="{{$blogPost->facebook}}" target="_blank"><i class="fa fa-facebook social" aria-hidden="true"></i></a>
      @endif
      @if($blogPost->instagram)  
      <a href="{{$blogPost->instagram}}" target="_blank"><i class="fa fa-instagram social" aria-hidden="true"></i></a>
      @endif
      @if($blogPost->twitter) 
      <a href="{{$blogPost->twitter}}" target="_blank"><i class="fa fa-twitter social" aria-hidden="true"></i></a>
      @endif
      @if($blogPost->linkedin) 
      <a href="{{$blogPost->linkedin}}" target="_blank"><i class="fa fa-linkedin social" aria-hidden="true"></i></a>
      @endif
    
            </div>
            <div class="para blog-para" style="font-size: 18px; text-align: justify; color:#656565">
                <p class="mb-3" aos="fade-left"> {!! html_entity_decode($blogPost->post_desc) !!} </p>
                
            </div> 
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
    </script>

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
                autoPlay: true,
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
    <script>
        $(document).ready(function () {
            $(".logS").click(function () {
                $(".regiS").show();
            });
            $(".logS").click(function () {
                $(".logS1").hide();
            });
            $(".logS12").click(function () {
                $(".forgeT").show();
            });
            $(".logS12").click(function () {
                $(".logS1").hide();
            });
        });
    </script>
@endsection
