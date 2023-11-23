@extends('frontend.layouts.app')

@section('meta')
<link rel="canonical" href="https://www.kanlifegroup.com/buy">
@endsection


@section('title')
  Buy
@endsection

@section('style')
<style>
@media screen and (min-width:769px ) and (max-width:860px ) {
  .deu-cartxts{
    right: 13px !important;
    top: -9px !important;
  }
  .deu-cart{
    margin-bottom: -2px !important;
  }
}
@media only screen and (width:768px) {
  .deu-cartxts{
    right: -21px !important;
    top: -15px !important;
  }
  .deu-cart {
    margin-bottom: -10px !important;
  }
}
</style>

  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/7.3.1/swiper-bundle.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/7.3.1/swiper-bundle.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/css/swiper.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
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
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@500&family=Montserrat:wght@500&family=Nunito:wght@500;600;700;900&family=Roboto:wght@500&display=swap"
        rel="stylesheet">
        
@endsection

@section('content')

@include('frontend.sections.slider')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12 mx-auto">
            <h3 class="text-center deu-bloghead mb-4 mt-5">Top Categories</h3>
            <div class="deu-lifeposi storycat p-5 mt-5">
                <div class="col-12 swiper-container swiper-container-1">
                    <div class="swiper-wrapper position-relative py-4">
                      @foreach($categories['display'] as $category)
                        <div class="swiper-slide shadow shadow-md" aos="fade-right">
                            <div class="img-box">
                              <a href="{{url('category/'.$category->category_slug)}}">
                                <img src="{{ asset('public/storage/category').'/'.$category->category_image }}" style="height:183.854px; width:275px;" class="img-fluid deu-slideimg" alt="">
                              </a>
                            </div>
                            <div class="deu-thumbss">
                              <a href="{{url('category/'.$category->category_slug)}}">
                                <div>{{ $category->category_name }}</div>
                              </a>
                            </div>
                        </div>
                      @endforeach
                    </div>
                </div>
                <div class="swiper-button-prev swiper-button-prev-1">
                    <img src="{{ asset('public/image/carousal-left.svg') }}" alt="" class="d-block" style="max-width: 130%;">
                </div>
                <div class="swiper-button-next swiper-button-next-1">
                    <img src="{{ asset('public/image/carousal-right.svg') }}" alt="" class="d-block" style="max-width: 130%;">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="us-section" >
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center" >
              <video class="img-fluid" poster="{{ asset('public/image/video.png') }}" controls>
                <source src="{{ asset('public/image/VeinFinder.mp4') }}" type="video/mp4">
                <source src="movie.ogg" type="video/ogg">
                Your browser does not support the video.
              </video>
                <!-- <img class="img-fluid" src="{{ asset('public/image/video.png') }}" style="width: 100%;"> -->
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 mx-auto">
          <div class="d-flex justify-content-center align-items-center">
            <h3 class="text-center deu-bloghead mb-4 mt-5">Featured Products</h3>
          </div>
            <div class="deu-lifeposi storycat p-5 pb-0 mt-4 mt-lg-0">
                <div class="col-12 swiper-container swiper-container-2 px-3">
                    <div class="swiper-wrapper position-relative py-4">
                      @foreach($featured as $product)
                        <div class="swiper-slide shadow shadow-md" >
                            <div class="home-doctors  text-center doc-item">
                                <div class="common-doctor animated fadeInUp clearfix ae-animation-fadeInUp deu-features position-relative">
                                  @if($product->product_condition == 'new')
                                    <div class="position-absolute px-3 py-1 mt-2 start-0 ms-2 deu-new" style="z-index:100">New</div>
                                  @endif
                                  @php
                                  $discount = 0;
                                   if($product->product_offer_price != 0){
                                    $discount = (1 - ($product->product_offer_price / $product->product_price)) * 100;
                                   }
                                  @endphp
                                  @if($discount != 0)
                                    <p class="deu-blue" style="z-index:100">-{{round($discount)}}%</p>
                                  @endif
                                    <ul class="list-inline social-lists animate d-flex justify-content-center">
                                        <li><a href="{{url('/product').'/'.$product->product_slug}}"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                        @if($product->product_price > 0)
                                        <li>
                                          @if($product->qty == 0)
                                          <a href="{{url('/add_to_cart').'/'.$product->product_slug}}"><i class="fa fa-shopping-cart"aria-hidden="true"></i></a>
                                          @else
                                          <a href="{{url('/product').'/'.$product->product_slug}}">
                                            <i class="fa fa-shopping-cart"aria-hidden="true" style="position:relative;">
                                              <span style="position:absolute;right:-7px;top:-9px;font-size:12px;">{{$product->qty}}</span>
                                            </i>                                            
                                          </a>
                                          @endif
                                        </li>
                                        @endif
                                        <li>
                                          @if(Auth::guest())
                                          <a href="javascript:void(0);" onclick="openModel('myModal')"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                          @else
                                          <a href="{{ url('/wishlist') }}/{{ Auth::user()->id }}/{{ $product->product_token }}"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                          @endif
                                        </li>
                                    </ul>
                                    <figure>
                                        <img src="{{ url('/') }}/public/storage/product/{{ $product->product_image }}"
                                            class="img-fluid doc-img animate attachment-gallery-post-single wp-post-image"
                                            alt="{{ $product->product_image_alt }}">
                                    </figure>
                                    <div class="text-content">
                                        <h5 class="deu-pro">{{$product->product_name}}</h5>
                                        @if($product->product_price > 0)
                                        <h5 class="deu-protxt"><i class="fa fa-inr" aria-hidden="true"></i>
                                          @if($product->product_offer_price != 0)
                                            {{$product->product_offer_price}}
                                            <small>
                                                <s>
                                                    ₹
                                                    {{$product->product_price}}
                                                </s>
                                            </small>
                                          @else
                                            {{$product->product_price}}
                                          @endif
                                        </h5>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                      @endforeach
                    </div>
                </div>
                <div class="swiper-button-prev swiper-button-prev-2">
                    <img src="{{ asset('public/image/carousal-left.svg') }}" alt="" class="d-block" style="max-width: 130%;">
                </div>
                <div class="swiper-button-next swiper-button-next-2">
                    <img src="{{ asset('public/image/carousal-right.svg') }}" alt="" class="d-block" style="max-width: 130%;">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid deu-seelbggray px-sm-5" >
    <div class="container-fluid px-5">
        <h3 class="text-center deu-bloghead mb-5 mt-4">Best Selling Products</h3>
        <div class="row mb-4 newcustom">
          @if(isset($topSix[0]))
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mb-3" >
                <div class="deu-sellbg">
                  <a href="{{url('/product').'/'.$topSix[0]->product_slug}}">
                    <div class="row align-items-center" >
                        <div class="col-lg-5 col-md-5 d-sm-block d-none rideone">
                            <img class="img-fluid deu-sellwiD" src="{{ url('/') }}/public/storage/product/{{ $topSix[0]->product_image }}" alt="{{ $topSix[0]->product_image_alt }}>
                        </div>
                        <div class="col-lg-5 col-md-5 d-sm-none d-block rideone ratio ratio-4x3">
                            <img class="img-fluid " src="{{ url('/') }}/public/storage/product/{{ $topSix[0]->product_image }}" alt="{{ $topSix[0]->product_image_alt }}>
                        </div>
                        <div class="col-lg-7 col-md-7 d-flex flex-column justify-content-center">
                            <h4 class="deu-digitalhead deu-digitalhead-name mt-2 text-truncate">
                                {{$topSix[0]->product_name}}
                            </h4>                            
                            @if($topSix[0]->product_price > 0)
                            <div class="deu-digitaltxt"><i class="fa fa-inr" aria-hidden="true"></i>
                            @if($topSix[0]->product_offer_price != 0)
                            {{$topSix[0]->product_offer_price}}
                                <span><s><small style="font-weight: 400;">₹ {{$topSix[0]->product_price}}</small></s></span>
                            @else
                            {{$topSix[0]->product_price}}
                            @endif
                            </div>
                            @endif
                          <button style="width:fit-content;color:white;font-size: 1rem !important;font-family: 'Nunito', sans-serif;margin: 4px 0 0 0;border-radius: 5px;padding: 5px 10px;background-color: #3188CA;border: 1px solid #3188CA;">See More</button>
                        </div>
                    </div>
                  </a>
                </div>
            </div>
          @endif
          @if(isset($topSix[1]))
            <div class="col-lg-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 mb-3"  aos-dlay="200">
                <div class="deu-sellbg">
                  <a href="{{url('/product').'/'.$topSix[1]->product_slug}}">
                    <div class="row align-items-center">
                        <div class="col-lg-5 col-md-5 d-sm-block d-none rideone ">
                          <img class="img-fluid deu-sellwiD" src="{{ url('/') }}/public/storage/product/{{ $topSix[1]->product_image }}" alt="{{ $topSix[1]->product_image_alt }}>
                        </div>
                        <div class="col-lg-5 col-md-5 d-sm-none d-block rideone ratio ratio-4x3">
                            <img class="img-fluid " src="{{ url('/') }}/public/storage/product/{{ $topSix[1]->product_image }}" alt="{{ $topSix[1]->product_image_alt }}>
                        </div>
                        <div class="col-lg-7 col-md-7 d-flex flex-column justify-content-center">
                            <h4 class="deu-digitalhead deu-digitalhead-name mt-2 text-truncate">
                                {{$topSix[1]->product_name}}
                            </h4>                            
                            @if($topSix[1]->product_price > 0)
                            <div class="deu-digitaltxt"><i class="fa fa-inr" aria-hidden="true"></i>
                            @if($topSix[1]->product_offer_price != 0)
                            {{$topSix[1]->product_offer_price}}
                              <span><s><small style="font-weight: 400;">₹ {{$topSix[1]->product_price}}</small></s></span>
                            @else
                            {{$topSix[1]->product_price}}
                            @endif
                            </div>
                            @endif
                            <button style="width:fit-content;color:white;font-size: 1rem !important;font-family: 'Nunito', sans-serif;margin: 4px 0 0 0;border-radius: 5px;padding: 5px 10px;background-color: #3188CA;border: 1px solid #3188CA;">See More</button>
                        </div>
                    </div>
                  </a>
                </div>
            </div>
          @endif
          @if(isset($topSix[2]))
            <div class="col-lg-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 mb-3" >
                <div class="deu-sellbg">
                  <a href="{{url('/product').'/'.$topSix[2]->product_slug}}">
                    <div class="row align-items-center">
                        <div class="col-lg-5 col-md-5 d-sm-block d-none rideone ">
                          <img class="img-fluid deu-sellwiD" src="{{ url('/') }}/public/storage/product/{{ $topSix[2]->product_image }}" alt="{{ $topSix[2]->product_image_alt }}>
                        </div>
                        <div class="col-lg-5 col-md-5 d-sm-none d-block rideone ratio ratio-4x3">
                            <img class="img-fluid " src="{{ url('/') }}/public/storage/product/{{ $topSix[2]->product_image }}" alt="{{ $topSix[2]->product_image_alt }}>
                        </div>
                        <div class="col-lg-7 col-md-7 d-flex flex-column justify-content-center">
                            <h4 class="deu-digitalhead deu-digitalhead-name mt-2 text-truncate">
                                {{$topSix[2]->product_name}}
                            </h4>                            
                            @if($topSix[2]->product_price > 0)
                            <div class="deu-digitaltxt"><i class="fa fa-inr" aria-hidden="true"></i>
                            @if($topSix[2]->product_offer_price != 0)
                            {{$topSix[2]->product_offer_price}}
                              <span><s><small style="font-weight: 400;">₹ {{$topSix[2]->product_price}}</small></s></span>
                            @else
                            {{$topSix[2]->product_price}}
                            @endif
                            </div>
                            @endif
                            <button style="width:fit-content;color:white;font-size: 1rem !important;font-family: 'Nunito', sans-serif;margin: 4px 0 0 0;border-radius: 5px;padding: 5px 10px;background-color: #3188CA;border: 1px solid #3188CA;">See More</button>
                        </div>
                    </div>
                  </a>
                </div>
            </div>
          @endif
        <!-- </div>
        <div class="row"> -->
          @if(isset($topSix[3]))
            <div class="col-lg-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 mb-md-0 mb-0"  aos-dlay="600">
                <div class="deu-sellbg">
                  <a href="{{url('/product').'/'.$topSix[3]->product_slug}}">
                    <div class="row">
                        <div class="col-lg-5 col-md-5 d-sm-block d-none rideone ">
                          <img class="img-fluid deu-sellwiD" src="{{ url('/') }}/public/storage/product/{{ $topSix[3]->product_image }}" alt="{{ $topSix[3]->product_image_alt }}>
                        </div>
                        <div class="col-lg-5 col-md-5 d-sm-none d-block rideone ratio ratio-4x3">
                            <img class="img-fluid " src="{{ url('/') }}/public/storage/product/{{ $topSix[3]->product_image }}" alt="{{ $topSix[3]->product_image_alt }}>
                        </div>
                        <div class="col-lg-7 col-md-7 d-flex flex-column justify-content-center">
                            <h4 class="deu-digitalhead deu-digitalhead-name mt-2 text-truncate">
                                {{$topSix[3]->product_name}}
                            </h4>                            
                            @if($topSix[3]->product_price > 0)
                            <div class="deu-digitaltxt"><i class="fa fa-inr" aria-hidden="true"></i>
                            @if($topSix[3]->product_offer_price != 0)
                            {{$topSix[3]->product_offer_price}}
                              <span><s><small style="font-weight: 400;">₹ {{$topSix[3]->product_price}}</small></s></span>
                            @else
                            {{$topSix[3]->product_price}}
                            @endif
                            </div>
                            @endif
                            <button style="width:fit-content;color:white;font-size: 1rem !important;font-family: 'Nunito', sans-serif;margin: 4px 0 0 0;border-radius: 5px;padding: 5px 10px;background-color: #3188CA;border: 1px solid #3188CA;">See More</button>
                        </div>
                    </div>
                  </a>
                </div>
            </div>
          @endif
          @if(isset($topSix[4]))
            <div class="col-lg-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 mb-md-0 mb-0"  aos-dlay="200">
                <div class="deu-sellbg">
                  <a href="{{url('/product').'/'.$topSix[4]->product_slug}}">
                    <div class="row">
                        <div class="col-lg-5 col-md-5 d-sm-block d-none rideone ">
                          <img class="img-fluid deu-sellwiD" src="{{ url('/') }}/public/storage/product/{{ $topSix[4]->product_image }}" alt="{{ $topSix[4]->product_image_alt }}>
                        </div>
                        <div class="col-lg-5 col-md-5 d-sm-none d-block rideone ratio ratio-4x3">
                            <img class="img-fluid " src="{{ url('/') }}/public/storage/product/{{ $topSix[4]->product_image }}" alt="{{ $topSix[4]->product_image_alt }}>
                        </div>
                        <div class="col-lg-7 col-md-7 d-flex flex-column justify-content-center">
                            <h4 class="deu-digitalhead deu-digitalhead-name mt-2 text-truncate">
                                {{$topSix[4]->product_name}}
                            </h4>                            
                            @if($topSix[4]->product_price > 0)
                            <div class="deu-digitaltxt"><i class="fa fa-inr" aria-hidden="true"></i>
                            @if($topSix[4]->product_offer_price != 0)
                            {{$topSix[4]->product_offer_price}}
                              <span><s><small style="font-weight: 400;">₹ {{$topSix[4]->product_price}}</small></s></span>
                            @else
                            {{$topSix[4]->product_price}}
                            @endif
                            </div>
                            @endif
                            <button style="width:fit-content;color:white;font-size: 1rem !important;font-family: 'Nunito', sans-serif;margin: 4px 0 0 0;border-radius: 5px;padding: 5px 10px;background-color: #3188CA;border: 1px solid #3188CA;">See More</button>
                        </div>
                    </div>
                  </a>
                </div>
            </div>
          @endif
          @if(isset($topSix[5]))
            <div class="col-lg-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 mb-md-0 mb-0"  aos-dlay="800">
                <div class="deu-sellbg">
                  <a href="{{url('/product').'/'.$topSix[5]->product_slug}}">
                    <div class="row">
                        <div class="col-lg-5 col-md-5 d-sm-block d-none rideone ">
                          <img class="img-fluid deu-sellwiD" src="{{ url('/') }}/public/storage/product/{{ $topSix[5]->product_image }}" alt="{{ $topSix[5]->product_image_alt }}">
                        </div>
                        <div class="col-lg-5 col-md-5 d-sm-none d-block rideone ratio ratio-4x3">
                            <img class="img-fluid " src="{{ url('/') }}/public/storage/product/{{ $topSix[5]->product_image }}" alt="{{ $topSix[5]->product_image_alt }}>
                        </div>
                        <div class="col-lg-7 col-md-7 d-flex flex-column justify-content-center">
                            <h4 class="deu-digitalhead deu-digitalhead-name mt-2 text-truncate">
                                {{$topSix[5]->product_name}}
                            </h4>
                            @if($topSix[5]->product_price > 0)
                            <div class="deu-digitaltxt"><i class="fa fa-inr" aria-hidden="true"></i>
                            @if($topSix[5]->product_offer_price != 0)
                            {{$topSix[5]->product_offer_price}}
                              <span><s><small style="font-weight: 400;">₹ {{$topSix[5]->product_price}}</small></s></span>
                            @else
                            {{$topSix[5]->product_price}}
                            @endif
                            </div>
                            @endif
                            <button style="width:fit-content;color:white;font-size: 1rem !important;font-family: 'Nunito', sans-serif;margin: 4px 0 0 0;border-radius: 5px;padding: 5px 10px;background-color: #3188CA;border: 1px solid #3188CA;">See More</button>
                        </div>
                    </div>
                  </a>
                </div>
            </div>
          @endif
        </div>
        <div class="text-center">
          <a href="{{ url('search/items')}}">
            <button class="about-more dd mb-3 mt-4">View More</button>
          </a>
        </div>
    </div>
</div>

@endsection

@section('script')

<!-- height: 120px; -->
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

<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.1.6/js/swiper.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/js/swiper.min.js"></script>
    <script>
        $(document).ready(function () {
            // Swiper: Slider
            new Swiper('.swiper-container-1', {
                loop: false,
                nextButton: '.swiper-button-next-1',
                prevButton: '.swiper-button-prev-1',
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

            new Swiper('.swiper-container-2', {
                loop: false,
                nextButton: '.swiper-button-next-2',
                prevButton: '.swiper-button-prev-2',
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