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

        <style>
          .caret_none .dropdown-toggle:after { content: none }
        </style>
@endsection

@section('content')

<div class="container-fluid bgteam-overlay" style="background:url({{asset('public/kanlife/blog_banner.png')}});background-size: cover;background-position: center center;background-repeat: no-repeat;">
    <div class="text-left">
        <h1 class="deu-meethead">Our Blogs</h1>
    </div>
</div>
<div class="container mt-5 mb-3">
    <div class="row">
        <div class="col-4 col-md-5 m-auto ">
        <h3 class="text-end bloghead" >Categories</h3>
        </div>
        {{--
        <div class="col-7 text-start m-auto position-relative">   
            <select id="category_select" class="form-select sel2" aria-label="Default select example">
            <option class="" selected value="{{ route('about.blog') }}">All Category</option>
            @foreach($blogPost['categories'] as $category)
            <option @if($category_id == $category->blog_cat_id) selected @endif value="{{ route('about.blog').'?category_id='.$category->blog_cat_id }}">{{$category->blog_category_name}}</option>
            @endforeach
            </select>
            <img src="{{ asset('public/image/arr_icon.svg') }}" alt="" width="12" class="caret2">
        </div>
        --}}
        <div class="col-7 text-start m-auto position-relative">   
          <div class="dropdown caret_none">
            @php 
            $selected_cat = $blogPost['categories']->where('blog_cat_id', $category_id)->first();
            @endphp
            <button class="sel2 nav-link border-0 dropdown-toggle" style="text-align:left" type="button" id="about_us_menu"
              data-bs-toggle="dropdown" aria-expanded="false">
              @if($selected_cat) {{mb_strimwidth($selected_cat->blog_category_name, 0, 23, "...")}} @else All category @endif
              <img src="{{ asset('public/image/arr_icon.svg') }}" alt="" width="12" class="caret2" style="cursor:pointer;">
            </button>
            <ul class="dropdown-menu scrollable-menu" style="min-width: 200px;" aria-labelledby="about_us_menu">
            <li class="dropdown-item"><a href="{{ route('about.blog') }}">All category</a></li>
            @foreach($blogPost['categories'] as $category)
              <li class="dropdown-item"><a href="{{ route('about.blog').'?category_id='.$category->blog_cat_id }}">{{$category->blog_category_name}}</a></li>
              @endforeach
            </ul>
          </div>
        </div>
    </div>
</div>
@forelse($blogPost['latest'] as $post)
<div class="blog-section" id="{{$post->post_id}}">
    <div class="container-fluid px-5">
        <div class="row blog-pads align-items-center">
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-4 px-4 py-4">
                     <img aos="fade-up" src="{{ url('/') }}/public/storage/post/{{ $post->post_image }}" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8 px-2">
                      <div class="card-body" aos="fade-left">
                        <h4 class="title1">{{ $post->post_title }}</h4>
                        <p class="ctext"><small class="text-primary">{{ date('d M Y', strtotime($post->post_date)) }}</small></p>
                        <p class="ctext py-4 d-sm-block d-none" style="text-align: justify;">{{ $post->post_short_desc }} ...</p>
                        <p class="ctext py-4 d-sm-none d-block" style="text-align: justify;">{{ mb_substr($post->post_short_desc, 0, 110).'...' }}</p>
                        <a href="{{ route('about.detail.blog', $post->post_slug) }}" class="btn text-light btn-lg px-5" style="background-color:#3188CA; border-radius: 5px;font-size: 1.4rem;">Read More</a>
                     </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@empty
<div class="blog-section">
    <div class="container-fluid px-5">
        <div class="row blog-pads align-items-center">
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="px-2">
                      <div class="card-body">
                        <h4 class="title1">Oops!! No blogs Found...</h4>
                     </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforelse

<div class="container text-center">
<div class="pagination_rounded mt-3 mb-5">
    <ul>
      @if($blogPost['latest']->currentPage()!=1)
      <li>
        <a href="{{$blogPost['latest']->path().'?page='.($blogPost['latest']->currentPage()-1).'&category_id='.request('category_id')}}" class="prev"> Previous</a>
      </li>
      @endif
      @if($blogPost['latest']->lastPage() > 1)
      @for($i=1; $i <= $blogPost['latest']->lastPage(); $i++)
      <li>
        <a @if($i == $blogPost['latest']->currentPage()) class="active" style="pointer-events: none;color:blue !important;" @endif href="{{$blogPost['latest']->path().'?page='.$i.'&category_id='.request('category_id')}}">{{$i}}</a>
      </li>
      @endfor
      @endif
      @if($blogPost['latest']->currentPage()!=$blogPost['latest']->lastPage())
      <li>
        <a href="{{$blogPost['latest']->path().'?page='.($blogPost['latest']->currentPage()+1).'&category_id='.request('category_id')}}" class="next"> Next</a>
      </li>
      @endif
    </ul>
</div>
</div>
{{--
@if($more_post)
  <div class="text-center mt-3 mb-5">
      <a href="{{ route('about.blog').'?limit='.$limit.'category_id='.$category_id.'#'.$post->post_id }}" class="btn text-light btn-primary py-3 btn-lg px-5 rounded-0">View More</a>
  </div>
@endif
--}}

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


    $('#category_select').change(function() {
      window.location = $(this).val();
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