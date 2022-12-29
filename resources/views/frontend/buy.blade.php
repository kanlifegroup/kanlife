@extends('frontend.layouts.app')

@section('title')
  Buy
@endsection

@section('style')
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/7.3.1/swiper-bundle.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@500&display=swap" rel="stylesheet"> -->
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@500&family=Montserrat:wght@500&family=Nunito:wght@500;600;700;900&family=Roboto:wght@500&display=swap" rel="stylesheet">
@endsection

@section('content')


<div class="banner slider">
    <div id="demo" class="carousel slide" data-ride="carousel"  data-interval="false">
  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
  </ul>
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="img-fluid deu-slideheight" src="{{asset('public/image/slider.png')}}" alt="">
      <div class="carousel-caption deu-slidepad text-left">
        <div class="col-md-6">
            <h1 class="pb-2 deu-slidehead">Kanlife Group </h1>
            <div class="row">
                <div class="col-md-4">
                <img class="img-fluid deu-healthimg" src="{{asset('public/image/s1.png')}}">
                <p class="deu-health">Health</p>
                </div>
                <div class="col-md-4">
                <img class="img-fluid deu-healthimg" src="{{asset('public/image/s2.png')}}">
                <p class="deu-health">Medical</p>
                </div>
                <div class="col-md-4">
                <img class="img-fluid deu-healthimg" src="{{asset('public/image/s3.png')}}">
                <p class="deu-health">Wellness</p>
                </div>
            </div>
        </div>
      </div> 
    </div>
    <div class="carousel-item">
      <img class="img-fluid deu-slideheight" src="{{asset('public/image/slider.png')}}" alt="">  
    </div>
  </div>
  <!--<a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>-->
</div>
</div>



<div class="container">
	<div class="row">
		<div class="col-md-12 mx-auto">
    <h3 class="text-center deu-bloghead mb-4 mt-5">Top Categories</h3>
			<div id="myCarousel" class="carousel slide mb-5" data-ride="carousel" data-interval="0">
			<!-- <ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
			</ol>    -->
			<div class="carousel-inner">
				<div class="carousel-item active">
					<div class="row">
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="{{asset('public/image/c1.png')}}" class="img-fluid deu-slideimg" alt="">
								</div>
								<div class="deu-thumbss">
									<h4>Anaesthesia</h4>
								</div>						
							</div>
						</div>
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="{{asset('public/image/c2.png')}}" class="img-fluid deu-slideimg" alt="">
								</div>
								<div class="deu-thumbss">
									<h4>Defibrillator</h4>
								</div>						
							</div>
						</div>
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="{{asset('public/image/c3.png')}}" class="img-fluid deu-slideimg" alt="">
								</div>
								<div class="deu-thumbss">
									<h4>Dental</h4>
								</div>						
							</div>
						</div>
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="{{asset('public/image/c4.png')}}" class="img-fluid deu-slideimg" alt="">
								</div>
								<div class="deu-thumbss">
									<h4>Diathermy</h4>
								</div>						
							</div>
						</div>
					</div>
				</div>
				<div class="carousel-item">
        <div class="row">
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="{{asset('public/image/c1.png')}}" class="img-fluid deu-slideimg" alt="">
								</div>
								<div class="deu-thumbss">
									<h4>Anaesthesia</h4>
								</div>						
							</div>
						</div>
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="{{asset('public/image/c2.png')}}" class="img-fluid deu-slideimg" alt="">
								</div>
								<div class="deu-thumbss">
									<h4>Anaesthesia</h4>
								</div>						
							</div>
						</div>
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="{{asset('public/image/c3.png')}}" class="img-fluid deu-slideimg" alt="">
								</div>
								<div class="deu-thumbss">
									<h4>Anaesthesia</h4>
								</div>						
							</div>
						</div>
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="{{asset('public/image/c4.png')}}" class="img-fluid deu-slideimg" alt="">
								</div>
								<div class="deu-thumbss">
									<h4>Anaesthesia</h4>
								</div>						
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Carousel controls -->
			<a class="carousel-control-prev deus-prev" href="#myCarousel" data-slide="prev">
      <i class="fa fa-arrow-left" aria-hidden="true"></i>
			</a>
			<a class="carousel-control-next deus-next" href="#myCarousel" data-slide="next">
      <i class="fa fa-arrow-right" aria-hidden="true"></i>
			</a>
		</div>
		</div>
	</div>
</div>



<div class="us-section">
<div class="container">
<div class="row">
    <div class="col-md-12">
    <img class="img-fluid" src="{{asset('public/image/video.png')}}" style="width: 100%;">
    </div>	
</div>
</div>
</div>


