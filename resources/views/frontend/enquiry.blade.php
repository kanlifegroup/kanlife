@extends('frontend.layouts.app')

@section('title')
  Enquiries
@endsection

@section('style')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
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
		<h1 class="deu-meethead">My Enquiries</h1>
	</div>
</div>

<div class="container-fluid mt-5 mb-5">
    <div class="row">
        <div class="col-md-12">
            <p class="deu-carthead">Enquired Products</p>
            @if(count($shop['product']) > 0)
            <div class="col-md-12">
                <div class="row mt-4 g-5 px-5">
                  @foreach($shop['product'] as $product) 
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="home-doctors  text-center doc-item">
                            <div
                                class="common-doctor animated fadeInUp clearfix ae-animation-fadeInUp deu-features">
                                <div class="deu-xrayfigure">
                                    <a href="{{url('/product').'/'.$product->product_slug}}">
                                    @if($product->product_image != "")
                                    <img src="{{ url('/') }}/public/storage/product/{{ $product->product_image }}" 
                                        class="deu-widauto img-fluid doc-img animate attachment-gallery-post-single wp-post-image" alt=""> 
                                    @else
                                    <img src="{{ url('/') }}/public/img/no-image.jpg" class="deu-widauto img-fluid doc-img animate attachment-gallery-post-single wp-post-image" alt=""> 
                                    @endif
                                    </a>
                                </div>
                                <a href="{{url('/product').'/'.$product->product_slug}}">
                                <div class="deu-xraypad">
                                    <h5 class="deu-pro">{{$product->product_name}}</h5>
                                    @if($product->product_price != 0)
                                    <h5 class="deu-protxt"><i class="fa fa-inr" aria-hidden="true"></i> 
                                    @if($product->product_offer_price != 0)
                                    {{$product->product_offer_price}}
                                      <small><s><i class="fa fa-inr" aria-hidden="true"></i> {{$product->product_price}}</s></small>
                                      @else
                                    {{$product->product_price}}
                                    @endif
                                    @endif
                                </div>
                                </a>
                            </div>
                        </div>
                    </div>
                  @endforeach    
                </div>
            </div>
            @else
            No enquiry found for any product!!
            @endif
        </div>
    </div>
</div>

@endsection

@section('script')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
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
    </script>
@endsection
