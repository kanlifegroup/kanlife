@extends('frontend.layouts.app')

@section('title')
  Cart
@endsection
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
.deu-search-bar{
  padding: 6px !important;
}
@media screen and (max-width: 426px) {
.deu-search-bar {
    margin-top: 0px !important;
}
</style>

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

<div class="container-fluid bgteam-overlay">
	<div class="text-left">
		<h1 class="deu-meethead">My Cart</h1>
	</div>
</div>
@php 
  $subtotal = 0;
  $coupon_code = ""; 
  $coupon_discount = 0; 
  $new_price = 0;
  $shipping = 0;
  $gst = 0;
@endphp
@foreach($cart['product'] as $cart_1)
  @php
    if($cart_1->discount_price != 0)
    {
      $price = $cart_1->discount_price;
      $new_price += $cart_1->quantity * $cart_1->discount_price;
    }
    else
    {
      $price = $cart_1->price;
      $new_price += $cart_1->quantity * $cart_1->price;
    }
    $coupon_code = $cart_1->coupon_code;
    $gst += ($cart_1->quantity * $price) * $cart_1->product_gst / 100;
    $shipping += $cart_1->product_local_shipping_fee;
    $total = $cart_1->quantity * $cart_1->price;
    $subtotal += $total;
  @endphp
@endforeach
<div class="container-fluid mt-5 mb-5">
	<div class="row">    
    <div class="col-md-5 d-sm-none d-block"  aos="fade-left">
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
      <p class="deu-carthead mt-3 mt-sm-0">Cart Details</p>
      <table class="table table-borderless">
        <tr class="deu-cartsbg">
          <td>Price ({{$cart_count}} items)</td>
          <td class="text-right" align="right"><i class="fa fa-inr" aria-hidden="true"></i><span class="subtotal"> @if($cart_count > 0){{number_format((float)$subtotal, 2, '.', '');}} @else 00.00 @endif</span></td>
        </tr>
        <tr class="deu-cartsbgs">
          <td>Shipping and handling</td>
          <td class="text-right" align="right"><i class="fa fa-inr" aria-hidden="true"></i><span class="shipping_charge"> {{number_format((float)$shipping, 2, '.', '');}}</span></td>
        </tr>      
        @if($gst > 0)
        <tr class="deu-cartsbgs" style="background-color:#fff2fc">
          <td>GST</td>
          <td class="text-right" align="right"><i class="fa fa-inr" aria-hidden="true"></i><span class="gst"> {{number_format((float)$gst, 2, '.', '');}}</span></td>
        </tr>
        @endif
        @if($coupon_code != "")
          @php 
          $coupon_discount = $subtotal - $new_price;
          $final = $new_price + $shipping + $gst; 
          @endphp
        <tr class="deu-cartsbgs" style="background-color:#f2fffb">
          <td>Coupon discount ({{ $coupon_code }})</td>
          <td class="text-right" align="right">- <i class="fa fa-inr" aria-hidden="true"></i><span class="coupon_discount"> {{number_format((float)$coupon_discount, 2, '.', '');}}</span></td>
        </tr>
        @else
        @php $final = $subtotal + $shipping + $gst; @endphp
        @endif  
        <tr class="deu-cartsbg">
          <td></td>
          <td class="text-right" align="right"><i class="fa fa-inr" aria-hidden="true"></i><span class="final"> {{number_format((float)$final, 2, '.', '');}}</span></td>
        </tr>
        <tr class="deu-cartsbgs text-dark">
          <td>Total Amount</td>
          <td class="text-right" align="right"><i class="fa fa-inr" aria-hidden="true"></i><span class="final"> @if($cart_count > 0){{number_format((float)$final, 2, '.', '');}} @else 00.00 @endif</span></td>
        </tr>
      </table>
      <div class="product-count mt-3 mb-3">
          <form action="{{ route('coupon') }}" class="row g-0" id="coupon_form" method="post" >
          {{ csrf_field() }}
          <input type="text" class="border border-3 px-2 bg-white col-6" style="border-color: #9D9D9D; border-radius: 5px; font-size: 1.4rem;" placeholder="Coupon Code"  id="coupon" name="coupon" >
          <div class="col-auto"></div>
          <div class="col d-flex justify-content-end">
            <button type="submit" class="josefin-font btn text-white text-center col-10 py-2" style="background-color:#3188CA;border-radius: 5px;font-size: 1.4rem;">Apply Coupon</a>
          </div>
      </form>
      @if($coupon_code != "")
        <a href="{{ URL::to('/cart/') }}/remove/{{ $coupon_code }}" onClick="return confirm('{{ Helper::translation(1992,$translate,'') }}');">{{ Helper::translation(2848,$translate,'') }} Coupon <strong>{{ $coupon_code }}</strong></a>
      @endif
      </div>
		</div>
		<div class="col-md-7">
			<div class="panel panel-info">
        @php 
        $subtotal = 0;
        $coupon_code = ""; 
        $coupon_discount = 0; 
        $new_price = 0;
        $shipping = 0;
        $gst = 0;
        @endphp
        @if($cart_count > 0)
				<div class="panel-body deu-cardborder">        
        @foreach($cart['product'] as $key => $cart)
        @php
          if($cart->discount_price != 0)
          {
            $price = $cart->discount_price;
            $new_price += $cart->quantity * $cart->discount_price;
          }
          else
          {
            $price = $cart->price;
            $new_price += $cart->quantity * $cart->price;
          }
          $coupon_code = $cart->coupon_code;
          $gst += ($cart->quantity * $price) * $cart->product_gst / 100;
          $shipping += $cart->product_local_shipping_fee;
          $total = $cart->quantity * $cart->price;
          $subtotal += $total;
        @endphp
					<div class="row m-1 pt-2 m-md-4 me-0">
						<div class="col-md-4" aos="fade-right">
              <div class="d-flex justify-content-center align-items-center">
              <a href="{{ url('/product') }}/{{ $cart->product_slug }}">
              @if($cart->product_image != "")
                <img class="img-fluid deu-cardimgs" src="{{ url('/') }}/public/storage/product/{{ $cart->product_image }}" alt="{{ $cart->product_image_alt }}">
              @else
                <img class="img-fluid deu-cardimgs" src="{{ url('/') }}/public/img/no-image.jpg">
              @endif
              </a>
              </div>
              <div class="product-count mt-3 mb-3"  aos="fade-left">
                <form action="#" class="d-flex justify-content-center align-items-center">
                  <div class="qtyminus" data-id="{{str_replace('=','_', base64_encode($cart->ord_id))}}">-</div>
                  <input type="text" readonly id="{{str_replace('=','_', base64_encode($cart->ord_id))}}" name="quantity" value="{{$cart->quantity}}" class="qty qty-{{str_replace('=','_', base64_encode($cart->ord_id))}}">
                  <div class="qtyplus" data-id="{{str_replace('=','_', base64_encode($cart->ord_id))}}">+</div>
                </form>
              </div>
            </div>
						<div class="col-6 col-md-5"  aos="fade-left">
							<h4 class="deu-cardsname mt-5"><a href="{{ url('/product') }}/{{ $cart->product_slug }}">{{$cart->product_name}}</a></h4>
              @if($cart->discount_price != 0)
              <h4 class="deu-cardrs" style="display:inline-block;"><i class="fa fa-inr" aria-hidden="true"></i>{{ $cart->discount_price }}</h4>
              <span style="text-decoration: line-through;"><i class="fa fa-inr" aria-hidden="true"></i> {{$cart->price}}</span>
              @else
              <h4 class="deu-cardrs"><i class="fa fa-inr" aria-hidden="true"></i>{{ $price }}</h4>
              @endif
              <!-- style="display:inline-block;" -->
						</div>
						<div class="col mt-5 mt-md-0 me-3 me-md-0">
							<div class="text-end">
								<!-- <h6 data-id="{{base64_encode($cart->ord_id)}}" class="mt-5 cursor-pointer deu-cardremove remove">REMOVE</h6> -->
                <a href="{{ url('/cart') }}/{{base64_encode($cart->ord_id)}}" onClick="return confirm('Are you sure you want to remove?');" class="mt-5 cursor-pointer deu-cardremove">REMOVE</a>
							</div>
						</div>
					</div>
          @if($key < $cart_count-1)
					<hr>
          @endif
        @endforeach
        <div class="panel-footer deu-proceedbg">
            <div class="row h-100 pe-4">
                <div class="col-md-12 d-flex justify-content-end align-items-center">
                  @guest
                    <a href="javascript:void(0);" onclick="openModel('myModal')" class="deu-prceebtn text-white px-5 py-3" style="border-radius: 5px;font-size: 1.4rem;">Proceed to checkout</a>
                  @else
                    <a href="{{ url('/checkout') }}" class="deu-prceebtn text-white px-5 py-3" style="border-radius: 5px;font-size: 1.4rem;font-family: 'Nunito', sans-serif;">Proceed to checkout</a>
                  @endif
                </div>
            </div>
        </div>
      </div>
        @else
        <h3>No product added in cart !!</h3>
        @endif
			</div>
		</div>
    <div class="col-md-5 d-none d-sm-block"  aos="fade-left">
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
      <p class="deu-carthead mt-3 mt-sm-0">Cart Details</p>
      <table class="table table-borderless">
        <tr class="deu-cartsbg">
          <td>Price ({{$cart_count}} items)</td>
          <td class="text-right" align="right"><i class="fa fa-inr" aria-hidden="true"></i><span class="subtotal"> @if($cart_count > 0){{number_format((float)$subtotal, 2, '.', '');}} @else 00.00 @endif</span></td>
        </tr>
        <tr class="deu-cartsbgs">
          <td>Shipping and handling</td>
          <td class="text-right" align="right"><i class="fa fa-inr" aria-hidden="true"></i><span class="shipping_charge"> {{number_format((float)$shipping, 2, '.', '');}}</span></td>
        </tr>      
        @if($gst > 0)
        <tr class="deu-cartsbgs" style="background-color:#fff2fc">
          <td>GST</td>
          <td class="text-right" align="right"><i class="fa fa-inr" aria-hidden="true"></i><span class="gst"> {{number_format((float)$gst, 2, '.', '');}}</span></td>
        </tr>
        @endif
        @if($coupon_code != "")
          @php 
          $coupon_discount = $subtotal - $new_price;
          $final = $new_price + $shipping + $gst; 
          @endphp
        <tr class="deu-cartsbgs" style="background-color:#f2fffb">
          <td>Coupon discount ({{ $coupon_code }})</td>
          <td class="text-right" align="right">- <i class="fa fa-inr" aria-hidden="true"></i><span class="coupon_discount"> {{number_format((float)$coupon_discount, 2, '.', '');}}</span></td>
        </tr>
        @else
        @php $final = $subtotal + $shipping + $gst; @endphp
        @endif  
        <tr class="deu-cartsbg">
          <td></td>
          <td class="text-right" align="right"><i class="fa fa-inr" aria-hidden="true"></i><span class="final"> {{number_format((float)$final, 2, '.', '');}}</span></td>
        </tr>
        <tr class="deu-cartsbgs text-dark">
          <td>Total Amount</td>
          <td class="text-right" align="right"><i class="fa fa-inr" aria-hidden="true"></i><span class="final"> @if($cart_count > 0){{number_format((float)$final, 2, '.', '');}} @else 00.00 @endif</span></td>
        </tr>
      </table>
      <div class="product-count mt-3 mb-3">
          <form action="{{ route('coupon') }}" class="row g-0" id="coupon_form" method="post" >
          {{ csrf_field() }}
          <input type="text" class="border border-3 px-2 bg-white col-6" style="border-color: #9D9D9D; border-radius: 5px; font-size: 1.4rem;" placeholder="Coupon Code"  id="coupon" name="coupon" >
          <div class="col-auto"></div>
          <div class="col d-flex justify-content-end">
            <button type="submit" class="josefin-font btn text-white text-center col-10 py-2" style="background-color:#3188CA;border-radius: 5px;font-size: 1.4rem;">Apply Coupon</a>
          </div>
      </form>
      @if($coupon_code != "")
        <a href="{{ URL::to('/cart/') }}/remove/{{ $coupon_code }}" onClick="return confirm('{{ Helper::translation(1992,$translate,'') }}');">{{ Helper::translation(2848,$translate,'') }} Coupon <strong>{{ $coupon_code }}</strong></a>
      @endif
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
      $(".subtotal").text(parseFloat(res.subtotal).toFixed(2));
      $(".shipping_charge").text(parseFloat(res.shipping).toFixed(2));
      $(".coupon_discount").text(parseFloat(res.coupon_discount).toFixed(2));
      $(".final").text(parseFloat(res.final).toFixed(2));
      if(res.gst != 0) $(".gst").text(parseFloat(res.gst).toFixed(2));
      if(res.remove == 1)
      window.location.reload();
    },
    error: function(error){
        console.log(error);
    }
  });
}
</script>
@endsection