<div class="container mb-5">
	<div class="row">
		<div class="col-md-12 mx-auto">
    <h3 class="text-center deu-bloghead mb-4 mt-5">Featured Products</h3>
			<div id="myCarousel1" class="carousel slide mb-5" data-ride="carousel" data-interval="0">
			<!-- <ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
			</ol>    -->
			<div class="carousel-inner">
				<div class="carousel-item active">
					<div class="row">
						<div class="col-sm-3">
              <div class="home-doctors  text-center doc-item">
              <div class="common-doctor animated fadeInUp clearfix ae-animation-fadeInUp deu-features">
              <p class="deu-new">New</p>
              <ul class="list-inline social-lists animate">
                <li><a href="#"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
              </ul>
                    <figure>
                        <img src="{{asset('public/image/f1.png')}}" class="img-fluid doc-img animate attachment-gallery-post-single wp-post-image" alt=""> 
                    </figure>
                        <div class="text-content">
                            <h5 class="deu-pro">Cardiskan</h5>
                            <h5 class="deu-protxt"><i class="fa fa-inr" aria-hidden="true"></i> 200
                              <small><s><i class="fa fa-inr" aria-hidden="true"></i> 300</s></small>
                          </h5>
                        </div>
                    </div>
                </div>
						</div>
						<div class="col-sm-3">
              <div class="home-doctors  text-center doc-item">
              <div class="common-doctor animated fadeInUp clearfix ae-animation-fadeInUp deu-features">
              <p class="deu-blue">-10%</p>
              <ul class="list-inline social-lists animate">
                <li><a href="#"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
              </ul>
                    <figure>
                        <img src="{{asset('public/image/f2.png')}}" class="img-fluid doc-img animate attachment-gallery-post-single wp-post-image" alt=""> 
                    </figure>
                        <div class="text-content">
                            <h5 class="deu-pro">Skansiesta</h5>
                            <h5 class="deu-protxt"><i class="fa fa-inr" aria-hidden="true"></i> 200
                              <small><s><i class="fa fa-inr" aria-hidden="true"></i> 300</s></small>
                          </h5>
                        </div>
                    </div>
                </div>
						</div>
						<div class="col-sm-3">
              <div class="home-doctors  text-center doc-item">
              <div class="common-doctor animated fadeInUp clearfix ae-animation-fadeInUp deu-features">
              <ul class="list-inline social-lists animate">
                <li><a href="#"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
              </ul>
                    <figure>
                        <img src="{{asset('public/image/f3.png')}}" class="img-fluid doc-img animate attachment-gallery-post-single wp-post-image" alt=""> 
                    </figure>
                        <div class="text-content">
                            <h5 class="deu-pro">Dental</h5>
                            <h5 class="deu-protxt"><i class="fa fa-inr" aria-hidden="true"></i> 200
                              <small><s><i class="fa fa-inr" aria-hidden="true"></i> 300</s></small>
                          </h5>
                        </div>
                    </div>
                </div>
						</div>
						<div class="col-sm-3">
              <div class="home-doctors  text-center doc-item">
              <div class="common-doctor animated fadeInUp clearfix ae-animation-fadeInUp deu-features">
              <ul class="list-inline social-lists animate">
                <li><a href="#"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
              </ul>
                    <figure>
                        <img src="{{asset('public/image/f4.png')}}" class="img-fluid doc-img animate attachment-gallery-post-single wp-post-image" alt=""> 
                    </figure>
                        <div class="text-content">
                            <h5 class="deu-pro">Diathermy</h5>
                            <h5 class="deu-protxt"><i class="fa fa-inr" aria-hidden="true"></i> 200
                              <small><s><i class="fa fa-inr" aria-hidden="true"></i> 300</s></small>
                          </h5>
                        </div>
                    </div>
                </div>
						</div>
					</div>
				</div>
				<div class="carousel-item">
        <div class="row">
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="{{asset('public/image/c1.png')}}" class="img-fluid deu-slideimg" alt="">
								</div>
								<div class="deu-thumbss">
									<h4>Anaesthesia</h4>
								</div>						
							</div>
						</div>
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="{{asset('public/image/c2.png')}}" class="img-fluid deu-slideimg" alt="">
								</div>
								<div class="deu-thumbss">
									<h4>Anaesthesia</h4>
								</div>						
							</div>
						</div>
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="{{asset('public/image/c3.png')}}" class="img-fluid deu-slideimg" alt="">
								</div>
								<div class="deu-thumbss">
									<h4>Anaesthesia</h4>
								</div>						
							</div>
						</div>
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="{{asset('public/image/c4.png')}}" class="img-fluid deu-slideimg" alt="">
								</div>
								<div class="deu-thumbss">
									<h4>Anaesthesia</h4>
								</div>						
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Carousel controls -->
			<a class="carousel-control-prev deus-prev" href="#myCarousel1" data-slide="prev">
      <i class="fa fa-arrow-left" aria-hidden="true"></i>
			</a>
			<a class="carousel-control-next deus-next" href="#myCarousel1" data-slide="next">
      <i class="fa fa-arrow-right" aria-hidden="true"></i>
			</a>
		</div>
		</div>
	</div>
