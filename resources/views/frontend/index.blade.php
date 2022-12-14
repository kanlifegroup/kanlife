@extends('frontend.layouts.app')

@section('title')
  Home
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
        <img class="img-fluid deu-slideheight" src="{{ asset('public/image/slider.png') }}" alt="">
        <div class="carousel-caption deu-slidepad text-left">
          <div class="col-md-6">
            <h1 class="pb-2 deu-slidehead">Kanlife Group </h1>
            <div class="row">
              <div class="col-md-4">
                <img class="img-fluid deu-healthimg" src="{{ asset('public/image/s1.png') }}">
                <p class="deu-health">Health</p>
              </div>
              <div class="col-md-4">
                <img class="img-fluid deu-healthimg" src="{{ asset('public/image/s2.png') }}">
                <p class="deu-health">Medical</p>
              </div>
              <div class="col-md-4">
                <img class="img-fluid deu-healthimg" src="{{ asset('public/image/s3.png') }}">
                <p class="deu-health">Wellness</p>
              </div>
            </div>
          </div>
        </div> 
      </div>
      <div class="carousel-item">
        <img class="img-fluid deu-slideheight" src="{{ asset('public/image/slider.png') }}" alt="">  
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

<div class="container mt-5 mb-5">
  <div class="row">
    <div class="col-lg-4 col-md-4 col-sm-6">
      <div class="inforide">
        <div class="row">
          <div class="col-lg-7 col-md-7 fontsty">
            <h4 class="deu-buytxt">Buy Medical Equipment’s.</h4>
            <button class="deu-buybtn">Buy Now</button>
          </div>
          <div class="col-lg-5 col-md-5 rideone">
            <img class="img-fluid deu-buyheight" src="{{ asset('public/image/buy1.png') }}">
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-6">
      <div class="inforide1">
        <div class="row">
          <div class="col-lg-7 col-md-7 fontsty">
            <h4 class="deu-buytxt">Rent Medical Equipment’s.</h4>
            <button class="deu-buybtn">Rent Now</button>
          </div>
          <div class="col-lg-5 col-md-5 rideone">
            <img class="img-fluid deu-buyheight" src="{{ asset('public/image/buy2.png') }}">
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-6">
      <div class="inforide2">
        <div class="row">
          <div class="col-lg-7 col-md-7 fontsty">
            <h4 class="deu-buytxt">Consult A Dr.</h4><br>
            <button class="deu-buybtn">Consult Now</button>
          </div>
          <div class="col-lg-5 col-md-5 rideone">
            <img class="img-fluid deu-buyheight" src="{{ asset('public/image/buy3.png') }}">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- About Us -->
<div class="us-section">
  <div class="container">
    <h3 class="text-center mb-5 deu-bloghead">About Us</h3>
    <div class="row">
      <div class="col-md-5 col-sm-6">
        <div class="about-img">
          <img class="img-fluid mt-5 deu-marg" src="{{ asset('public/image/us.png') }}" alt="">
        </div>
      </div>	
      <div class="col-md-7 col-sm-6">
        <div class="about-title clearfix">
          <h1>Global medical and health care delivered locally</h1>
          <p class="mt-3 mb-3">Kanlife Group was conceptualized and founded in 2009 in Singapore as Kanlife Asia Pte. Ltd. with a vision to provide a go-to-market platform
          to medical technology and healthcare companies from across the globe that are looking to establish a presence or strengthen their distribution foothold in Asia.</p>
          <p class="mt-3 mb-3">Over the years Kanlife grew from a single shareholder company based out of Singapore to a multi-national group with shareholder limited companies at strategic global business locations like India and the UK.</p>
          <button class="about-more">Know More</button>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="about-section">
  <div class="container">
    <div class="row deu-knowborder">
      <div class="col-md-7 col-sm-6">
        <div class="about-title clearfix">
          <h1>Enabling efficient product distribution</h1>
          <p class="mt-3 mb-3">Over the years Kanlife has become the partner of choice for medical equipment manufacturers looking to introduce,
              establish and grow their business and channel partner network in India and South East Asia.</p>
          <button class="about-more">Know More</button>
        </div>
      </div>
      <div class="col-md-5 col-sm-6">
        <div class="about-img">
          <img class="img-fluid" src="{{ asset('public/image/video.png') }}" alt="">
        </div>
      </div>	
    </div>
  </div>
