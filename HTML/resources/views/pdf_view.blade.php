<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <title>{{ $purchase_token }} - {{ $allsettings->site_title }}</title>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> 
 <meta name="viewport" content="width=device-width, initial-scale=1"> 
 <link rel="stylesheet" type="text/css" href="{{ URL::to('resources/views/template/css/bootstrap.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::to('resources/views/template/css/stylesheet.css') }}">
</head>
<body>
<!-- Container -->
<div class="container-fluid invoice-container" style="background:#FFFFFF;">
  <!-- Header -->
  <header>
  <div class="row align-items-center mb-5">
    <div class="col-sm-7 text-center text-sm-left mb-sm-0">
      @if($allsettings->site_logo != '')
      <a href="{{ URL::to('/') }}" target="_blank">
      <img width="200" src="{{ url('/') }}/public/storage/settings/{{ $allsettings->site_logo }}" alt="{{ $allsettings->site_title }}"/>
      </a>
      @endif
    </div>
    <div class="col-sm-5 text-right" style="float:right;">
      <h4 class="text-7 mb-0">Invoice</h4>
    </div>
  </div>
  <hr>
  <div class="row align-items-center">
    <div class="col-sm-6 text-center text-sm-left"><strong>{{ Helper::translation(2091,$translate,'') }}:</strong> {{ date("d M Y", strtotime($payment_date)) }}</div>
    <div class="col-sm-6 text-right" style="float:right;"> <strong>Invoice No / {{ Helper::translation(2077,$translate,'') }}:</strong> #{{ $purchase_token }}</div>
  </div>
  <hr>
  <div class="row align-items-center mt-3">
  <div class="col-sm-6 text-center text-sm-left"> <strong>Paid To:</strong>
      <address>
      Kanlife India Pvt. Ltd.<br />
      No. 36/3, 2nd floor, 1st cross Pukhraj Layout,<br />
      Adugodi, Bangalore - 560030<br />
      GST No. : 29AAICK0887C1ZD<br />
      kanlifegroup@gmail.com<br />
      Phone : +91 805 093 1561 or 080 4224 2929
      </address>
    </div>
    <div class="col-sm-6 text-right" style="float:right;"> <strong>Invoiced To:</strong>
      <address>      
      {{ $buyer_name }}<br />
      {{ $buyer_address }}<br />
      {{ $buyer_city }}, {{ $buyer_state }}<br />
      {{ $buyer_country }} - {{ $buyer_zip }}<br/>
	    {{ $buyer_email }}
      </address>
    </div>
   </div> 
   <div class="row align-items-center mt-3">
   <table class="table">
  <thead class="grey bg-light-2 text-center">
    <tr>
      <th scope="col">{{ Helper::translation(1964,$translate,'') }}</th>
      <th scope="col">{{ Helper::translation(2076,$translate,'') }}</th>
      <th scope="col">{{ Helper::translation(1984,$translate,'') }}</th>
      {{--<th scope="col">{{ Helper::translation(2079,$translate,'') }}</th>--}}
      {{--<th scope="col">{{ Helper::translation(2112,$translate,'') }}</th>--}}
      <th scope="col">{{ Helper::translation(2078,$translate,'') }}</th>
      <th scope="col">GST</th>
      <th scope="col">Subtotal</th>
     </tr>
  </thead>
  <tbody class="text-center">
    @php 
    $no = 1; 
    $subtotal = 0;
    $coupon_code = ""; 
    $coupon_discount = 0; 
    $gst = 0;
    $new_price = 0;
    $shipping = 0;
    @endphp
    @foreach($product['view'] as $product)
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
      $gst += $price * $product->quantity * $product->product_gst / 100;
      $shipping += $product->product_local_shipping_fee;
      $total = $product->quantity * $product->price;
      $subtotal += $total;
    @endphp
    <tr class="mb-5 mt-2">
      <th scope="row">{{ $no }}</th>
      <td>{{ $product->ord_id }}
      </td>
      {{--<td>
      <a href="{{ url('/product') }}/{{ $product->product_slug }}">
      <br/>
      @if($product->product_image != '')
      <img src="{{ url('/') }}/public/storage/product/{{ $product->product_image }}"  class="img-thumb" alt="{{ $product->product_name }}"/>@else <img src="{{ url('/') }}/public/img/no-image.jpg"  class="img-thumb" alt="{{ $product->product_name }}"/>  
      @endif
      </a></td>
      <td>{{ $product->product_attribute_values }}</td> --}}
      <td><a href="{{ url('/product') }}/{{ $product->product_slug }}">{{ $product->product_name }}</a></td>
      <td>{{ $product->quantity }} X <span style="font-family: DejaVu Sans; sans-serif;">{{ $allsettings->site_currency_symbol }}</span> {{ $product->price }}</td>
      @php $gst_price = $price * $product->quantity * $product->product_gst / 100; @endphp
      @if($product->product_gst > 0)
      <td><span style="font-family: DejaVu Sans; sans-serif;">{{ $allsettings->site_currency_symbol }}</span>{{ $gst_price }} ({{$product->product_gst}}%)</td>
      @else
      <td>0.00</td>
      @endif
      <td>{{$price * $product->quantity}}</td>
    </tr>
    @php $no++; @endphp
    @endforeach 
    <tr>
      <td colspan="5" class="bg-light-2 text-right"><strong>{{ Helper::translation(2092,$translate,'') }}</strong></td>
      <td class="bg-light-2"><span style="font-family: DejaVu Sans; sans-serif;">{{ $allsettings->site_currency_symbol }}</span> {{ $subtotal }}</td>
    </tr>
    <tr>
      <td colspan="5" class="bg-light-2 text-right"><strong>{{ Helper::translation(2090,$translate,'') }}</strong></td>
      <td class="bg-light-2"><span style="font-family: DejaVu Sans; sans-serif;">{{ $allsettings->site_currency_symbol }}</span> {{ $purchase->shipping_price }}</td>
      </tr>
      <tr>
        <td colspan="5" class="bg-light-2 text-right"><strong>GST</strong></td>
        <td class="bg-light-2"><span style="font-family: DejaVu Sans; sans-serif;">{{ $allsettings->site_currency_symbol }}</span> @if($gst > 0) {{ $gst }} @else 0 @endif</td>
      </tr>
      {{--
    <tr>
      <td colspan="5" class="bg-light-2 text-right"><strong>{{ Helper::translation(1993,$translate,'') }}</strong></td>
      <td class="bg-light-2"><span style="font-family: DejaVu Sans; sans-serif;">{{ $allsettings->site_currency_symbol }}</span> {{ $purchase->processing_fee }}</td>
      </tr>
      --}}
      @if($coupon_code != "")
      @php 
        $coupon_discount = $subtotal - $new_price;
      @endphp
      <tr>
      <td colspan="5" class="bg-light-2 text-right"><strong>Coupon Discount</strong></td>
      <td class="bg-light-2"><span style="font-family: DejaVu Sans; sans-serif;">- {{ $allsettings->site_currency_symbol }}</span> {{ $coupon_discount }}</td>
      </tr>
      @endif
       <tr>
      <td colspan="5" class="bg-light-2 text-right"><strong>{{ Helper::translation(2093,$translate,'') }}</strong></td>
      <td class="bg-light-2"><span style="font-family: DejaVu Sans; sans-serif;">{{ $allsettings->site_currency_symbol }}</span> {{ $purchase->total }}</td>
      </tr>
  </tbody>
</table>
</div>
  <div class="">
  <div class="row align-items-center">
    <div class="col-sm-6 text-center text-sm-left"><strong>{{ Helper::translation(2080,$translate,'') }}:</strong> {{ $payment_type }}</div>
    <div class="col-sm-6 text-right" style="float:right;"> <strong>{{ Helper::translation(2089,$translate,'') }}:</strong> {{ $payment_token }}</div>
  </div>
  <div class="row align-items-center">
    <div class="col-sm-6 text-center text-sm-left"><strong>Transaction ID:</strong> {{ $payment_id }}</div>
  </div>
  </div>
  </header>
</div>
</body>
</html>