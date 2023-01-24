@extends('frontend.layouts.app')

@section('title')
  Order confirmation
@endsection

@section('style')
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

<div class="container-fluid bgteam-overlay">
	<div class="text-left">
		<h1 class="deu-meethead">Order Details</h1>
    <p class="deu-orderno">Purchase ID #{{$product['view'][0]->purchase_token}}</p>
	</div>
</div>

@php
$items = count($product['view']);
$subtotal = 0;
$coupon_code = ""; 
$coupon_discount = 0; 
$new_price = 0;
$shipping = 0;
@endphp
<div class="container-fluid mt-5 mb-5">
  <div class="row">
    <div class="col-md-7">
      <div class="panel panel-info">
        <div class="panel-body deu-cardborder">
          @foreach($product['view'] as $key => $product)
          @php
            if($product->discount_price != 0)
            {
              $price = $product->discount_price;
              $new_price += $product->quantity * $product->discount_price;
              $coupon_code = $product->coupon_code;
            }
            else
            {
              $price = $product->price;
              $new_price += $product->quantity * $product->price;
            }
            $shipping += $product->product_local_shipping_fee;
            $total = $product->quantity * $product->price;
            $subtotal += $total;
          @endphp
          @if($key!=0)          
					<hr>
          @endif
					<div class="row m-4">
						<div class="col-md-3">
              @if($product->product_image != '')
              <img class="img-fluid deu-orderheight" src="{{ url('/') }}/public/storage/product/{{ $product->product_image }}">
              @else
              <img class="img-fluid deu-orderheight" src="{{ url('/') }}/public/img/no-image.jpg">
              @endif
              <div class="product-count mt-3 mb-3">
              <form action="#" class="display-flex" style="justify-content:center">
                <div class="qtyminus">-</div>
                <input disabled type="text" name="quantity" value="{{ $product->quantity }}" class="qty">
                <div class="qtyplus">+</div>
                </form>
              </div>
            </div>
						<div class="col-md-6">
							<h4 class="deu-cardsname mt-5">{{ $product->product_name }}</h4>
              <h4 class="deu-cardrs"><i class="fa fa-inr" aria-hidden="true"></i> {{ $product->discount_price !=0 ? $product->discount_price : $product->price }}</h4>
						</div>
					</div>
          @endforeach
				</div>
			</div>
		</div>
    <div class="col-md-5">
      <p class="deu-carthead">Delivered Address</p>
      <div class="deu-deliver">
      <p class="deu-homes">HOME</p>
      <p class="deu-homes1"><span>{{ $purchase->bill_firstname }} {{ $purchase->bill_lastname }}</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span>{{ $purchase->bill_phone }}</span></p>
        <p class="deu-homes2">
          {{ $purchase->bill_address ? $purchase->bill_address.',' : '' }}
          {{ $purchase->bill_address_2 ? $purchase->bill_address_2.',' : '' }}
          {{ $purchase->bill_city ? $purchase->bill_city.',' : '' }}
          {{ $purchase->bill_state ? $purchase->bill_state.',' : '' }}
          {{ $billcountry }} - {{ $purchase->bill_postcode }}</p>
      </div>
      <p class="deu-carthead">Cart Details</p>
      <table class="table table-borderless">
        <tr class="deu-cartsbg">
          <td>Price ({{$items}} items)</td>
          <td class="text-right" align="right"><i class="fa fa-inr" aria-hidden="true"></i> {{number_format((float)$subtotal, 2, '.', '');}}</td>
        </tr>
        <tr class="deu-cartsbgs">
          <td>Shipping and handing</td>
          <td class="text-right" align="right"><i class="fa fa-inr" aria-hidden="true"></i> {{number_format((float)$purchase->shipping_price, 2, '.', '');}}</td>
        </tr>
        @if($coupon_code != "")
        @php 
        $coupon_discount = $subtotal - $new_price;
        $final = $new_price + $shipping; 
        @endphp
        <tr class="deu-cartsbgs" style="background-color:#f2fffb">
          <td>Coupon discount</td>
          <td class="text-right" align="right">- <i class="fa fa-inr" aria-hidden="true"></i><span class="coupon_discount"> {{number_format((float)$coupon_discount, 2, '.', '');}}</span></td>
        </tr>
        @else
        @php $final = $subtotal + $shipping; @endphp
        @endif
        <tr class="deu-cartsbg">
          <td></td>
          <td class="text-right" align="right"><i class="fa fa-inr" aria-hidden="true"></i> {{number_format((float)$purchase->total, 2, '.', '');}}</td>
        </tr>
        <tr class="deu-cartsbgs text-dark">
          <td>Total Amount</td>
          <td class="text-right" align="right"><i class="fa fa-inr" aria-hidden="true"></i> {{number_format((float)$purchase->total, 2, '.', '');}}</td>
        </tr>
      </table>
		</div>
	</div>
</div>

<div class="container-fluid mb-5 mb-5">
        <div class="col-md-12 deu-probar p-2">
            <div class="container me-0 pe-0">
                <div class="">
                    <div class="progress">
                        <div class="step">
                            <div class="step-progress"></div>
                            <div class="icon-wrapper">
                                <svg class="icon icon-checkmark" viewBox="0 0 32 32">
                                    <path class="path1" d="M27 4l-15 15-7-7-5 5 12 12 20-20z"></path>
                                </svg>
                                <div class="step-text">Order Placed</div>
                            </div>
                        </div>
                        <div class="step">
                            <div class="step-progress"></div>
                            <div class="icon-wrapper">
                                <svg class="icon icon-checkmark" viewBox="0 0 32 32">
                                    <path class="path1" d="M27 4l-15 15-7-7-5 5 12 12 20-20z"></path>
                                </svg>
                                <div class="step-text">Order Confirmed</div>
                            </div>
                        </div>
                        <div class="step">
                            <div class="step-progress"></div>
                            <div class="icon-wrapper">
                                <svg class="icon icon-checkmark" viewBox="0 0 32 32">
                                    <path class="path1" d="M27 4l-15 15-7-7-5 5 12 12 20-20z"></path>
                                </svg>
                                <div class="step-text">Shipped</div>
                            </div>
                        </div>
                        <div class="step" style="flex: initial; vertical-align: bottom;">
                            <div class="icon-wrapper w-auto">
                                <svg class="icon icon-checkmark" viewBox="0 0 32 32">
                                    <path class="path1" d="M27 4l-15 15-7-7-5 5 12 12 20-20z"></path>
                                </svg>
                                <div class="step-text">Delivered</div>
                            </div>
                        </div>
                    </div>
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
<script>
   var steps = $(".step");
    console.dir(steps);
    setTimeout(function() {
      steps.each(function(index) {
        var _t = $(this);
        setTimeout(function() {
          _t.addClass('done');
        }, 1250*index*1.5);
      });
    }, 500);
</script>
@endsection
