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

@php
$module=explode("/", url()->current());
@endphp

<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="{{ asset('public/image/logo.png') }}" width="" class="logo img-fluid"/>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"><i class="fa fa-bars" aria-hidden="true"></i></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ml-auto">
        @if(isset($categories))
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
        <a class="nav-link {{ url('/') == url()->current() ? 'active' : '' }}" aria-current="page" href="{{ url('/') }}">Home</a>
        @if(array_intersect([$user_location],['india','london']))
        <a class="nav-link {{ url('/buy') == url()->current() ? 'active' : '' }}" href="{{ url('/buy') }}">Buy</a>
        @endif
        @if(array_intersect([$user_location],['india']))
        <a class="nav-link" href="#">Rent</a>
        @endif
        <a class="nav-link {{ array_intersect($module, ['consultant']) ? 'active' : '' }}" href="#">Dr. Consultant</a>
        <div class="dropdown ">
          <button type="button" class="btn btn-link dropdown-toggles deu-dropdowns" data-toggle="dropdown">
            About Us
          </button>
          <div class="dropdown-menu">
            <a class="dropdown-item deu-accountpad {{ array_intersect($module, ['our-story']) ? 'active' : '' }}" href="{{ route('about.story') }}">Our Story</a>
            <a class="dropdown-item deu-accountpad {{ array_intersect($module, ['contact-us']) ? 'active' : '' }}" href="{{ route('about.contact') }}">Contact Us</a>
            <a class="dropdown-item deu-accountpad {{ array_intersect($module, ['our-team']) ? 'active' : '' }}" href="{{ route('about.team') }}">Our Team</a>
            <a class="dropdown-item deu-accountpad" href="#">Blogs</a>
          </div>
        </div>
        @if(Auth::guest())
          <a class="nav-link" href="#">
            <!-- <button class="deu-login" data-toggle="modal" data-target="#myModal">Login</button> -->
            <button class="deu-login" onclick="openModel('myModal')">Login</button>
          </a>
        @else
          <div class="dropdown">
            <button type="button" class="btn btn-link dropdown-toggle deu-dropdowns" data-toggle="dropdown">
            {{ucfirst(Auth::user()->name)}}
            </button>
            <div class="dropdown-menu">
              <a class="dropdown-item deu-accountpad" href="#">Your Account</a>
              @if(array_intersect([$user_location],['india','london']))
            <a class="dropdown-item deu-accountpad" href="#">Your Orders</a>
            <a class="dropdown-item deu-accountpad" href="#">Your Wishlist</a>
            @endif
            <form action="{{url('/logout')}}" method="post">
              @csrf
              <button class="dropdown-item deu-accountpad" href="#">Log Out</button>
            </form>
            </div>
          </div>          
        @endif
        @if(array_intersect([$user_location],['india','london']))
          <a class="nav-link" style="margin-right: 0px;" href="{{url('/cart')}}"><img class="deu-cart" src="{{ url('/cart') == url()->current() ? asset('public/image/cart_active.svg') : asset('public/image/cart.svg')}}">
            @if($cart_count > 0)
              <span class="deu-cartxts">{{ $cart_count }}</span>
            @endif
          </a>
        @endif
      </div>
    </div>
  </div>
</nav>