@extends('frontend.layouts.app')

@section('title')
  Home
@endsection

@section('style')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/7.3.1/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@500&family=Montserrat:wght@500&family=Nunito:wght@500;600;700;900&family=Roboto:wght@500&display=swap"
        rel="stylesheet">
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
<div class="container-fluid px-5 deu-teamgray">
    <div class="row g-0 gap-3">
        <div class="col-12 col-lg">
            <div class="card deu-teamcards">
                <div class="card-body text-center pt-5">
                    <img src="{{ asset('public/image/m1.png') }}" class="img-fluid" width="300" height="250">
                    <h5 class="card-title mt-3 m-3 mb-1 deu-teamname">Meena Ganesh</h5>
                    <p class="mb-3 mt-3 font-weight-bold deu-teamtxt1">Co-founder and chairperson</p>
                    <div class="px-4">
                        <button class="deu-aboutbtn1 px-4 w-100 py-2 mb-3">Know More</button>
                    </div>
                    <ul class="list-inline">
                        <li class="list-inline-item"><a><i class="fa fa-facebook facebook deu-teamsocial d-flex align-items-center justify-content-center"></i></a>
                        </li>
                        <li class="list-inline-item"><a><i class="fa fa-twitter twitter deu-teamsocial d-flex align-items-center justify-content-center"></i></a>
                        </li>
                        <li class="list-inline-item"><a><i class="fa fa-linkedin linkedin deu-teamsocial d-flex align-items-center justify-content-center"></i></a>
                        </li>
                        <li class="list-inline-item"><a><i class="fa fa-youtube-play deu-teamsocial d-flex align-items-center justify-content-center" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg">
            <div class="card deu-teamcards">
                <div class="card-body text-center pt-5">
                    <img src="{{ asset('public/image/m2.png') }}" class="img-fluid" width="300" height="250">
                    <h5 class="card-title mt-3 m-3 mb-1 deu-teamname">Ganesh Krishnan</h5>
                    <p class="mb-3 mt-3 font-weight-bold deu-teamtxt1">Co-founder and Director</p>
                    <div class="px-4">
                        <button class="deu-aboutbtn1 px-4 w-100 py-2 mb-3">Know More</button>
                    </div>
                    <ul class="list-inline">
                        <li class="list-inline-item"><a><i class="fa fa-facebook facebook deu-teamsocial d-flex align-items-center justify-content-center"></i></a>
                        </li>
                        <li class="list-inline-item"><a><i class="fa fa-twitter twitter deu-teamsocial d-flex align-items-center justify-content-center"></i></a>
                        </li>
                        <li class="list-inline-item"><a><i class="fa fa-linkedin linkedin deu-teamsocial d-flex align-items-center justify-content-center"></i></a>
                        </li>
                        <li class="list-inline-item"><a><i class="fa fa-youtube-play deu-teamsocial d-flex align-items-center justify-content-center" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg">
            <div class="card deu-teamcards">
                <div class="card-body text-center pt-5">
                    <img src="{{ asset('public/image/m3.png') }}" class="img-fluid" width="300" height="250">
                    <h5 class="card-title mt-3 m-3 mb-1 deu-teamname">Vaibhav Tewari</h5>
                    <p class="mb-3 mt-3 font-weight-bold deu-teamtxt1">Co-founder and CEO</p>
                    <div class="px-4">
                        <button class="deu-aboutbtn1 px-4 w-100 py-2 mb-3">Know More</button>
                    </div>
                    <ul class="list-inline">
                        <li class="list-inline-item"><a><i class="fa fa-facebook facebook deu-teamsocial d-flex align-items-center justify-content-center"></i></a>
                        </li>
                        <li class="list-inline-item"><a><i class="fa fa-twitter twitter deu-teamsocial d-flex align-items-center justify-content-center"></i></a>
                        </li>
                        <li class="list-inline-item"><a><i class="fa fa-linkedin linkedin deu-teamsocial d-flex align-items-center justify-content-center"></i></a>
                        </li>
                        <li class="list-inline-item"><a><i class="fa fa-youtube-play deu-teamsocial d-flex align-items-center justify-content-center" aria-hidden="true"></i></a></li>
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
    </script>

    <script>
        $(document).ready(function () {
            $("#news-slider10").owlCarousel({
                items: 3,
                itemsDesktop: [1199, 3],
                itemsDesktopSmall: [980, 2],
                itemsMobile: [600, 1],
                navigation: true,
                navigationText: ["", ""],
                pagination: true,
                autoPlay: true,
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
    </script>
    <script>
        $(document).ready(function () {
            $(".logS").click(function () {
                $(".regiS").show();
            });
            $(".logS").click(function () {
                $(".logS1").hide();
            });
            $(".logS12").click(function () {
                $(".forgeT").show();
            });
            $(".logS12").click(function () {
                $(".logS1").hide();
            });
        });
    </script>
@endsection