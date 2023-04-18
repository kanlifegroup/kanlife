@extends('frontend.layouts.app')
@section('title')
  {{$shop->product_name}}
@endsection
@section('style')
<style>
@media screen and (min-width:769px ) and (max-width:860px ) {
  .deu-cartxts{
    right: -22px !important;
    top: -30px !important;
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
		<h1 class="deu-meethead">Product Details</h1>
	</div>
</div>

<div class="container-fluid px-4 mt-5 mb-5">
  <div class="row">
    <div class="col-md-12">
      @if ($message = Session::get('success'))
      <div class="alert alert-success" role="alert">
        <span class="alert_icon lnr lnr-checkmark-circle"></span>
          {{ $message }}
          <!-- <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span class="fa fa-close" aria-hidden="true"></span>
          </button> -->
      </div>
      @endif
      @if ($message = Session::get('error'))
      <div class="alert alert-danger" role="alert">
        <span class="alert_icon lnr lnr-warning"></span>
        {{ $message }}
        <!-- <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span class="fa fa-close" aria-hidden="true"></span>
        </button> -->
      </div>
      @endif
    </div>
  </div>
  <div class="row g-5">
    <div class="col-md-4">
      <div id="slider" class="owl-carousel product-slider" >
        <div class="item" aos="fade-right">
          <img class="img-fluid deu-detailheight" src="{{ url('/') }}/public/storage/product/{{ $shop->product_image }}" />
        </div>
        @foreach($shop->productimages as $images)
          <div class="item" aos="fade-right">
            <img class="img-fluid deu-detailheight" src="{{ url('/') }}/public/storage/product/{{ $images->product_image }}" />
          </div>
        @endforeach
      </div>
      <div id="thumb" class="owl-carousel product-thumb" aos="fade-left">
        <div class="item">
          <img class="img-fluid deu-detailslider" src="{{ url('/') }}/public/storage/product/{{ $shop->product_image }}" />
        </div>
        @foreach($shop->productimages as $images)
          <div class="item">
            <img class="img-fluid deu-detailslider" src="{{ url('/') }}/public/storage/product/{{ $images->product_image }}" />
          </div>
        @endforeach
      </div>
    </div>
    <div class="col">
      <div class="product-dtl pt-2">
          <div class="product-info mb-3">
              <div class="product-name" aos="fade-left">{{$shop->product_name}}</div>
              <div class="product-price-discount" aos="fade-left">
                @if($shop->product_price != 0)
                  @if($shop->product_offer_price != 0)
                  <span><i class="fa fa-inr" aria-hidden="true"></i> {{$shop->product_offer_price}}</span>
                  <span class="line-through"><i class="fa fa-inr" aria-hidden="true"></i> {{$shop->product_price}}</span>
                  @else
                  <span><i class="fa fa-inr" aria-hidden="true"></i> {{$shop->product_price}}</span>
                  @endif
                @endif
              </div>
          </div>
          <p class="d-flex align-items-center" aos="fade-left" style="color:#3188CA;"><img class="deu-fealine" src="{{asset('public/image/line.svg')}}"> &nbsp;&nbsp;&nbsp;
              <span class="deu-filter">Features</span>
          </p>
          {!! html_entity_decode($shop->product_desc) !!}
          <!-- <ul class="deu-proul" >
              <li class="deu-margbtm row g-0" aos="fade-left"><i class="fa pt-2 col-auto fa-circle deu-profa" aria-hidden="true"></i>
                  <span class="col">200 kHz, 4 kW,
                  100mA Mobile HF X-Ray
                  </span>
              </li>
              <li class="deu-margbtm row g-0" aos="fade-left"><i class="fa pt-2 col-auto fa-circle deu-profa" aria-hidden="true"></i>
                  <span class="col">Draws clean
                  power from mains
                  </span>
              </li>
              <li class="deu-margbtm row g-0" aos="fade-left"><i class="fa pt-2 col-auto fa-circle deu-profa" aria-hidden="true"></i>
                  <span class="col">Negligible
                  leakage radiation
                  </span>
              </li>
              <li class="deu-margbtm row g-0" aos="fade-left"><i class="fa pt-2 col-auto fa-circle deu-profa" aria-hidden="true"></i>
                  <span class="col">Easy to move
                  (85 kg) 
                  </span>
              </li>
              <li class="deu-margbtm row g-0" aos="fade-left"><i class="fa pt-2 col-auto fa-circle deu-profa" aria-hidden="true"></i>
                  <span class="col">90° collimator
                  rotation
                  </span>
              </li>
              <li class="deu-margbtm row g-0" aos="fade-left"><i class="fa pt-2 col-auto fa-circle deu-profa" aria-hidden="true"></i>
                  <span class="col">Tube-head
                  rotation
                  </span>
              </li>
              <li class="deu-margbtm row g-0" aos="fade-left"><i class="fa pt-2 col-auto fa-circle deu-profa" aria-hidden="true"></i>
                  <span class="col">Light field
                  intensity min 160 Lux @ 1m
                  </span>
              </li>
              <li class="deu-margbtm row g-0" aos="fade-left"><i class="fa pt-2 col-auto fa-circle deu-profa" aria-hidden="true"></i>
                  <span class="col">Suitable for
                  NICU, ICU, Trauma & Ortho
                  </span>
              </li>
          </ul> -->
          <div class="product-count mt-3 mb-3" aos="fade-left">
            <form action="#" class="d-flex align-items-center">
              @if(isset($cart['qty']) && $cart['qty'] > 0)
                <div class="product-count mt-3 mb-3 d-flex">
                  <div class="qtyminus" data-id="{{base64_encode($cart['ord_id'])}}">-</div>
                  <input type="text" readonly id="{{base64_decode($cart['ord_id'])}}" name="quantity" value="{{$cart['qty']}}" class="qty qty-{{base64_encode($cart['ord_id'])}}">
                  <div class="qtyplus" data-id="{{base64_encode($cart['ord_id'])}}">+</div>
                </div>
                {{-- <a href="javascript:void(0)" data-id="{{base64_encode($cart['ord_id'])}}" class="round-black-btn remove">Remove from cart</a> 
                <a href="{{ url('/cart') }}/{{base64_encode($cart['ord_id'])}}" onClick="return confirm('Are you sure you want to remove?');" class="round-black-btn px-3 px-lg-5">Remove from cart</a>--}}
                <a href="{{ url('/cart') }}" class="enquirys-btn mx-3 px-3 px-lg-5 text-light">Go to cart</a>
              @else
                @if($shop->product_price != 0)
                  <a href="{{url('/add_to_cart').'/'.$shop->product_slug}}" class="enquirys-btn text-light">Add To Cart</a>
                @else
                  @guest
                  <a href="javascript:void(0);" onclick="openModel('myModal')" class="enquirys-btn text-light">Price Enquiry</a>
                  @else
                  <a href="{{url('/price_enquiry')}}/{{ base64_encode($shop->product_id) }}" class="enquirys-btn text-light">Price Enquiry</a>
                  @endif
                @endif
              @endif
            </form>
          </div>
          <p class="deu-add">
            @if(Auth::guest())
            <a href="javascript:void(0);" onclick="openModel('myModal')" >
              <i class="fa fa-heart-o" aria-hidden="true"></i> Add To Wishlist
            </a>
            @else
            <a href="{{ url('/wishlist') }}/{{ Auth::user()->id }}/{{ $shop->product_token }}">
              <i class="fa fa-heart-o" aria-hidden="true"></i> Add To Wishlist
            </a>
            @endif
          </p>
      </div>
    </div>
    <div class="col-auto">
      <div class="deu-proright mt-4">
        <p class="" style="color:#3188CA;" aos="fade-left"> <img class="deu-fealine" src="{{asset('public/image/line.svg')}}">
          &nbsp;&nbsp;&nbsp;
          <span class="deu-filter" >Product Links</span>
        </p>
        <ul class="deu-proul">
          @foreach($links as $link)
            <li aos="fade-left">
              <a href="{{url('/product').'/'.$link->product_slug}}">
                <i class="fa fa-circle deu-profa" aria-hidden="true"></i> 
                {{$link->product_name}}
              </a>
            </li>
          @endforeach
        </ul>
      </div>
    </div>
  </div>
</div>
@if($shop->product_price == 0)
<!-- The Modal forget -->
<div class="modal fade" id="myModalQuery">
  <div class="modal-dialog modal-md">
    <div class="modal-content" style="margin-top: 13%;">
      <div class="modal-header">
        <h4 class="modal-title"></h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <p class="product-name text-center">Price Enquiry</p>
        <p class="deu-logintxt">Your enquiry submitted successfully, We will contact you soon.</p>
      </div>
    </div>
  </div>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script>
$(document).ready(function () {
    var slider = $("#slider");
    var thumb = $("#thumb");
    var slidesPerPage = 4; //globaly define number of elements per page
    var syncedSecondary = true;
    slider.owlCarousel({
        items: 1,
        slideSpeed: 2000,
        nav: false,
        autoplay: false, 
        dots: false,
        loop: true,
        responsiveRefreshRate: 200
    }).on('changed.owl.carousel', syncPosition);
    thumb 
      .on('initialized.owl.carousel', function() {
          thumb.find(".owl-item").eq(0).addClass("current");
      })
      .owlCarousel({
        items: slidesPerPage,
        dots: false,
        nav: true,
        item: 4,
        smartSpeed: 200,
        slideSpeed: 500,
        slideBy: slidesPerPage, 
        navText: ['<svg width="18px" height="18px" viewBox="0 0 11 20"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M9.554,1.001l-8.607,8.607l8.607,8.606"/></svg>', '<svg width="25px" height="25px" viewBox="0 0 11 20" version="1.1"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M1.054,18.214l8.606,-8.606l-8.606,-8.607"/></svg>'],
        responsiveRefreshRate: 100
      }).on('changed.owl.carousel', syncPosition2);
    function syncPosition(el) {
      var count = el.item.count - 1;
      var current = Math.round(el.item.index - (el.item.count / 2) - .5);
      if (current < 0) {
          current = count;
      }
      if (current > count) {
          current = 0;
      }
      thumb
      .find(".owl-item")
      .removeClass("current")
      .eq(current)
      .addClass("current");
      var onscreen = thumb.find('.owl-item.active').length - 1;
      var start = thumb.find('.owl-item.active').first().index();
      var end = thumb.find('.owl-item.active').last().index();
      if (current > end) {
          thumb.data('owl.carousel').to(current, 100, true);
      }
      if (current < start) {
          thumb.data('owl.carousel').to(current - onscreen, 100, true);
      }
    }
    function syncPosition2(el) {
      if (syncedSecondary) {
        var number = el.item.index;
        slider.data('owl.carousel').to(number, 100, true);
      }
    }
    thumb.on("click", ".owl-item", function(e) {
      e.preventDefault();
      var number = $(this).index();
      slider.data('owl.carousel').to(number, 300, true);
    });

    $(".qtyminus").on("click",function(){
      let id = $(this).data('id');
      var now = $(".qty-"+id).val();
      if ($.isNumeric(now)){
        if (parseInt(now) -1> 0)
        {
          now--;
          let data = {'id':id,'qty':now};
          updateCart(data);
        }
        $(".qty-"+id).val(now);
      }
    })
    $(".qtyplus").on("click",function(){
      let id = $(this).data('id');
      var now = $(".qty-"+id).val();
      if ($.isNumeric(now)){
        $(".qty-"+id).val(parseInt(now)+1);
        let data = {'id':id,'qty':parseInt(now)+1};
        updateCart(data);
      }
    });
    $(".remove").on("click",function(){
      let id = $(this).data('id');
      let data = {'id':id,'remove':1};
      updateCart(data);
    });
    function updateCart(data){
      $.ajax({
        type:"post",
        url:"{{url('/cart/update')}}",
        data:{_token: "{{csrf_token()}}",'data': data},
        success:function(res)
        { 
          if(res.remove == 1)
          window.location.reload();
        },
        error: function(error){
            console.log(error);
        }
      });
    }

    @if(session('query') && session('query') == 'sent')
      $('#myModalQuery').modal('show');
      setTimeout(function(){
        $('#myModalQuery').modal('hide');
      }, 5000);
    @endif
      <?php
        session()->forget('query');
      ?>
});
</script>
@endsection