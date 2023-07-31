@extends('frontend.layouts.app')

@section('title')
  Checkout
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
		<h1 class="deu-meethead">My Checkout</h1>
	</div>
</div>

<div class="container-fluid mt-5 mb-5">
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
  <form action="{{ url('/checkout') }}" class="setting_form" id="checkout_form" method="post" enctype="multipart/form-data">
  {{ csrf_field() }}    
  <div class="row">
    <div class="col-md-12">
      <p class="deu-carthead">Billing Details</p>
      <div class="col-md-12 deu-personalline" aos="fade-left">
        <div class="col-12">
          <p class="deu-personalhead mt-3">Personal Information</p>
        </div>
        <div class="row col-12">
          <div class="col-md-6">
            <input type="text" placeholder="First name*" maxlength="25" minlength="1" id="bill_firstname" name="bill_firstname" value="@if($checkout_data != 0){{ $checkout_details->bill_firstname }}@else{{Auth::user()->name??''}}@endif" class="form-control deu-checkinput" required>
          </div>
          <div class="col-md-6">
            <input type="text" placeholder="Last name" maxlength="25" id="bill_lastname" name="bill_lastname" value="@if($checkout_data != 0){{ $checkout_details->bill_lastname }}@endif" class="form-control deu-checkinput">
          </div>
        </div>
        <div class="row col-12">
          <div class="col-md-6">
            <input type="email" maxlength="50" minlength="8" placeholder="Email Id*" id="bill_email" name="bill_email" required value="@if($checkout_data != 0){{ $checkout_details->bill_email }}@else{{Auth::user()->email??''}}@endif" class="form-control deu-checkinput">
          </div>
          <div class="col-md-6">
            <input type="text" maxlength="10" minlength="10" placeholder="Phone Number*" id="bill_phone" name="bill_phone" required value="@if($checkout_data != 0){{ $checkout_details->bill_phone }}@else{{Auth::user()->user_phone??''}}@endif" class="form-control deu-checkinput" onkeypress="return /^[0-9]*$/.test(event.key)">
          </div>
        </div>
        <div class="row col-12">
          <div class="col-md-6">
            <input type="text" placeholder="Company Name (Optional)" id="bill_companyname" name="bill_companyname" value="@if($checkout_data != 0){{ $checkout_details->bill_companyname }}@endif" class="form-control deu-checkinput">
          </div>
          <div class="col-md-6">
            <input type="text" placeholder="Company Address (Optional)" id="bill_companyaddress" name="bill_companyaddress" value="@if($checkout_data != 0){{ $checkout_details->bill_companyaddress }}@endif" class="form-control deu-checkinput">
          </div>
        </div>
        <div class="col-12">
          <p class="deu-personalhead">Country</p>
        </div>
        <div class="row col-12">
          <div class="col-md-6">
            <select class="form-control deu-checkinput" name="bill_country" required>
            <option value="" disabled selected>Select Country</option>
            @foreach($allcountry as $country)
            <option value="{{ $country->country_id }}" @if(Auth::user()->user_country && Auth::user()->user_country == $country->country_id) selected @endif>{{ $country->country_name }}</option>
            @endforeach
            </select>
          </div>
        </div>
        <div class="col-12">
          <p class="deu-personalhead">Address</p>
        </div>
        <div class="row col-12">
          <div class="col-md-6">
              <input type="text" maxlength="200" minlength="10" placeholder="House number and street name*" id="bill_address" name="bill_address" required value="{{Auth::user()->user_address??''}}" class="form-control deu-checkinput">
          </div>
          <div class="col-md-6">
            <input type="text" placeholder="Apartment, suite, unit etc  (Optional)" id="bill_address_2" name="bill_address_2" value="@if($checkout_data != 0){{ $checkout_details->bill_address_2 }}@endif" class="form-control deu-checkinput">
          </div>
        </div>
        <div class="col-12">
          <p class="deu-personalhead">Town/City</p>
        </div>
        <div class="row col-12">
          <div class="col-md-4">
            <input type="text" placeholder="City*" id="bill_city" name="bill_city" required value="{{Auth::user()->user_city??''}}" class="form-control deu-checkinput">
          </div>
          <div class="col-md-4">
            <input type="text" placeholder="State*" id="bill_state" name="bill_state" required value="{{Auth::user()->user_state??''}}" class="form-control deu-checkinput">
          </div>
          <div class="col-md-4">
            <input type="text" placeholder="Zip*" id="bill_postcode" maxlength="6" minlength="6" name="bill_postcode" required value="{{Auth::user()->user_pincode??''}}" class="form-control deu-checkinput" onkeypress="return /^[0-9]*$/.test(event.key)">
          </div>
        </div>
        <div class="col-12">
          <p class="deu-personalhead">Order Notes (Optional)</p>
        </div>
        <div class="row col-12">
          <div class="col-12">
            <textarea class="form-control deu-teaxtar" name="other_notes" rows="5" id="comment" placeholder="Notes about your order"></textarea>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-7" aos="fade-right">
      <p class="deu-carthead">Payment Method</p>
      <div class="table-responsive deu-method">
        <table class="table">
          <tbody>
            <tr class="deu-td">
              <td>
              <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" checked="checked" class="form-check-input payment_type" onchange="enable_button()" name="payment_method" value="online">Pay Online
                  <img class="deu-visa" src="{{asset('public/image/visa.svg')}}"> 
                  <img class="" src="{{asset('public/image/visa1.svg')}}" style="width: 50px; height: 32px;"> 
                </label>
              </div>
              </td>
            </tr>
            {{--
            <tr class="deu-td">
              <td>
              <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input payment_type" onchange="enable_button()" name="payment_method" value="cash-on-delivery">Cash on Delivery
                </label>
              </div>
              </td>
            </tr>
            <tr class="deu-td">
              <td>
              <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input payment_type" onchange="enable_button()" name="payment_method" value="paypal">Paypal 
                  <img class="deu-visa" src="{{asset('public/image/visa.svg')}}"> 
                  <img class="" src="{{asset('public/image/visa1.svg')}}" style="width: 50px; height: 32px;"> 
                  <img class="" src="{{asset('public/image/visa2.svg')}}" style="width: 70px;">
                </label>
              </div>
              </td>
            </tr>
            --}}
          </tbody>
        </table>
      </div>
      <input type="hidden" name="order_id" value="{{ $order_numbers }}">
      <input type="hidden" name="sub_total" value="{{ $new_price }}">
      <input type="hidden" name="shipping_fee" value="0">
      <input type="hidden" name="shipping_fee_separate" value="0">
      <input type="hidden" name="processing_fee" value="{{ $allsettings->site_processing_fee }}">
      <input type="hidden" name="total" value="{{ $final }}">
      <input type="hidden" name="product_id" value="{{ $product_numbers }}">
      <input type="hidden" name="product_names" value="{{ $product_names }}">
      <p class="deu-personal">Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our privacy policy.</p>
      <button type="submit" onclick="return enable_button();" class="round-btns place_order" style="border-radius: 5px;font-size: 1.4rem;">Place Order</a>
    </div>
    <div class="col-md-5" aos="fade-left">
      <p class="deu-carthead">Cart Details</p>
      <table class="table table-borderless">
        <tr class="deu-cartsbg">
          <td>Price ({{$cart_count}} items)</td>
          <td class="text-right" align="right"><i class="fa fa-inr" aria-hidden="true"></i>{{number_format((float)$subtotal, 2, '.', '');}}</td>
        </tr>
        <tr class="deu-cartsbgs">
          <td>Shipping and handing</td>
          <td class="text-right" align="right"><i class="fa fa-inr" aria-hidden="true"></i> {{number_format((float)$shipping, 2, '.', '');}}</td>
        </tr>
        @if($gst > 0)
        <tr class="deu-cartsbgs" style="background-color:#fff2fc">
          <td>GST</td>
          <td class="text-right" align="right"> <i class="fa fa-inr" aria-hidden="true"></i>{{number_format((float)$gst, 2, '.', '');}}</td>
        </tr>
        @endif
        @if($coupon_discount > 0)
        <tr class="deu-cartsbgs" style="background-color:#f2fff3">
          <td>Coupon discount ({{explode(',',$coupon_code)[0]}})</td>
          <td class="text-right" align="right">- <i class="fa fa-inr" aria-hidden="true"></i>{{number_format((float)$coupon_discount, 2, '.', '');}}</td>
        </tr>
        @endif
        <tr class="deu-cartsbg">
          <td></td>
          <td class="text-right" align="right"><i class="fa fa-inr" aria-hidden="true"></i>{{number_format((float)$final+$shipping, 2, '.', '');}}</td>
        </tr>
        <tr class="deu-cartsbgs text-dark">
          <td>Total Amount</td>
          <td class="text-right" align="right"><i class="fa fa-inr" aria-hidden="true"></i>{{number_format((float)$final+$shipping, 2, '.', '');}}</td>
        </tr>
      </table>
    </div>
  </div>
  </form>
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
  function enable_button() {
    if($('.payment_type').is(':checked'))
    {
      return true;
    }else{
      alert("Please select payment method");
      return false;
    }
  }
</script>
@endsection
