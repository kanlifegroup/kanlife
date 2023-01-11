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
		<h1 class="deu-meethead">My Orders</h1>
	</div>
</div>
@php 
  $from_item = ($purchases->currentpage()-1)*$purchases->perpage()+1;
  $to_item = $purchases->currentpage()*$purchases->perpage();
  if($to_item > $purchases->total())
  $to_item = $purchases->total()
@endphp
<div class="container-fluid mt-5 mb-3">
	<div class="row">
	<div class="col-md-12">
  <form action="#" class="display-flex">
  <p class="deu-carthead mb-5">Orders</p>
  <p class="deu-colrs deu-positions"><span>Show</span> 
  <span>
    <select class="deu-tens">
      <option>10</option>
      <option>01</option>
    </select>
  </span> 
  <span>Entries</span></p>
  </form>
  <div class="table-responsive deu-borders">
  <table class="table">
    <thead>
      <tr class="deu-tr">
        <th>SI No.</th>
        <th>Purchase Id</th>
        <th>Order Place Date</th>
        <th>Total Amount</th>
        <th>Payment</th>
        <th>Invoice</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
    @php $no = 0; @endphp
      @foreach($purchases as $product)
      
      <tr class="deu-td">
        <td>{{$no + $from_item}}</td>
        <td>#{{$product->purchase_token}}</td>
        <td>{{date('d-m-Y', strtotime($product->order_date))}}</td>
        <td>{{ $product->total }} Rs.</td>
        <td>{{ucfirst(str_replace("-"," ",$product->payment_type))}}</td>
        <td><a href="{{ url('/invoice') }}/{{ $product->purchase_token }}"><span class="view-under">View</span></a></td>
        <td><a href="my-purchase-details/{{ $product->purchase_token }}"><span class="view-under">View Details</span></a></td>
        @php $no++; @endphp
      @endforeach  
      </tr>
    </tbody>
  </table>
  </div>
	</div>
	</div>
</div>
<div class="container text-center">
<div class="pagination_rounded mt-3 mb-5">
<!-- <ul>
    <li><a href="#">1</a>
    </li>
    <li class="hidden-xs"><a href="#">2</a>
    </li>
    <li class="hidden-xs"><a href="#">3</a>
    </li>
    <li class="hidden-xs"><a href="#">4</a>
    </li>
    <li class="hidden-xs"><a href="#">5</a>
    </li>
    <li class="visible-xs"><a href="#">...</a>
    </li>
    <li><a href="#" class="next"> Next</a>
    </li>
</ul> -->
    <ul>
      @if($purchases->currentPage()!=1)
      <li>
        <a href="{{$purchases->path().'?page='.($purchases->currentPage()-1)}}" class="prev"> Previous</a>
      </li>
      @endif
      @for($i=1; $i <= $purchases->lastPage(); $i++)
      <li>
        <a @if($i == $purchases->currentPage()) class="active" @endif href="{{$purchases->path().'?page='.$i}}">{{$i}}</a>
      </li>
      @endfor
      @if($purchases->currentPage()!=$purchases->lastPage())
      <li>
        <a href="{{$purchases->path().'?page='.($purchases->currentPage()+1)}}" class="next"> Next</a>
      </li>
      @endif
    </ul>
</div>
</div>

@endsection

@section('script')
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
@endsection
