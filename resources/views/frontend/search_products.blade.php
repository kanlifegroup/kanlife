@extends('frontend.layouts.app')
@section('title')
  Products
@endsection

@section('style')
<style>
  .deu-lowprice .form-select {
  background-size: 38px 38px !important;
}
</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/7.3.1/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@500&family=Montserrat:wght@500&family=Nunito:wght@500;600;700;900&family=Roboto:wght@500&display=swap"
        rel="stylesheet">
@endsection

@section('content')

<div class="container-fluid bgteam-overlay">
	<div class="text-left">
		<h1 class="deu-meethead">Our Products</h1>
	</div>
</div>

<div class="container">
  <h3 class="text-center mt-5 mb-5 deu-bloghead">Products</h3>
</div>

<div class="container-fluid">
	<div class="row">
    <div class="col-md-4">
    <form action="{{ route('search.products') }}" class="search_form" id="search_form" method="post">
      {{ csrf_field() }}
      <div class="deu-borderblue" aos="fade-right">
        <p style="color:#3188CA;"><img class="deu-fealine" src="{{asset('public/image/line.svg')}}"> &nbsp;&nbsp;&nbsp;
         <span class="deu-filter">Product Categories</span>
        </p>
        @foreach($categories['display'] as $key => $category)
          <div class="chiller_cb @if($key > 1) d-none d-sm-flex @endif" aos="fade-right" aos-delay="300">
            <input id="myCheckbox-{{ $category->cat_id }}" name="categories[]" value="{{ $category->cat_id }}" type="checkbox" @if(in_array($category->cat_id, $p_categories)) checked="checked" @endif>
            <label for="myCheckbox-{{ $category->cat_id }}">{{ $category->category_name }}</label>
            <span></span>
          </div>
        @endforeach        
        @if(count($categories['display']) > 2)
          <div class="d-block d-sm-none" id="view_more" style="font-size: 1.25rem;color:#3188CA;" onclick="show_all()">view more +{{count($categories['display'])-2}}</div>
        @endif
        <div class="d-flex justify-content-center mt-2">
          <button type="submit" class="px-3 py-2 btn btn-primary" style="background-color:#3188CA; border-color:#3188CA;">Apply</button>
        </div>
	    </div>
      <div class="deu-borderblue mt-5" aos="fade-right" aos-delay="300">
          <p style="color:#3188CA;" class="d-flex align-items-center"><img class="deu-fealine" src="{{asset('public/image/line.svg')}}"> &nbsp;&nbsp;&nbsp;
              <span class="deu-filter">Filter By Price</span>
          </p>
          <div class="deu-lowprice">
              <select class="form-select w-100 bg-transparent border-0" name="price_order" style="outline: none;">
                  <option @if($price_order == 'lth') selected @endif value="lth" class="top-select">Price : Low to high</option>
                  <option @if($price_order == 'htl') selected @endif value="htl" class="top-select">Price : High to low</option>
              </select>
          </div>
          <div class="d-flex justify-content-center mt-3">
            <button type="submit" class="px-3 py-2 btn btn-primary" style="background-color:#3188CA; border-color:#3188CA;">Apply</button>
          </div>
      </div>
    </form>
	  </div>
    @php 
     $from_item = $products->total() == 0 ? 0 : ($products->currentpage()-1)*$products->perpage()+1;
     $to_item = $products->currentpage()*$products->perpage();
     if($to_item > $products->total())
     $to_item = $products->total()
    @endphp
    <div class="col-md-8">
      <div class="row g-0 my-3 mb-5">
        <div class="col d-flex align-items-center">
          @if($from_item <= $products->total())
          <p class="deu-Show mt-4 mb-0 m-md-0">Showing {{$from_item}}-{{$to_item}} of {{$products->total()}} results</p>
          @endif
        </div>
        <!-- <div class="col-4 d-flex justify-content-end d-sort">
          <select class="form-select deu-default rounded-0 px-2 px-lg-4 py-2">
            <option class="top-select">Default Sorting</option>
            <option class="top-select">lorem</option>
          </select>
        </div> -->
      </div>
      <div class="row row-cols-md-2 row-cols-lg-3 g-3 g-lg-4">
        @foreach($products as $product)
        <div class="">
          <div class="home-doctors  text-center doc-item" aos="fade-left" aos-delay="400"   >
            <a href="{{url('/product').'/'.$product->product_slug}}">
            <div class="d-sm-block d-none common-doctor animated fadeInUp clearfix ae-animation-fadeInUp deu-features position-relative">
              @if($product->product_condition == 'new')
              <div class="position-absolute px-3 py-1 mt-2 end-0 me-2 deu-new" style="z-index:100">New</div>
                <!-- <span class="deu-new" style="position:absolute;z-index:100;width:100%;left:0;">New</span> -->
              @endif
              <div class="deu-xrayfigure">
                @if($product->product_image != "")
                <img aos="zoom-in" aos-delay="300" src="{{ url('/') }}/public/storage/product/{{ $product->product_image }}" class="deu-widauto img-fluid doc-img animate attachment-gallery-post-single wp-post-image" alt=""> 
                @else
                <img aos="zoom-in" aos-delay="300" src="{{ url('/') }}/public/img/no-image.jpg" class="deu-widauto img-fluid doc-img animate attachment-gallery-post-single wp-post-image" alt=""> 
                @endif
              </div>
              <div class="deu-xraypad">
                <h5 class="deu-pro">{{$product->product_name}}</h5>
                @if($product->product_price != 0)
                  <h5 class="deu-protxt"><i class="fa fa-inr" aria-hidden="true"></i> 
                  @if($product->product_offer_price != 0)
                    {{$product->product_offer_price}}
                    <small><s>₹ {{$product->product_price}}</s></small>
                  @else
                    {{$product->product_price}}
                  @endif
                @else
                  <div style="height:32px;"></div>
                @endif
                </h5>
                <button style="width:fit-content;color:white;font-size: 1rem !important;font-family: 'Nunito', sans-serif;margin: 4px 0 0 0;border-radius: 5px;padding: 5px 10px;background-color: #3188CA;border: 1px solid #3188CA;">See More</button>
                </h5>
              </div>
            </div>
            <div class="d-sm-none d-flex row animated fadeInUp clearfix ae-animation-fadeInUp deu-features position-relative" style="background-color: #fff;min-height: fit-content;">
              <div class="col-5">
                @if($product->product_image != "")
                <img src="{{ url('/') }}/public/storage/product/{{ $product->product_image }}" class="deu-widauto img-fluid doc-img attachment-gallery-post-single wp-post-image" style="margin-top: 0px;height:120px;" alt=""> 
                @else
                <img src="{{ url('/') }}/public/img/no-image.jpg" class="deu-widauto img-fluid doc-img attachment-gallery-post-single wp-post-image" style="margin-top: 0px;height:120px;" alt=""> 
                @endif
              </div>
              <div class="col-7 d-flex align-items-start p-5 flex-column">
                <h5 class="deu-pro">{{$product->product_name}}</h5>
                @if($product->product_price != 0)
                  <h5 class="deu-protxt"><i class="fa fa-inr" aria-hidden="true"></i> 
                  @if($product->product_offer_price != 0)
                    {{$product->product_offer_price}}
                    <small style="font-size:7px;"><s>₹ {{$product->product_price}}</s></small>
                  @else
                    {{$product->product_price}}
                  @endif
                @else
                  <div style="height:32px;"></div>
                @endif
                </h5>
                <button style="width:fit-content;color:white;font-size: 1rem !important;font-family: 'Nunito', sans-serif;margin: 4px 0 0 0;border-radius: 5px;padding: 5px 10px;background-color: #3188CA;border: 1px solid #3188CA;">See More</button>
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
        <a href="{{$products->path().'?page='.($products->currentPage()-1).'&categories='.serialize($p_categories).'&price_order='.$price_order}}" class="prev"> Previous</a>
      </li>
      @endif
      @for($i=1; $i <= $products->lastPage(); $i++)
      <li>
        <a @if($i == $products->currentPage()) class="active" style="color: #3188CA !important;" @endif href="{{$products->path().'?page='.$i.'&categories='.serialize($p_categories).'&price_order='.$price_order}}">{{$i}}</a>
      </li>
      @endfor
      @if($products->currentPage()!=$products->lastPage())
      <li>
        <a href="{{$products->path().'?page='.($products->currentPage()+1).'&categories='.serialize($p_categories).'&price_order='.$price_order}}" class="next"> Next</a>
      </li>
      @endif
    </ul>
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
      function show_all(){
        $('.chiller_cb').removeClass('d-none');
        $('#view_more').addClass('d-none');
      }
    </script>
@endsection