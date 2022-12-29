@extends('frontend.layouts.app')
@section('title')
  {{$category_name}}
@endsection

@section('style')
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/7.3.1/swiper-bundle.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@500&display=swap" rel="stylesheet"> -->
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@500&family=Montserrat:wght@500&family=Nunito:wght@500;600;700;900&family=Roboto:wght@500&display=swap" rel="stylesheet">
@endsection

@section('content')

<div class="container-fluid bgteam-overlay">
	<div class="text-left">
		<h1 class="deu-meethead">Our Products</h1>
	</div>
</div>

<div class="container">
  <h3 class="text-center mt-5 mb-5 deu-bloghead">{{$category_name}}</h3>
</div>

<div class="container-fluid">
	<div class="row">
    <div class="col-md-4">
      <div class="deu-borderblue">
        <p style="color:#3188CA;"><img class="deu-fealine" src="{{asset('image/line.svg')}}"> &nbsp;&nbsp;&nbsp;
         <span class="deu-filter">Product Categories</span>
        </p>
        <div class="chiller_cb">
          <input id="myCheckbox" type="checkbox" checked>
          <label for="myCheckbox">RAD System</label>
          <span></span>
        </div>
	    </div>
      <div class="deu-borderblue my-5">
        <p style="color:#3188CA;"><img class="deu-fealine" src="{{asset('image/line.svg')}}"> &nbsp;&nbsp;&nbsp;
         <span class="deu-filter">Filter by Price</span>
        </p>
        <select class="deu-lowprice">
          <option class="top-select">Price : Low to high</option>
          <option class="top-select">Price : High to low</option>
        </select>
	    </div>
	  </div>
    @php 
     $from_item = ($products->currentpage()-1)*$products->perpage()+1;
     $to_item = $products->currentpage()*$products->perpage();
     if($to_item > $products->total())
     $to_item = $products->total()
    @endphp
    <div class="col-md-8">
      <div class="row">
        <div class="col-md-6">
          <p class="deu-Show">Showing {{$from_item}}-{{$to_item}} of {{$products->total()}} results</p>
        </div>
        <div class="col-md-6 text-right">
          <select class="deu-default">
            <option class="top-select">Default Sorting</option>
            <option class="top-select">lorem</option>
          </select>
        </div>
      </div>
      <div class="row mt-5">
        @foreach($products as $product)
        <div class="col-md-4 mb-5">
          <div class="home-doctors  text-center doc-item">
            <a href="{{url('/product').'/'.$product->product_slug}}">
            <div class="common-doctor animated fadeInUp clearfix ae-animation-fadeInUp deu-features">
              @if($product->product_condition == 'new')
                <p class="deu-new">New</p>
              @endif
              <div class="deu-xrayfigure">
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
<div class="container text-center">
  <div class="pagination_rounded mt-5 mb-5">
    <ul>
      @if($products->currentPage()!=1)
      <li>
        <a href="{{$products->path().'?page='.($products->currentPage()-1)}}" class="prev"> Previous</a>
      </li>
      @endif
      @for($i=1; $i <= $products->lastPage(); $i++)
      <li>
        <a @if($i == $products->currentPage()) class="active" @endif href="{{$products->path().'?page='.$i}}">{{$i}}</a>
      </li>
      @endfor
      @if($products->currentPage()!=$products->lastPage())
      <li>
        <a href="{{$products->path().'?page='.($products->currentPage()+1)}}" class="next"> Next</a>
      </li>
      @endif
    </ul>
  </div>
</div>

@endsection

@section('script')
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>
<script>
$(document).ready(function () {
  
});
</script>
@endsection