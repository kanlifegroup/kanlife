@extends('frontend.layouts.app')

@section('title')
Murtuza Tambawala
@endsection

@section('style')
  <style>
    @media screen and (max-width: 430px){
      .team{        
        display:flex;
        justify-content: center;
        align-items: center;
      }
      .team p img{
        height: 200px;
        width: 200px;
        display:flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
      }
      .team_name{
        display:flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        margin-top: 10px;
      }
    }
    @media screen and (min-width: 431px) and (max-width: 765px){
      .team{        
        display:flex;
        justify-content: center;
        align-items: center;
      }
      .team p img{
        height: 240px;
        width: 240px;
      }
      .team_name{
        display:flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        margin-top: 10px;
      }
    }
    @media screen and (min-width: 766px) and (max-width: 940px){
      .team p img{
        height: 160px;
        width: 160px;
      }
      .team_name{
        height: 100%;
        display:flex;
        flex-direction: column;
        justify-content: center;
      }
    }
    @media screen and (min-width: 941px) and (max-width: 1024px){
      .team p img{
        height: 200px;
        width: 200px;
      }
      .team_name{
        height: 100%;
        display:flex;
        flex-direction: column;
        justify-content: center;
      }
    }
    @media screen and (min-width: 1025px){
      .team{        
        display:flex;
        align-items: center;
      }
      .team p img{
        height: 200px;
        width: 200px;
      }
      .team_name{
        height: 100%;
        display:flex;
        flex-direction: column;
        justify-content: center;
      }
    }
    @media screen and (min-width: 990px) and (max-width: 1439px){
      .name-container{
        margin-left:65px;
      }
    }
  </style>
  <link rel="stylesheet" href="https://cdn.rawgit.com/michalsnik/aos/1.0.1/dist/aos.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/7.3.1/swiper-bundle.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@500&family=Montserrat:wght@500&family=Nunito:wght@500;600;700;900&family=Roboto:wght@500&display=swap" rel="stylesheet">
@endsection

@section('content')
  <div class="us-section" style="background-color: #EFFFFD">
      <div class="container-fluid px-5">
          <div class="row" style="background-color: #EFFFFD">
            <div class="col-md-3 col-lg-2 team">
              <p class="mb-0" >
                <img class="rounded-circle" src="{{ asset('public/image/Murtaza Tambawala.png') }}" alt="Fatima Khuzem">
              </p>
            </div>
            <div class="col-md-9 name-container">
              <div class="team_name">
                <h1 style="font-weight: 900; color:#00979E">Murtuza Tambawala</h1>
                <h5>Founder / CEO</h5>
              </div>
            </div>
          </div>
        </div>
    </div>
</div>
<div class="us-section">
    <div class="container-fluid px-5">
        <div class="row">
          <div class="">
            <h3 style="font-weight: 700">Professional Bio</h3> <br>
            <p class="mb-0" >
              <h4>
              A post-graduate from the University of Colorado USA with specialization in medical technologies, Murtuza has over 15 years of experience managing large organizations and start-ups.<br><br>

Serial entrepreneur Murtuza is a passionate healthcare professional and medical research scholar with certifications from MIT and WP Carey-USA. Early in his career he joined one of the world’s top 10 medical technology companies in the USA and worked with medical manufacturers across 30 countries.<br><br>

His passion to create sustainable healthcare businesses across geographies motivated him to join a listed company as part of their healthcare group and within 4 years raised it to a business with best-in-class products and over 20 million USD in revenues.<br><br>

This success and passion for sustainable medical and healthcare have been the driving force for Murtuza to establish Kanlife, Singapore in 2009 followed by Kanlife India and Kanlife London.

              </h4>
            </p>
          </div>
          </div>
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
@endsection