</div>

<!-- CEO’s Desk -->
<div class="us-section">
  <div class="container">
  <h3 class="text-center mb-5 deu-bloghead">CEO’s Desk</h3>
  <div class="row deu-deskbg">
    <div class="col-md-4 col-sm-6">
      <div class="about-img">
        <img class="img-fluid deu-marg" src="{{ asset('public/image/ceo.png') }}" alt="">
      </div>
    </div>	
    <div class="col-md-8 col-sm-6">
      <div class="about-title clearfix">
        <h1>Shri, Ramesh Verma, IAS,</h1>
        <h6 class="deu-chief">Chief Electoral Officer, Goa</h6><hr>
        <h6 class="mt-4 deu-ceos">&nbsp;&nbsp;&nbsp;&nbsp; lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem </h6>
        <h6 class="mt-4 deu-ceos">&nbsp;&nbsp;&nbsp;&nbsp; lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem  lorem lorem 
            lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem  lorem lorem lorem lorem  lorem </h6>
        <h6 class="mt-4 deu-ceos">&nbsp;&nbsp;&nbsp;&nbsp; lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem 
            lorem lorem lorem lorem  lorem lorem lorem lorem  lorem </h6>
        <h6 class="mt-4 deu-ceos">&nbsp;&nbsp;&nbsp;&nbsp; lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem  lorem </h6>
      </div>
    </div>
  </div>
  </div>
</div>

