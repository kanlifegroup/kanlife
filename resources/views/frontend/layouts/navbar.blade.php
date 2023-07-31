{{--
<div class="container-fluid top-nav">
  <div class="row">
    <div class="col-md-7">
      <i class="fa fa-facebook top-navsocial" aria-hidden="true"></i>
      <img class="top-navsocials" src="{{ asset('public/image/instragam.svg') }}">
      <i class="fa fa-youtube-play top-navsocial" aria-hidden="true"></i>
      <i class="fa fa-twitter top-navsocial" aria-hidden="true"></i>
      <i class="fa fa-linkedin top-navsocial" aria-hidden="true"></i>
    </div>
    <div class="col-md-3">
        <p><img class="top-navemail" src="{{ asset('public/image/email.svg') }}"> <span class="kan-email">contact@kanlifemedical.asia<span></p>
    </div>
    <div class="col-md-2">
      <p>
        <img class="top-navemail" src="{{ asset('public/image/global.svg') }}"> 
        <span class="kan-email">
          <select class="top-navselect" onchange="set_location(this.value)">
            <option {{$user_location == 'india' ? 'selected' : ''}} value="india" class="top-select">India</option>
            <option {{$user_location == 'singapore' ? 'selected' : ''}} value="singapore" class="top-select">Singapore</option>
            <option {{$user_location == 'london' ? 'selected' : ''}} value="london" class="top-select">London</option>
          </select>
        <span>
      </p>
    </div>
  </div>
</div>
--}}
<div class="container-fluid top-nav text-white py-1">
  <div class="row g-0 align-items-left gap-3 justify-content-left flex-md-row">
    <div class="col d-flex gap-2 justify-content-left justify-content-md-start px-sm-3 px-0 m-auto">
      <div class="social-bg d-flex justify-content-center align-items-center">
        <!-- <img src="image/facebook.svg" alt="" class="img-fluid"> -->
        <a href="https://lnkd.in/gCW9EFfv">
        <i class="fa fa-facebook top-navsocial" aria-hidden="true"></i>
        </a>
      </div>
      <div class="social-bg d-flex justify-content-center align-items-center">
        <a href="https://lnkd.in/g3NJ6F5M">
        <img src="{{ asset('public/image/instragam.svg') }}" alt="" class="img-fluid">
        </a>
      </div>
      <div class="social-bg d-flex justify-content-center align-items-center">
        <!-- <img src="image/youtube.svg" alt="" class="img-fluid"> -->
        <a href="https://lnkd.in/gJeydyQD">
        <i class="fa fa-youtube-play top-navsocial" aria-hidden="true"></i>
        </a>
      </div>
      <div class="social-bg d-flex justify-content-center align-items-center">
        <!-- <img src="image/twitter.svg" alt="" class="img-fluid"> -->
        <a href="https://twitter.com/kanlife_group">
        <i class="fa fa-twitter top-navsocial" aria-hidden="true"></i>
        </a>
      </div>
      <div class="social-bg d-flex justify-content-center align-items-center">
        <!-- <img src="image/linkedin.svg" alt="" class="img-fluid"> -->
        <a href="https://in.linkedin.com/company/kanlife-group">
        <i class="fa fa-linkedin top-navsocial" aria-hidden="true"></i>
        </a>
      </div>
    </div>
    <div class="col-auto d-flex align-items-center gap-0 gap-sm-2 px-0 px-sm-3">
      <img class="top-navemail" src="{{ asset('public/image/email.svg') }}" />
      <a href="mailto:contact@kanlifemedical.asia">
        <span class="kan-email">contact@kanlifemedical.asia<span>
      </a>
    </div>
    <div class="col-auto text-white d-flex align-items-center optionbox">
      <div class="dropdown-center">
        <button class="btn bg-transparent text-white d-flex align-items-center gap-2 dropdown-toggle border-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
          <img class="top-navemail ms-auto me-0" src="{{ asset('public/image/global.svg') }}">
          {{ucfirst($user_location)}}
          <img src="{{ asset('public/image/counrty-dd-icon.svg') }}" alt="" width="10" class="ms-3">
        </button>
        <ul class="dropdown-menu">
          <li onclick="set_location('india')"><a class="dropdown-item" href="javascript:void(0)">India</a></li>
          <li onclick="set_location('singapore')"><a class="dropdown-item" href="javascript:void(0)">Singapore</a></li>
          <li onclick="set_location('london')"><a class="dropdown-item" href="javascript:void(0)">London</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>


