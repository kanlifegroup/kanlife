@extends('frontend.layouts.app')
@section('title')
  {{$shop->product_name}}
@endsection

@section('style')
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/7.3.1/swiper-bundle.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"><div class="pd-wrap">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@500&display=swap" rel="stylesheet"> -->
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@500&family=Montserrat:wght@500&family=Nunito:wght@500;600;700;900&family=Roboto:wght@500&display=swap" rel="stylesheet">
@endsection

@section('content')

<div class="container-fluid bgteam-overlay">
	<div class="text-left">
		<h1 class="deu-meethead">Product Details</h1>
	</div>
</div>

<div class="container-fluid mt-5 mb-5">
      <div class="row">
        <div class="col-md-4">
          <div id="slider" class="owl-carousel product-slider">
            <div class="item">
                <img class="img-fluid deu-detailheight" src="{{ url('/') }}/public/storage/product/{{ $shop->product_image }}" />
            </div>
          @foreach($shop->productimages as $images)
            <div class="item">
                <img class="img-fluid deu-detailheight" src="{{ url('/') }}/public/storage/product/{{ $images->product_image }}" />
            </div>
          @endforeach
          </div>
          <div id="thumb" class="owl-carousel product-thumb">
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
        <div class="col-md-8 row">
          <div class="product-dtl col-md-6">
            <div class="product-info mb-3">
              <div class="product-name">{{$shop->product_name}}</div>
              <div class="product-price-discount">
              @if($shop->product_price != 0)
                @if($shop->product_offer_price != 0)
                <span><i class="fa fa-inr" aria-hidden="true"></i> {{$shop->product_offer_price}}</span>
                <span class="line-through"><i class="fa fa-inr" aria-hidden="true"></i> {{$shop->product_price}}</span></div>
                @else
                <span><i class="fa fa-inr" aria-hidden="true"></i> {{$shop->product_price}}</span>
                @endif
              @endif
            </div>
        <p class="" style="color:#3188CA;"><img class="deu-fealine" src="{{asset('public/image/line.svg')}}"> &nbsp;&nbsp;&nbsp;
         <span class="deu-filter">Features</span></p>
        <ul class="deu-proul">
          <li class="deu-margbtm"><i class="fa fa-circle deu-profa" aria-hidden="true"></i> 200 kHz, 4 kW, 100mA Mobile HF X-Ray</li>
          <li class="deu-margbtm"><i class="fa fa-circle deu-profa" aria-hidden="true"></i> Draws clean power from mains</li>
          <li class="deu-margbtm"><i class="fa fa-circle deu-profa" aria-hidden="true"></i> Negligible leakage radiation</li>
          <li class="deu-margbtm"><i class="fa fa-circle deu-profa" aria-hidden="true"></i> Easy to move (85 kg) </li>
          <li class="deu-margbtm"><i class="fa fa-circle deu-profa" aria-hidden="true"></i> 90° collimator rotation</li>
          <li class="deu-margbtm"><i class="fa fa-circle deu-profa" aria-hidden="true"></i> Tube-head rotation</li>
          <li class="deu-margbtm"><i class="fa fa-circle deu-profa" aria-hidden="true"></i> Light field intensity min 160 Lux @ 1m</li>
          <li class="deu-margbtm"><i class="fa fa-circle deu-profa" aria-hidden="true"></i> Suitable for NICU, ICU, Trauma & Ortho</li>
        </ul>
            <div class="product-count mt-3 mb-3">
              <form action="#" class="display-flex">
              @if(isset($cart['qty']) && $cart['qty'] > 0)
              <div class="qtyminus" data-id="{{base64_encode($cart['ord_id'])}}">-</div>
              <input type="text" id="{{base64_decode($cart['ord_id'])}}" name="quantity" value="{{$cart['qty']}}" class="qty qty-{{base64_encode($cart['ord_id'])}}">
              <div class="qtyplus" data-id="{{base64_encode($cart['ord_id'])}}">+</div>
              <a href="javascript:void(0)" data-id="{{base64_encode($cart['ord_id'])}}" class="round-black-btn remove">Remove from cart</a>
              @else
              @if($shop->product_price != 0)
              <a href="{{url('/add_to_cart').'/'.$shop->product_slug}}" class="round-black-btn">Add To Cart</a>
              @else
              <a href="{{url('/price_enquiry')}}/{{ base64_encode($shop->product_id) }}" class="round-black-btn">Price Enquiry</a>
              @endif
              @endif
              </form>
            </div>
            <p class="deu-add">
              @if(Auth::guest())
              <a href="{{ url('/wishlist') }}">
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
        <div class="col-md-6">
        <div class="deu-proright mt-4">
        <p class="" style="color:#3188CA;"> <img class="deu-fealine" src="{{asset('public/image/line.svg')}}"> &nbsp;&nbsp;&nbsp;
         <span class="deu-filter">Product Links</span></p>
        <ul class="deu-proul">
          <li><i class="fa fa-circle deu-profa" aria-hidden="true"></i> X-Ray System</li>
          <li><i class="fa fa-circle deu-profa" aria-hidden="true"></i> Surgical C-Arm</li>
          <li><i class="fa fa-circle deu-profa" aria-hidden="true"></i> Ventilators</li>
          <li><i class="fa fa-circle deu-profa" aria-hidden="true"></i> Patient Monitoring Systems</li>
          <li><i class="fa fa-circle deu-profa" aria-hidden="true"></i> Defibrillator</li>
          <li><i class="fa fa-circle deu-profa" aria-hidden="true"></i> ECG</li>
          <li><i class="fa fa-circle deu-profa" aria-hidden="true"></i> Syringe and infusion Pump</li>
          <li><i class="fa fa-circle deu-profa" aria-hidden="true"></i> Electrosurgical Units</li>
          <li><i class="fa fa-circle deu-profa" aria-hidden="true"></i> Dental Products</li>
          <li><i class="fa fa-circle deu-profa" aria-hidden="true"></i> Anesthesia Delivery Systems</li>
        </ul>
         </div>
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
        <p class="deu-loginhead">Price Enquiry</p>
        <p class="deu-logintxt">Your enquiry submitted successfully, We will contact you soon.</p>
      </div>
    </div>
  </div>
</div>
@endif
@endsection

@section('script')
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
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