<!-- Our Team -->
<section>
  <div class="container">
    <h3 class="text-center mt-5 mb-5 deu-bloghead">Our Team</h3>
    <div class="row">
      <div class="col-md-12">
        <div class="container">
          <ul class="row portfolio lightbox list-unstyled mb-0 shuffle boxed-portfolio" id="grid" >
            <!-- project -->
            <li class="col-md-6 col-lg-4 project shuffle-item filtered" >
              <div class="card mb-0">
                <div class="project m-0">
                  <figure class="portfolio-item">
                    <div class="hovereffect">
                      <img class="img-responsive" src="{{ asset('public/image/team.png') }}" alt="">
                    </div>
                  </figure>
                </div>
                <div class="card-body text-center">
                  <a href="#" class="card-title title-link mt-5">Dr. Jessica Tailor</a>
                  <p class="card-txt mt-2">Dental Surgeon</p>
                  <p class="card-text mt-3 mb-4">
                    <i class="fa fa-facebook-official larger deu-teamfa" aria-hidden="true"></i>
                    <i class="fa fa-twitter deu-teamfa" aria-hidden="true"></i>
                    <i class="fa fa-instagram deu-teamfa" aria-hidden="true"></i>
                    <i class="fa fa-linkedin-square deu-teamfa" aria-hidden="true"></i>
                  </p>
                </div>
              </div>
            </li>
            <li class="col-md-6 col-lg-4 project shuffle-item filtered" >
              <div class="card mb-0">
                <div class="project m-0">
                  <figure class="portfolio-item">
                    <div class="hovereffect">
                      <img class="img-responsive" src="{{ asset('public/image/team.png') }}" alt="">
                    </div>
                  </figure>
                </div>
                <div class="card-body text-center">
                  <a href="#" class="card-title title-link mt-5">Dr. Jessica Tailor</a>
                  <p class="card-txt mt-2">Dental Surgeon</p>
                  <p class="card-text mt-3 mb-4">
                    <i class="fa fa-facebook-official larger deu-teamfa" aria-hidden="true"></i>
                    <i class="fa fa-twitter deu-teamfa" aria-hidden="true"></i>
                    <i class="fa fa-instagram deu-teamfa" aria-hidden="true"></i>
                    <i class="fa fa-linkedin-square deu-teamfa" aria-hidden="true"></i>
                  </p>
                </div>
              </div>
            </li>
            <li class="col-md-6 col-lg-4 project shuffle-item filtered" >
              <div class="card mb-0">
                <div class="project m-0">
                  <figure class="portfolio-item">
                    <div class="hovereffect">
                      <img class="img-responsive" src="{{ asset('public/image/team.png') }}" alt="">
                    </div>
                  </figure>
                </div>
                <div class="card-body text-center">
                  <a href="#" class="card-title title-link mt-5">Dr. Jessica Tailor</a>
                  <p class="card-txt mt-2">Dental Surgeon</p>
                  <p class="card-text mt-3 mb-4">
                    <i class="fa fa-facebook-official larger deu-teamfa" aria-hidden="true"></i>
                    <i class="fa fa-twitter deu-teamfa" aria-hidden="true"></i>
                    <i class="fa fa-instagram deu-teamfa" aria-hidden="true"></i>
                    <i class="fa fa-linkedin-square deu-teamfa" aria-hidden="true"></i>
                  </p>
                </div>
              </div>
            </li>
          </ul>
          <!-- / portfolio -->
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Rapidly Expanding Network -->
<section>
  <div class="container">
    <h3 class="text-center mt-5 mb-5 deu-bloghead">Rapidly Expanding Network</h3>
  </div>
  <div class="container-fluid bg-overlay">
    <div class="container">
      <div class="row text-center deu-rapidbg">
        <div class="flex-container">
          <div>
            <p class="deu-dealers">Dealers Network</p>
            <p class="deu-dealershead">150+</p>
            <p class="deu-dealerstxt">Dealres</p>
          </div>
          <div>
            <p class="deu-dealers">Reach-India</p>
            <p class="deu-dealershead">50+</p>
            <p class="deu-dealerstxt">Cities</p>
          </div>
          <div>
            <p class="deu-dealers">Reach-Global</p>
            <p class="deu-dealershead">20+</p>
            <p class="deu-dealerstxt">Countries</p>
          </div>
          <div>
            <p class="deu-dealers">Offices</p>
            <p class="deu-dealershead">6</p>
          </div>
          <div>
            <p class="deu-dealers">Warehouses</p>
            <p class="deu-dealershead">3</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Our Blog -->
