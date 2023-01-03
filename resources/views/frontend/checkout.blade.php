@extends('frontend.layouts.app')

@section('title')
  Checkout
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
		<h1 class="deu-meethead">My Checkout</h1>
	</div>
</div>

<div class="container-fluid mt-5 mb-5">
  @if ($message = Session::get('success'))
    <div class="alert alert-success" role="alert">
        <span class="alert_icon lnr lnr-checkmark-circle"></span>
        {{ $message }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span class="fa fa-close" aria-hidden="true"></span>
        </button>
    </div>
  @endif
  @if ($message = Session::get('error'))
    <div class="alert alert-danger" role="alert">
      <span class="alert_icon lnr lnr-warning"></span>
      {{ $message }}
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span class="fa fa-close" aria-hidden="true"></span>
      </button>
    </div>
  @endif
  <form action="{{ route('checkout') }}" class="setting_form" id="checkout_form" method="post" enctype="multipart/form-data">
  {{ csrf_field() }}    
  <div class="row">
    <div class="col-md-12">
      <p class="deu-carthead">Billing Details</p>
      <div class="col-md-12 deu-personalline">
        <div class="col-12">
          <p class="deu-personalhead mt-3">Personal Information</p>
        </div>
        <div class="row col-12">
          <div class="col-md-6">
            <input type="text" placeholder="First name" id="bill_firstname" name="bill_firstname" value="@if($checkout_data != 0){{ $checkout_details->bill_firstname }}@endif" class="form-control deu-checkinput" required>
          </div>
          <div class="col-md-6">
            <input type="text" placeholder="Last name" id="bill_lastname" name="bill_lastname" value="@if($checkout_data != 0){{ $checkout_details->bill_lastname }}@endif" class="form-control deu-checkinput" required>
          </div>
        </div>
        <div class="row col-12">
          <div class="col-md-6">
            <input type="text" placeholder="Email Id" id="bill_email" name="bill_email" required value="@if($checkout_data != 0){{ $checkout_details->bill_email }}@endif" class="form-control deu-checkinput">
          </div>
          <div class="col-md-6">
            <input type="text" placeholder="Phone Number" id="bill_phone" name="bill_phone" data-bvalidator="required" value="@if($checkout_data != 0){{ $checkout_details->bill_phone }}@endif" required class="form-control deu-checkinput">
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
            <option value="" disabled>Select Country</option>
            @foreach($allcountry as $country)
            <option value="{{ $country->country_id }}" @if($checkout_data != 0) @if($country->country_id == $checkout_details->bill_country) selected @endif @endif>{{ $country->country_name }}</option>
            @endforeach
            </select>
          </div>
        </div>
        <div class="col-12">
          <p class="deu-personalhead">Address</p>
        </div>
        <div class="row col-12">
          <div class="col-md-6">
              <input type="text" placeholder="House number and street name" id="bill_address" name="bill_address" data-bvalidator="required" value="@if($checkout_data != 0){{ $checkout_details->bill_address }}@endif" class="form-control deu-checkinput">
          </div>
          <div class="col-md-6">
            <input type="text" placeholder="Apartment, suite, unit etc  (Optional)" id="bill_address_2" name="bill_address_2" data-bvalidator="required" value="@if($checkout_data != 0){{ $checkout_details->bill_address_2 }}@endif" class="form-control deu-checkinput">
          </div>
        </div>
        <div class="col-12">
          <p class="deu-personalhead">Town/City</p>
        </div>
        <div class="row col-12">
          <div class="col-md-4">
            <input type="text" placeholder="City" id="bill_city" name="bill_city" required value="@if($checkout_data != 0){{ $checkout_details->bill_city }}@endif" class="form-control deu-checkinput">
          </div>
          <div class="col-md-4">
            <input type="text" placeholder="State" id="bill_state" name="bill_state" required value="@if($checkout_data != 0){{ $checkout_details->bill_state }}@endif" class="form-control deu-checkinput">
          </div>
          <div class="col-md-4">
            <input type="text" placeholder="Zip" id="bill_postcode" name="bill_postcode" required value="@if($checkout_data != 0){{ $checkout_details->bill_postcode }}@endif" class="form-control deu-checkinput">
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
    <div class="col-md-7">
      <p class="deu-carthead">Payment Method</p>
      <div class="table-responsive deu-method">
        <table class="table">
          <tbody>
            <tr class="deu-td">
              <td>
              <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="payment_method" value="net_banking">Net banking
                </label>
              </div>
              </td>
            </tr>
            <tr class="deu-td">
              <td>
              <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="payment_method" value="cash-on-delivery">Cash on Delivery
                </label>
              </div>
              </td>
            </tr>
            <tr class="deu-td">
              <td>
              <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="payment_method" value="paypal">Paypal 
                  <img class="deu-visa" src="image/visa.svg"> 
                  <img class="" src="image/visa1.svg" style="width: 50px; height: 32px;"> 
                  <img class="" src="image/visa2.svg" style="width: 70px;">
                </label>
              </div>
              </td>
            </tr>
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
      <button type="submit" class="round-btns">Place Order</a>
    </div>
    <div class="col-md-5">
      <p class="deu-carthead">Cart Details</p>
      <table class="table table-borderless">
        <tr class="deu-cartsbg">
          <td>Price ({{$cart_count}} items)</td>
          <td class="text-right"><i class="fa fa-inr" aria-hidden="true"></i>{{number_format((float)$subtotal, 2, '.', '');}}</td>
        </tr>
        <tr class="deu-cartsbgs">
          <td>Shipping and handing</td>
          <td class="text-right"><i class="fa fa-inr" aria-hidden="true"></i> 00.00</td>
        </tr>
        @if($coupon_discount > 0)
        <tr class="deu-cartsbgs" style="background-color:#f2fff3">
          <td>Coupon discount ({{explode(',',$coupon_code)[0]}})</td>
          <td class="text-right">- <i class="fa fa-inr" aria-hidden="true"></i>{{number_format((float)$coupon_discount, 2, '.', '');}}</td>
        </tr>
        @endif
        <tr class="deu-cartsbg">
          <td></td>
          <td class="text-right"><i class="fa fa-inr" aria-hidden="true"></i>{{number_format((float)$final, 2, '.', '');}}</td>
        </tr>
        <tr class="deu-cartsbgs1">
          <td>Total Amount</td>
          <td class="text-right"><i class="fa fa-inr" aria-hidden="true"></i>{{number_format((float)$final, 2, '.', '');}}</td>
        </tr>
      </table>
    </div>
  </div>
  </form>
</div>

@endsection

@section('script')
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
@endsection