@php
$module=explode("/", url()->current());
@endphp
{{--
<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ml-auto">
        @if(isset($is_categories) && $is_categories)
        <div class="dropdown">
          <a class="dropdown-toggle prn deu-barcat nav-link" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-bars" aria-hidden="true"></i>  Categories
          </a>
          <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
            <!-- <li class="dropdown-submenu">
              <a  class="dropdown-item" tabindex="-1" href="#">X-RAY Systems</a>
              <ul class="dropdown-menu">
                <li class="dropdown-item"><a tabindex="-1" class="deu-droptxt" href="#">Second level</a></li>
                <li class="dropdown-submenu">
                  <a class="dropdown-item" href="#">Even More..</a>
                  <ul class="dropdown-menu">
                    <li class="dropdown-item"><a class="deu-droptxt" href="#">3rd level</a></li>
                      <li class="dropdown-submenu"><a class="dropdown-item" href="#">another level</a>
                        <ul class="dropdown-menu">
                          <li class="dropdown-item"><a class="deu-droptxt" href="#">4th level</a></li>
                          <li class="dropdown-item"><a class="deu-droptxt" href="#">4th level</a></li>
                          <li class="dropdown-item"><a class="deu-droptxt" href="#">4th level</a></li>
                        </ul>
                      </li>
                      <li class="dropdown-item"><a class="deu-droptxt" href="#">3rd level</a></li>
                  </ul>
                </li>
                <li class="dropdown-item"><a class="deu-droptxt" href="#">Second level</a></li>
                <li class="dropdown-item"><a class="deu-droptxt" href="#">Second level</a></li>
              </ul>
            </li> -->
            @foreach($categories['display'] as $category)
            <li class="dropdown-item"><a class="deu-droptxt" href="{{url('category/'.$category->category_slug)}}">{{ $category->category_name }}</a></li>
            @endforeach
            <li class="dropdown-item"><a href="#"><button class="about-more deu-wid">More</button></a></li>
          </ul>
        </div>
        @endif
      </div>
    </div>
  </div>
</nav>
--}}