</div>



<div class="container-fluid deu-seelbggray">
<div class="container">
<h3 class="text-center deu-bloghead mb-5">Best Selling Products</h3>
<div class="row mb-4">
    <div class="col-lg-4 col-md-4 col-sm-6">
    <div class="deu-sellbg">
        <div class="row">
        <div class="col-lg-5 col-md-5 rideone">
            <img class="img-fluid deu-sellwiD" src="{{asset('public/image/p1.png')}}">
        </div>
        <div class="col-lg-7 col-md-7 fontsty">
            <h4 class="deu-digitalhead">Digital Stethoscope</h4>
            <p class="deu-digitaltxt"><i class="fa fa-inr" aria-hidden="true"></i> 200 
            <span><s><small><i class="fa fa-inr" aria-hidden="true"></i> 300</small></s></span></p>
        </div>
        </div>
    </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-6">
    <div class="deu-sellbg">
        <div class="row">
        <div class="col-lg-5 col-md-5 rideone">
            <img class="img-fluid deu-sellwiD" src="{{asset('public/image/p2.png')}}">
        </div>
        <div class="col-lg-7 col-md-7 fontsty">
            <h4 class="deu-digitalhead">Thermometer Gun</h4>
            <p class="deu-digitaltxt"><i class="fa fa-inr" aria-hidden="true"></i> 200 
            <span><s><small><i class="fa fa-inr" aria-hidden="true"></i> 300</small></s></span></p>
        </div>
        </div>
    </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-6">
    <div class="deu-sellbg">
        <div class="row">
        <div class="col-lg-5 col-md-5 rideone">
            <img class="img-fluid deu-sellwiD" src="{{asset('public/image/p3.png')}}">
        </div>
        <div class="col-lg-7 col-md-7 fontsty">
            <h4 class="deu-digitalhead">Thermometer Gun</h4>
            <p class="deu-digitaltxt"><i class="fa fa-inr" aria-hidden="true"></i> 200 
            <span><s><small><i class="fa fa-inr" aria-hidden="true"></i> 300</small></s></span></p>
        </div>
        </div>
    </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-4 col-md-4 col-sm-6">
    <div class="deu-sellbg">
        <div class="row">
        <div class="col-lg-5 col-md-5 rideone">
            <img class="img-fluid deu-sellwiD" src="{{asset('public/image/p4.png')}}">
        </div>
        <div class="col-lg-7 col-md-7 fontsty">
            <h4 class="deu-digitalhead">Wheel Chair</h4>
            <p class="deu-digitaltxt"><i class="fa fa-inr" aria-hidden="true"></i> 200 
            <span><s><small><i class="fa fa-inr" aria-hidden="true"></i> 300</small></s></span></p>
        </div>
        </div>
    </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-6">
    <div class="deu-sellbg">
        <div class="row">
        <div class="col-lg-5 col-md-5 rideone">
            <img class="img-fluid deu-sellwiD" src="{{asset('public/image/p5.png')}}">
        </div>
        <div class="col-lg-7 col-md-7 fontsty">
            <h4 class="deu-digitalhead">Cardiskan</h4>
            <p class="deu-digitaltxt"><i class="fa fa-inr" aria-hidden="true"></i> 200 
            <span><s><small><i class="fa fa-inr" aria-hidden="true"></i> 300</small></s></span></p>
        </div>
        </div>
    </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-6">
    <div class="deu-sellbg">
        <div class="row">
        <div class="col-lg-5 col-md-5 rideone">
            <img class="img-fluid deu-sellwiD" src="{{asset('public/image/p6.png')}}">
        </div>
        <div class="col-lg-7 col-md-7 fontsty">
            <h4 class="deu-digitalhead">Skansiesta</h4>
            <p class="deu-digitaltxt"><i class="fa fa-inr" aria-hidden="true"></i> 200 
            <span><s><small><i class="fa fa-inr" aria-hidden="true"></i> 300</small></s></span></p>
        </div>
        </div>
    </div>
    </div>
</div>
<div class="text-center">
  <button class="about-more mb-3 mt-4">View More</button>
</div>
</div>
</div>

@endsection

@section('script')
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>


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


$(function() {
  $('#listURL').find('a').click(function() {
    $('#listURL').find('a').removeClass('active');
    $(this).addClass('active');
  });
});
</script>
@endsection