<section class="deu-ourblg">
  <div class="container">
    <h3 class="text-center mt-5 mb-5 deu-bloghead">Our Blogs</h3>
    <div class="row">
      <div class="col-md-12">
        <div id="myCarousel" class="carousel slide mb-5" data-ride="carousel" data-interval="0">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="row">
                <div class="col-sm-4">
                  <div class="post-slide10">
                    <img class="pic-1" src="{{ asset('public/image/blog1.png') }}">
                    <p class="deu-dec">December 2020</p>
                    <h3 class="post-title">
                      <a href="#">Kanlife Partners with Echosens</a>
                    </h3>
                    <p class="post-description">
                    Kanlife partners with Echosens - France, to import and distribute their best-in-class liver diagnostics equipment
                    </p>
                    <button class="read-more">read more</button>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="post-slide10">
                    <img class="pic-1" src="{{ asset('public/image/blog1.png') }}">
                    <p class="deu-dec">December 2020</p>
                    <h3 class="post-title">
                      <a href="#">Kanlife Partners with Echosens</a>
                    </h3>
                    <p class="post-description">
                    Kanlife partners with Echosens - France, to import and distribute their best-in-class liver diagnostics equipment
                    </p>
                    <button class="read-more">read more</button>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="post-slide10">
                    <img class="pic-1" src="{{ asset('public/image/blog1.png') }}">
                    <p class="deu-dec">December 2020</p>
                    <h3 class="post-title">
                      <a href="#">Kanlife Partners with Echosens</a>
                    </h3>
                    <p class="post-description">
                    Kanlife partners with Echosens - France, to import and distribute their best-in-class liver diagnostics equipment
                    </p>
                    <button class="read-more">read more</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row">
                <div class="col-sm-4">
                  <div class="post-slide10">
                    <img class="pic-1" src="{{ asset('public/image/blog1.png') }}">
                    <p class="deu-dec">December 2020</p>
                    <h3 class="post-title">
                      <a href="#">Kanlife Partners with Echosens</a>
                    </h3>
                    <p class="post-description">
                    Kanlife partners with Echosens - France, to import and distribute their best-in-class liver diagnostics equipment
                    </p>
                    <button class="read-more">read more</button>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="post-slide10">
                    <img class="pic-1" src="{{ asset('public/image/blog1.png') }}">
                    <p class="deu-dec">December 2020</p>
                    <h3 class="post-title">
                      <a href="#">Kanlife Partners with Echosens</a>
                    </h3>
                    <p class="post-description">
                    Kanlife partners with Echosens - France, to import and distribute their best-in-class liver diagnostics equipment
                    </p>
                    <button class="read-more">read more</button>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="post-slide10">
                    <img class="pic-1" src="{{ asset('public/image/blog1.png') }}">
                    <p class="deu-dec">December 2020</p>
                    <h3 class="post-title">
                      <a href="#">Kanlife Partners with Echosens</a>
                    </h3>
                    <p class="post-description">
                    Kanlife partners with Echosens - France, to import and distribute their best-in-class liver diagnostics equipment
                    </p>
                    <button class="read-more">read more</button>
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
</section>

<!-- Testimonials -->
<div class="container mb-5">
  <p class="text-center deu-bandhead mt-5">Testimonials</p>
  <div class="owl-carousel owl-theme mt-5">
    <div class="owl-item">
      <div class="card">
        <div class="row col-md-12">
          <div class="col-md-4">
            <img class="img-fluid" src="{{ asset('public/image/testimonial.png') }}" alt="">
          </div>
          <div class="col-md-8">
            <p class="deu-john">John Doe</p>
            <p class="deu-entro">Entrepreneur</p>
          </div>
        </div>
        <div class="testimonial mt-4 mb-2">
        Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Ipsum Ipsum
        </div>
      </div>
    </div>
    <div class="owl-item">
      <div class="card">
        <div class="row col-md-12">
          <div class="col-md-4">
            <img class="img-fluid" src="{{ asset('public/image/testimonial.png') }}" alt="">
          </div>
          <div class="col-md-8">
            <p class="deu-john">John Doe</p>
            <p class="deu-entro">Entrepreneur</p>
          </div>
        </div>
        <div class="testimonial mt-4 mb-2">
        Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Ipsum Ipsum
        </div>
      </div>
    </div>
    <div class="owl-item">
      <div class="card">
        <div class="row col-md-12">
          <div class="col-md-4">
            <img class="img-fluid" src="{{ asset('public/image/testimonial.png') }}" alt="">
          </div>
          <div class="col-md-8">
            <p class="deu-john">John Doe</p>
            <p class="deu-entro">Entrepreneur</p>
          </div>
        </div>
        <div class="testimonial mt-4 mb-2">
        Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Ipsum Ipsum
        </div>
      </div>
    </div>
    <div class="owl-item">
      <div class="card">
        <div class="row col-md-12">
          <div class="col-md-4">
            <img class="img-fluid" src="{{ asset('public/image/testimonial.png') }}" alt="">
          </div>
          <div class="col-md-8">
            <p class="deu-john">John Doe</p>
            <p class="deu-entro">Entrepreneur</p>
          </div>
        </div>
        <div class="testimonial mt-4 mb-2">
        Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Ipsum Ipsum
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Our Brands -->
<section class="deu-bandbg">
  <div class="container">
    <p class="text-center deu-bandhead">Our Brands</p>
    <p class="text-center deu-bandtxt">World class products from the best Global brands</p>
  </div>
  <div class="container deu-bandlogopad">
    <div class="row col-md-12 mt-5">
      <div class="col-md-4 text-center">
        <img class="img-fluid deu-bandlogowid deu-bandlogomarg" src="{{ asset('public/image/our1.png') }}">
      </div>
      <div class="col-md-4 text-center">
        <img class="img-fluid deu-bandlogowid deu-bandlogomarg" src="{{ asset('public/image/our2.png') }}">
      </div>
      <div class="col-md-4 text-center">
        <img class="img-fluid deu-bandlogowid" src="{{ asset('public/image/our3.png') }}">
      </div>
    </div>
    <div class="col-md-12 mt-5 mb-5">
      <div class="row offset-2 col-8">
        <div class="col-md-6 text-center">
          <img class="img-fluid deu-bandlogowid" src="{{ asset('public/image/our4.png') }}">
        </div>
        <div class="col-md-6 text-center">
          <img class="img-fluid deu-bandlogowid deu-bandlogomarg" src="{{ asset('public/image/our5.png') }}">
        </div>
      </div>
    </div>
  </div>
