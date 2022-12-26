@extends('frontend.layouts.app')

@section('title')
  Home
@endsection

@section('style')
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/7.3.1/swiper-bundle.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@500&family=Montserrat:wght@500&family=Nunito:wght@500;600;700;900&family=Roboto:wght@500&display=swap" rel="stylesheet">
@endsection

@section('content')

<div class="container-fluid bgteam-overlay">
	<div class="text-left">
		<h1 class="deu-meethead">Meet Our Team</h1>
	</div>
</div>

<div class="container">
  <h3 class="text-center mt-5 mb-5 deu-bloghead">Management Team</h3>
</div>

<div class="container deu-teamgray">
  <div class="row">
    <div class="col-lg-4">
      <div class="card deu-teamcards">
        <div class="card-body text-center">
          <img src="{{ asset('public/image/m1.png') }}" class="img-fluid" width="250" height="200"> 
          <h5 class="card-title mt-3 m-3 mb-1 deu-teamname">Meena Ganesh</h5>
          <p class="fs-2 mb-3 mt-3 font-weight-bold deu-teamtxt">Co-founder and chairperson</p>
          <button class="deu-aboutbtn1 mb-3">Know More</button>
          <ul class="list-inline">
            <li class="list-inline-item"><a><i class="fa fa-facebook facebook deu-teamsocial"></i></a></li>
            <li class="list-inline-item"><a><i class="fa fa-twitter twitter deu-teamsocial"></i></a></li>
            <li class="list-inline-item"><a><i class="fa fa-linkedin linkedin deu-teamsocial"></i></a></li>
            <li class="list-inline-item"><a><i class="fa fa-youtube-play deu-teamsocial" aria-hidden="true"></i></a></li>
          </ul> 
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="card deu-teamcards">
        <div class="card-body text-center">
          <img src="{{ asset('public/image/m2.png') }}" class="img-fluid" width="250" height="200"> 
          <h5 class="card-title mt-3 m-3 mb-1 deu-teamname">Ganesh Krishnan</h5>
          <p class="fs-2 mb-3 mt-3 font-weight-bold deu-teamtxt">Co-founder and Director</p>
          <button class="deu-aboutbtn1 mb-3">Know More</button>
          <ul class="list-inline">
            <li class="list-inline-item"><a><i class="fa fa-facebook facebook deu-teamsocial"></i></a></li>
            <li class="list-inline-item"><a><i class="fa fa-twitter twitter deu-teamsocial"></i></a></li>
            <li class="list-inline-item"><a><i class="fa fa-linkedin linkedin deu-teamsocial"></i></a></li>
            <li class="list-inline-item"><a><i class="fa fa-youtube-play deu-teamsocial" aria-hidden="true"></i></a></li>
          </ul> 
        </div>
      </div>
    </div>
    <div class="col-lg-4">
        <div class="card deu-teamcards">
          <div class="card-body text-center">
            <img src="{{ asset('public/image/m3.png') }}" class="img-fluid" width="250" height="200"> 
            <h5 class="card-title mt-3 m-3 mb-1 deu-teamname">Vaibhav Tewari</h5>
            <p class="fs-2 mb-3 mt-3 font-weight-bold deu-teamtxt">Co-founder and CEO</p>
            <button class="deu-aboutbtn1 mb-3">Know More</button>
            <ul class="list-inline">
              <li class="list-inline-item"><a><i class="fa fa-facebook facebook deu-teamsocial"></i></a></li>
              <li class="list-inline-item"><a><i class="fa fa-twitter twitter deu-teamsocial"></i></a></li>
              <li class="list-inline-item"><a><i class="fa fa-linkedin linkedin deu-teamsocial"></i></a></li>
              <li class="list-inline-item"><a><i class="fa fa-youtube-play deu-teamsocial" aria-hidden="true"></i></a></li>
            </ul> 
          </div>
        </div>
    </div>
  </div>
</div>

@include('frontend.sections.ceo_desk')
@include('frontend.sections.blog')
@include('frontend.sections.get_in_touch')
@endsection

@section('script')
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>
@endsection