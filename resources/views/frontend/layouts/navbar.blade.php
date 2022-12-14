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
          <select class="top-navselect">
            <option class="top-select">India</option>
            <option class="top-select">Singapore</option>
            <option class="top-select">London</option>
          </select>
        <span>
      </p>
    </div>
  </div>
</div>

<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="{{ asset('public/image/logo.png') }}" width="" class="logo img-fluid"/>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ml-auto">
        <a class="nav-link active" aria-current="page" href="#">Home</a>
        <a class="nav-link" href="#">Buy</a>
        <a class="nav-link" href="#">Rent</a>
        <a class="nav-link" href="#">Dr. Consultant</a>
        <a class="nav-link" href="#">About</a>
        <a class="nav-link" href="#">
        @if(Auth::guest())
        <button class="deu-login" data-toggle="modal" data-target="#myModal">Login</button>
        @else
        <form action="{{url('/logout')}}" method="post">
          @csrf
        <button type="submit" class="deu-login" data-toggle="modal">Logout</button>
        </form>
        @endif
        </a>
      </div>
    </div>
  </div>
</nav>