</section>

<!-- The Modal login -->
<div class="modal fade logS1" id="myModal">
  <div class="modal-dialog modal-xl">
    <div class="modal-content" style="margin-top: 9%;">
      <div class="modal-header">
        <h4 class="modal-title"></h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <p class="deu-loginhead">Login</p>
        <p class="deu-loginhead">To Your Account</p>
        <p class="deu-logintxt">Please enter your email address and password</p>
        <form class="form-horizontal" action="{{ route('login') }}" method="POST" id="login_form">
          @csrf
          <div class="form-group row justify-content-center px-3">
            <div class="col-9 px-0">
              <input type="text" name="email"  value="{{ old('email') }}" placeholder="Email*" class="@error('error') is-invalid @enderror form-control border-info placeicon deu-logininput">
              @error('error')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
          </div>
          <div class="form-group row justify-content-center px-3">
            <div class="col-9 px-0">
              <input type="password" name="password" placeholder="Password*" class="form-control border-info placeicon deu-logininput">
            </div>
          </div>
          <div class="form-group row justify-content-center px-3">
            <div class="col-9">
              <div class="row">
                <div class="col-6 px-0">
                  <span><a href="#" class="deu-loginforget logS12" data-toggle="modal" data-target="#myModal2"><b class="deu-underline">Forgot Password?</b></a></span>
                </div>
                <div class="col-6 px-0 text-right">
                  <span><a href="#" class="deu-loginforget logS" data-toggle="modal" data-target="#myModal1"><b class="deu-underline">Don’t have an account?</b></a></span>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group row justify-content-center mt-4 text-center">       
            <div class="col-3 px-3">
              <button type="submit" class="about-more">Login</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- The Modal Register -->
