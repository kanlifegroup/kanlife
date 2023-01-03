@extends('frontend.layouts.app')

@section('title')
  Wishlist
@endsection

@section('style')
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/7.3.1/swiper-bundle.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">

  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@500&display=swap" rel="stylesheet"> -->
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@500&family=Montserrat:wght@500&family=Nunito:wght@500;600;700;900&family=Roboto:wght@500&display=swap" rel="stylesheet">
@endsection

@section('content')

<div class="container-fluid bgteam-overlay">
	<div class="text-left">
		<h1 class="deu-meethead">My Wishlist</h1>
	</div>
</div>

<div class="container-fluid mt-5 mb-5">
  <div class="row">
    <div class="col-md-12">
      <p class="deu-carthead">Wishlist Products</p>
      <div class="col-md-12">
        <div class="row">
          @foreach($shop['product'] as $product) 
          <div class="col-md-3 mt-4">
            <div class="home-doctors  text-center doc-item">
              <a href="{{url('/product').'/'.$product->product_slug}}">
              <div class="common-doctor animated fadeInUp clearfix ae-animation-fadeInUp deu-features">
                <div class="deu-xrayfigure">
                  <p class="deu-closed"><i class="fa fa-times" aria-hidden="true"></i></p>
                  @if($product->product_image != "")
                <img src="{{ url('/') }}/public/storage/product/{{ $product->product_image }}" class="deu-widauto img-fluid doc-img animate attachment-gallery-post-single wp-post-image" alt=""> 
                @else
                <img src="{{ url('/') }}/public/img/no-image.jpg" class="deu-widauto img-fluid doc-img animate attachment-gallery-post-single wp-post-image" alt=""> 
                @endif
                </div>
                <div class="deu-xraypad">
                  <h5 class="deu-pro">{{$product->product_name}}</h5>
                  <h5 class="deu-protxt"><i class="fa fa-inr" aria-hidden="true"></i> 
                  @if($product->product_offer_price != 0)
                  {{$product->product_offer_price}}
                    <small><s><i class="fa fa-inr" aria-hidden="true"></i> {{$product->product_price}}</s></small>
                    @else
                  {{$product->product_price}}
                  @endif
                  </h5>
                </div>
              </div>
              </a>
            </div>
          </div> 
          @endforeach         
        </div>
      </div>
    </div>
  </div>
</div>

@endsection

@section('script')
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
@endsection