<nav class="navbar navbar-expand-md py-0">
  <div class="container-fluid py-1">
    <a class="navbar-brand" href="/">
      <img src="{{ asset('public/image/logo.png') }}" width="" class="logo img-fluid" alt="Kanlifegroup"/>
    </a>
    <div class="col-md-2">
      <form action="{{ route('search.products') }}" class="search_form mb-0" id="search_form" method="post">
      {{ csrf_field() }}
          <div class="input-group flex-fill">
            <input type="text" class="form-control search-text" id="search_text" name="search_text" placeholder="{{ Helper::translation(2039,$translate,'') }}">
            <div style="margin-left: -1px; z-index: 100;">
              <button class="btn btn-secondary button-color deu-search-bar" type="submit">
                <i class="fa fa-search"></i>
              </button>
            </div>
        </div>
      </form>
    </div>
    <div class="d-flex justify-content-center align-items-center">
      @if(array_intersect([$user_location],['india','london']))
        <a class="nav-link d-md-none d-block me-2 position-relative" href="{{url('/cart')}}"><img style="width: 20px; margin-bottom: 2px;" src="{{ url('/cart') == url()->current() ? asset('public/image/cart_active.svg') : asset('public/image/cart.svg')}}">
          @if($cart_count > 0)
            <span class="deu-cartxts position-absolute" style="right:-9px;top:-10px">{{ $cart_count }}</span>
          @endif
        </a>
      @endif
      @if(Auth::guest())   
        <a class=" d-md-none d-block me-4" href="javascript:void(0)" onclick="openModel('myModal')">
          <i class="fa fa-sign-in" style="font-size:20px;margin-top:4px;"></i>
        </a>
      @endif
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
    <div class="collapse navbar-collapse px-2" id="navbarSupportedContent" style="flex-grow: 0;">   
      <div class="navbar-nav gap-lg-3 gap-md-3 gap-xxl-3 ms-auto align-items-md-center">
        @if(isset($is_categories) && $is_categories)
        <div class="dropdown">
          <a class="dropdown-toggle prn deu-barcat nav-link" type="button" id="dropdownMenu1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-bars" aria-hidden="true"></i>  <span class="me-md-4 "> Categories </span>
          <img src="{{ asset('public/image/cat-dd-icon.svg') }}" alt="" width="10" class="ms-3 position-absolute cat-dd-icon" style="right:9px;">
          </a>
          @php $count_categories = count($categories['display']); @endphp
          <ul class="dropdown-menu multi-level drop1" role="menu" aria-labelledby="dropdownMenu" style=" @if($count_categories > 10 && $count_categories < 21) width:300px; @elseif($count_categories > 20) width:450px; @endif"> 
            {{--
             @foreach($categories['display'] as $category)
            <li class="dropdown-item"><a class="deu-droptxt" href="{{url('category/'.$category->category_slug)}}">{{ $category->category_name }}</a></li>
            @endforeach
            --}}
            <div class="container">
            <div class="row">
                <div class="col-6 @if($count_categories < 11) col-md-12 @elseif($count_categories > 10 && $count_categories < 21) col-md-6 @else col-md-4 @endif ">
                  @foreach($categories['display'] as $key => $category)
                    @if($key < 10)
                    <li class="dropdown-item"><a class="deu-droptxt" href="{{url('category/'.$category->category_slug)}}">{{ $category->category_name }}</a></li>
                    @endif
                  @endforeach
                </div>
                @if($count_categories > 10)
                <div class="col-6 @if($count_categories < 21) col-md-6 @else col-md-4 @endif bg-light">
                  @foreach($categories['display'] as $key => $category)
                    @if($key >= 10 && $key < 20)
                    <li class="dropdown-item"><a class="deu-droptxt" href="{{url('category/'.$category->category_slug)}}">{{ $category->category_name }}</a></li>
                    @endif
                  @endforeach
                </div>
                @endif
                @if($count_categories > 20)
                <div class="col-6 col-md-4">
                  @foreach($categories['display'] as $key => $category)
                    @if($key >= 20 && $key < 30)
                    <li class="dropdown-item"><a class="deu-droptxt" href="{{url('category/'.$category->category_slug)}}">{{ $category->category_name }}</a></li>
                    @endif
                  @endforeach
                </div>
                @endif
            </div>
            </div>           
          </ul>
        </div>
        @endif
        <a class="nav-link {{ url('/') == url()->current() ? 'active' : '' }}" aria-current="page" href="{{ url('/') }}">Home</a>
        @if(array_intersect([$user_location],['india']))
          <a class="nav-link {{ url('/buy') == url()->current() ? 'active' : '' }}" href="{{ url('/buy') }}">Buy</a>
        @endif
        @if(array_intersect([$user_location],['london']))
          <a class="nav-link" href="https://www.tamboos.co.uk" target="_blank">Buy</a>
        @endif
        @if(array_intersect([$user_location],['india']))
          <a class="nav-link" href="https://www.asopo.in" target="_blank">Rent</a>
        @endif
        <a class="nav-link text-nowrap" href="https://drjamilaonline.clinic.icareheal.com/best-clinical-cardiologist-and-general-physician-in-bangalore-location-bangalore" target="_blank">Consult A Dr.</a>
        <div class="dropdown">
          <button class="btn nav-link border-0 dropdown-toggle" type="button" id="about_us_menu"
            data-bs-toggle="dropdown" aria-expanded="false">
            About Us
          </button>
          <ul class="dropdown-menu" aria-labelledby="about_us_menu">
            <li><a class="dropdown-item" href="{{ route('about.story') }}">Our Story</a></li>
            <li><a class="dropdown-item" href="{{ route('about.contact') }}">Contact Us</a></li>
            <li><a class="dropdown-item" href="{{ route('about.team') }}">Our Team</a></li>
            <li><a class="dropdown-item" href="{{ route('about.blog') }}">Blogs</a></li>
          </ul>
        </div>
        @if(Auth::guest())        
          <button class="d-md-block d-none deu-login btn nav-link text-white px-2 px-lg-3" onclick="openModel('myModal')">Login</button>
        @else
          <div class="dropdown">
            <button class="btn nav-link border-0 dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            {{ucfirst(Auth::user()->name)}}
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
              <li><a class="dropdown-item" href="{{url('/my-profile')}}">Your Account</a></li>
              <li><a class="dropdown-item" href="{{url('/my-purchase')}}">Your Orders</a></li>
              <li><a class="dropdown-item" href="{{url('/wishlist')}}">Your Wishlist</a></li>
              <li><a class="dropdown-item" href="{{url('/enquiries')}}">Your Enquiries</a></li>
              <form action="{{url('/logout')}}" method="post">
                @csrf
                <button class="dropdown-item deu-accountpad" href="#">Log Out</button>
              </form>
            </ul>
          </div>
        @endif
        @if(array_intersect([$user_location],['india','london']))
          <a class="nav-link d-md-block d-none" href="{{url('/cart')}}"><img class="deu-cart" src="{{ url('/cart') == url()->current() ? asset('public/image/cart_active.svg') : asset('public/image/cart.svg')}}">
            @if($cart_count > 0)
              <span class="deu-cartxts">{{ $cart_count }}</span>
            @endif
          </a>
        @endif
      </div>
    </div>
  </div>
</nav>