<div class="modal fade regiS" id="myModal1">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title"></h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <p class="deu-loginhead">Register <br> Your Account</p>
        <p class="deu-logintxt">Please fill the following fields with appropriate information to register form</p>
        <form class="form-horizontal" method="POST" action="{{ route('register') }}" id="register_form">
          @csrf
          <input type="hidden" name="user_type" value="customer">
          <div class="form-group row justify-content-center px-3">
            <div class="col-9 px-0">
              <input type="text" name="name" value="{{ old('name') }}" placeholder="Enter your name" class="@error('name') is-invalid @enderror form-control border-info placeicon deu-logininput" autocomplete="name" autofocus>
              @error('name')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
          </div>
          <div class="form-group row justify-content-center px-3">
            <div class="col-9 px-0">
              <input type="email" name="email" value="{{ old('email') }}" placeholder="Enter Email Address" class="@error('email') is-invalid @enderror form-control border-info placeicon deu-logininput" >
              @error('email')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
          </div>
          <div class="form-group row justify-content-center px-3">
            <div class="col-9 px-0">
              <input type="number" name="user_phone" value="{{ old('user_phone') }}" placeholder="+91 | Contact Number" class="@error('user_phone') is-invalid @enderror form-control border-info placeicon deu-logininput" >
              @error('user_phone')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
          </div>
          <div class="form-group row justify-content-center px-3">
            <div class="col-9 px-0">
              <textarea name="user_address" class="@error('user_address') is-invalid @enderror form-control border-info placeicon deu-logininput" placeholder="Enter Address" rows="3" id="comment" >{{ old('user_address') }}</textarea>
              @error('user_address')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
          </div>
          <div class="form-group row justify-content-center px-3">
            <div class="col-9 px-0">
              <input type="number" name="user_pincode" value="{{ old('user_pincode') }}" placeholder="Enter Pincode" class=" @error('user_pincode') is-invalid @enderror form-control border-info placeicon deu-logininput" >
              @error('user_pincode')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
          </div>
          <div class="form-group row justify-content-center px-3">
            <div class="col-9 px-0">
              <input type="password" name="password" placeholder="Enter Password" class="@error('password') is-invalid @enderror form-control border-info placeicon deu-logininput" >
              @error('password')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
          </div>
          <div class="form-group row justify-content-center px-3">
            <div class="col-9 px-0">
              <input type="password" name="password_confirmation" placeholder="Enter Confirm Password" class="@error('password_confirmation') is-invalid @enderror form-control border-info placeicon deu-logininput" >
              @error('password_confirmation')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
          </div>
          <div class="form-group row justify-content-center px-3">
            <div class="col-9">
              <div class="row">
                <div class="col-12 px-0 text-right">
                  <span><a href="#" class="deu-loginforget"><b class="deu-underline">Already have an Account?</b></a></span>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group row justify-content-center mt-3 text-center">       
            <div class="col-3 px-3">
              <button type="submit" class="about-more">Register</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- The Modal forget -->
<div class="modal fade forgeT" id="myModal2">
  <div class="modal-dialog modal-xl">
    <div class="modal-content" style="margin-top: 13%;">
      <div class="modal-header">
        <h4 class="modal-title"></h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <p class="deu-loginhead">Forgot Password</p>
        <p class="deu-logintxt">Please Enter Email for forgot password</p>
        <form class="form-horizontal mt-5">
          <div class="form-group row justify-content-center px-3">
            <div class="col-9 px-0 mt-3">
              <input type="text" placeholder="Enter Email Address" class="form-control border-info placeicon deu-logininput">
            </div>
          </div>
          <div class="form-group row justify-content-center mt-5 text-center">       
            <div class="col-3 px-3">
              <button class="about-more">Reset Password</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection

@section('script')
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

    $(document).ready(function() {
      $("#news-slider10").owlCarousel({
        items : 3,
        itemsDesktop:[1199,3],
        itemsDesktopSmall:[980,2],
        itemsMobile : [600,1],
        navigation:true,
        navigationText:["",""],
        pagination:true,
        autoPlay:true,
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

    $(document).ready(function() {
      $(".logS").click(function() {
        $(".regiS").show();
      });
      $(".logS").click(function() {
        $(".logS1").hide();
      });
      $(".logS12").click(function() {
        $(".forgeT").show();
      });
      $(".logS12").click(function() {
        $(".logS1").hide();
      });
        
      @if(session('signup') && session('signup') == 'signup')
      $('#myModal1').modal('show');
      @endif
      @if(session('signin') && session('signin') == 'signin')
      $('#myModal').modal('show');
      @endif
      <?php
        session()->forget('signup');
        session()->forget('signin');
      ?>
    });
  </script>
@endsection