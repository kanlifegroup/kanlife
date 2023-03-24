@extends('frontend.layouts.app')

@section('title')
  Order confirmation
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
		<h1 class="deu-meethead">Confirm Order</h1>
	</div>
</div>

<main role="main">
  <div class="container page-white-box mt-3">
  <div class="row">
    <div class="col-4 d-none d-md-block">
    </div>
    <div class="col-12 col-md-4" style="text-align:center;" aos="zoom-in">
      <p class="deu-carthead">Order Total</p>
      <table class="table table-borderless">
        <tr class="deu-cartsbgs1">
          <td>Total Amount</td>
          <td class="text-right"><i class="fa fa-inr" aria-hidden="true"></i>{{number_format((float)$total_price, 2, '.', '');}}</td>
        </tr>
      </table>
    </div>
  </div>
      <div class="row">
        <div class="col-md-12 mt-1 mb-1 pt-1 pb-1" align="center" aos="fade-left">
          <div class="mt-4 mb-4">
            <div class="d-flex justify-content-center">
              @if($payment_method=="cash-on-delivery")
                <form method="POST" action="{{ route('confirm-cod') }}" accept-charset="UTF-8" class="form-horizontal" role="form">
                 {{ csrf_field() }}
                    <input type="hidden" name="purchase_token" value="{{ $purchase_token }}">
                    <button class="deu-prceebtn mb-5 ml-5" type="submit">Confirm Order</button>
                </form>
              @endif
              @if($payment_method=="paypal")
                @php $encrypted = $encrypter->encrypt($purchase_token); @endphp
                @if($allsettings->paypal_type == 'express')
                <br/><a href="{{ route('payment') }}" class="btn button-color">{{ Helper::translation(2866,$translate,'') }}</a>
                @else
                <form action="{{ route('confirm-paypal') }}" class="setting_form" id="contact_form" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="hidden" name="paypal_url" value="{{ $paypal_url }}">
                <input type="hidden" name="paypal_email" value="{{ $paypal_email }}">
                <input type="hidden" name="product_names" value="{{ $product_names }}">
                <input type="hidden" name="purchase_token" value="{{ $purchase_token }}">
                <input type="hidden" name="total_price" value="{{ base64_encode($total_price) }}">
                <input type="hidden" name="site_currency" value="{{ $site_currency }}">
                <input type='hidden' name='cancel' value='{{ $website_url }}/cancel'>
                <input type='hidden' name='return' value='{{ $website_url }}/success/{{ base64_encode($purchase_token) }}'>
                <input type="submit" name="submit" value="Confirm Order" class="deu-prceebtn mb-5">
                </form>
                @endif
	            @endif
            </div>
          </div>
        </div>
      </div>
  </div>
</main>

@endsection

@section('script')
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
@endsection
