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
        <h1 class="deu-meethead">Our Blogs</h1>
    </div>
</div>
<div class="container mt-5 mb-3">
    <div class="row">
        <div class="col-5 m-auto ">
        <h3 class="text-end bloghead">Categories</h3>
        </div>
        <div class="col-7 text-start m-auto position-relative">
        <div class="dropdown">
          @php 
          $selected_cat = $blogPost['categories']->where('blog_cat_id', $category_id)->first();
          @endphp
          <button class="sel2 nav-link border-0 dropdown-toggle" style="text-align:left" type="button" id="about_us_menu"
            data-bs-toggle="dropdown" aria-expanded="false">
            @if($selected_cat) {{$selected_cat->blog_category_name}} @else All @endif
            <img src="{{ asset('public/image/arrow-234.svg') }}" alt="" width="12" class="caret2" style="cursor:pointer;">
          </button>
          <ul class="dropdown-menu" style="min-width: 200px;" aria-labelledby="about_us_menu">
          <li><a class="dropdown-item" href="{{ route('about.blog') }}">All</a></li>
          @foreach($blogPost['categories'] as $category)
            <li><a class="dropdown-item" href="{{ route('about.blog').'?category_id='.$category->blog_cat_id }}">{{$category->blog_category_name}}</a></li>
            @endforeach
          </ul>
        </div>
        
        
            <!-- <select class="form-select sel2" aria-label="Default select example">
            <option selected>Select...</option>
            <option value="1">Travel</option>
            <option value="2">Tech</option>
            <option value="3">Latest</option>
            </select>
            <img src="{{ asset('public/img/arr_icon.svg') }}" alt="" width="12" class="caret2"> -->
        </div>
    </div>
</div>
@foreach($blogPost['latest'] as $post)
<div class="blog-section" id="{{$post->post_id}}">
    <div class="container-fluid px-5">
        <div class="row blog-pads align-items-center">
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-4 px-4 py-4">
                     <img src="{{ url('/') }}/public/storage/post/{{ $post->post_image }}" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8 px-2">
                      <div class="card-body">
                        <h4 class="title1">{{ $post->post_title }}</h4>
                        <p class="ctext"><small class="text-primary">{{ date('M Y', strtotime($post->post_date)) }}</small></p>
                        <p class="ctext py-4">{{ $post->post_short_desc }} ...</p>
                        <a href="{{ route('about.detail.blog', $post->post_id) }}" class="btn text-light btn-primary btn-lg px-5 rounded-0">Read More</a>
                     </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
@if($more_post)
  <div class="text-center mt-3 mb-5">
      <a href="{{ route('about.blog').'?limit='.$limit.'category_id='.$category_id.'#'.$post->post_id }}" class="btn text-light btn-primary py-3 btn-lg px-5 rounded-0">View More</a>
  </div>
@endif

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