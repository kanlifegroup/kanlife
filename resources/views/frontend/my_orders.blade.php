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
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@500&family=Montserrat:wght@500&family=Nunito:wght@500;600;700;900&family=Roboto:wght@500&display=swap"
        rel="stylesheet">
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
  @if (Request::get('success_code') == '200')
    <div class="alert alert-success error_code" role="alert">
      <span class="alert_icon lnr lnr-warning"></span>
        Order placed successfully.
    </div>
  @endif
	<div class="row">
	<div class="col-md-12">
  <form action="#" class="display-flex">
  <p class="deu-carthead mb-5">Orders</p>
  <p class="deu-colrs deu-positions"><span>Show</span> 
  <span>
    <select class="deu-tens" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
      <option @if($entries == 10) selected @endif value="{{url('/my-purchase?entries=10')}}">10</option>
      <option @if($entries == 20) selected @endif value="{{url('/my-purchase?entries=20')}}">20</option>
      <option @if($entries == 50) selected @endif value="{{url('/my-purchase?entries=50')}}">50</option>
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
        <th>Transaction Id</th>
        <th>Order Date</th>
        <th>Total Amount</th>
        <th>Payment</th>
        <th>Invoice</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
    @php $no = 0; @endphp
      @forelse($purchases as $product)    
      <tr class="deu-td"> <!-- aos="fade-up"> -->
        <td>{{$no + $from_item}}</td>
        <td>#{{$product->purchase_token}}</td>
        <td>{{$product->payment_id}}</td>
        <td>{{date('d-m-Y', strtotime($product->order_date))}}</td>
        <td>{{ $product->total }} Rs.</td>
        <td>{{ucfirst(str_replace("-"," ",$product->payment_type))}}</td>
        <td><a href="{{ url('/invoice') }}/{{ $product->purchase_token }}"><span class="view-under">View</span></a></td>
        <td><a href="my-purchase-details/{{ $product->purchase_token }}"><span class="view-under">View Details</span></a></td>
        @php $no++; @endphp
      </tr>
      @empty
      <tr class="deu-td">
        <td colspan="7" class="text-center">No Data Found!</td>
      </tr>
      @endforelse  
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
      @if($purchases->lastPage() > 1)
      @for($i=1; $i <= $purchases->lastPage(); $i++)
      <li>
        <a @if($i == $purchases->currentPage()) class="active" @endif href="{{$purchases->path().'?page='.$i}}">{{$i}}</a>
      </li>
      @endfor
      @endif
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
        crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>
    <script>
        $(document).ready(function () {
            var silder = $(".owl-carousel");
            silder.owlCarousel({
                autoplay: true,
                autoplayTimeout: 3000,
                autoplayHoverPause: false,
                items: 1,
                stagePadding: 20,
                center: true,
                nav: false,
                margin: 30,
                dots: true,
                loop: true,
                responsive: {
                    0: { items: 1 },
                    480: { items: 2 },
                    575: { items: 2 },
                    768: { items: 2 },
                    991: { items: 3 },
                    1200: { items: 3 }
                }
            });
        });


        $(function () {
            $('#listURL').find('a').click(function () {
                $('#listURL').find('a').removeClass('active');
                $(this).addClass('active');
            });
        });
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/js/swiper.min.js"></script>
    <script>
        $(document).ready(function () {
            // Swiper: Slider
            new Swiper('.swiper-container', {
                loop: true,
                nextButton: '.swiper-button-next',
                prevButton: '.swiper-button-prev',
                slidesPerView: 4,
                paginationClickable: true,
                spaceBetween: 40,
                breakpoints: {
                    1920: {
                        slidesPerView: 4,
                        spaceBetween: 30
                    },
                    1028: {
                        slidesPerView: 2,
                        spaceBetween: 30
                    },
                    480: {
                        slidesPerView: 1,
                        spaceBetween: 0
                    }
                }
            });
        });
        
      setTimeout(function() {
        $('.error_code').fadeOut('slow');
      }, 7000);
    </script>
@endsection
