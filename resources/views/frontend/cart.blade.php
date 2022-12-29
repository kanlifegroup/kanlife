@extends('frontend.layouts.app')

@section('title')
  Cart
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
		<h1 class="deu-meethead">My Cart</h1>
	</div>
</div>

<div class="container-fluid mt-5 mb-5">
	<div class="row">
		<div class="col-md-7">
			<div class="panel panel-info">
        @php 
        $subtotal = 0;
        $coupon_code = ""; 
        $new_price = 0;
        @endphp
        @if($cart_count > 0)
				<div class="panel-body deu-cardborder">        
        @foreach($cart['product'] as $key => $cart)
        @php
          if($cart->discount_price != 0)
          {
            $price = $cart->discount_price;
            $new_price += $cart->quantity * $cart->discount_price;
            $coupon_code = $cart->coupon_code;
          }
          else
          {
            $price = $cart->price;
            $new_price += $cart->quantity * $cart->price;
          }
          $total = $cart->quantity * $cart->price;
          $subtotal += $total;
        @endphp
					<div class="row m-4">
						<div class="col-md-3">
            @if($cart->product_image != "")
              <img class="img-fluid deu-cardimgs" src="{{ url('/') }}/public/storage/product/{{ $cart->product_image }}">
            @else
              <img class="img-fluid deu-cardimgs" src="{{ url('/') }}/public/img/no-image.jpg">
            @endif
              <div class="product-count mt-3 mb-3">
              <form action="#" class="display-flex">
                <div class="qtyminus" data-id="{{base64_encode($cart->ord_id)}}">-</div>
                <input type="text" id="{{base64_decode($cart->ord_id)}}" name="quantity" value="{{$cart->quantity}}" class="qty qty-{{base64_encode($cart->ord_id)}}">
                <div class="qtyplus" data-id="{{base64_encode($cart->ord_id)}}">+</div>
              </form>
              </div>
            </div>
						<div class="col-md-6">
							<h4 class="deu-cardsname mt-5">{{$cart->product_name}}</h4>
              <h4 class="deu-cardrs"><i class="fa fa-inr" aria-hidden="true"></i>{{ $price }}</h4>
						</div>
						<div class="col-md-3">
							<div class="text-right">
								<h6 data-id="{{base64_encode($cart->ord_id)}}" class="mt-5 cursor-pointer deu-cardremove remove">REMOVE</h6>
							</div>
						</div>
					</div>
          @if($key < $cart_count-1)
					<hr>
          @endif
        @endforeach
				<div class="panel-footer deu-proceedbg">
					<div class="row text-right">
						<div class="col-md-12">
              <a href="#" class="deu-prceebtn">Proceed to checkout</a>
						</div>
					</div>
				</div>
      </div>
        @else
        <h3>No product added in cart !!</h3>
        @endif
			</div>
		</div>
    <div class="col-md-5">
      <p class="deu-carthead">Cart Details</p>
      <table class="table table-borderless">
        <tr class="deu-cartsbg">
          <td>Price ({{$cart_count}} items)</td>
          <td class="text-right"><i class="fa fa-inr" aria-hidden="true"></i><span class="subtotal"> @if($cart_count > 0) {{number_format((float)$subtotal, 2, '.', '');}} @else 00.00 @endif</span></td>
        </tr>
        <tr class="deu-cartsbgs">
          <td>Shipping and handling</td>
          <td class="text-right"><i class="fa fa-inr" aria-hidden="true"></i> 00.00</td>
        </tr>
        <tr class="deu-cartsbg">
          <td></td>
          <td class="text-right"><i class="fa fa-inr" aria-hidden="true"></i><span class="subtotal"> {{number_format((float)$subtotal, 2, '.', '');}}</span></td>
        </tr>
        <tr class="deu-cartsbgs1">
          <td>Total Amount</td>
          <td class="text-right"><i class="fa fa-inr" aria-hidden="true"></i><span class="subtotal"> @if($cart_count > 0) {{number_format((float)$subtotal, 2, '.', '');}} @else 00.00 @endif</span></td>
        </tr>
      </table>
      <div class="product-count mt-3 mb-3">
          <form action="#" class="display-flex">
          <input type="text" class="form-control deu-coupon" placeholder="Coupon Code" id="usr">
      <a href="#" class="deu-couponss">Apply Coupon</a>
      </form>
      </div>
		</div>
	</div>
</div>

@endsection

@section('script')
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
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
      $(".subtotal").text(res.subtotal);
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
