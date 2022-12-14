@extends('frontend.layouts.app')

@section('title')
  Home
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

@endsection