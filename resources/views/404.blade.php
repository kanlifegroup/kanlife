@if($allsettings->maintenance_mode == 0)
<!DOCTYPE html>
<html lang="en">
<head>
<title>404 Not Found - {{ $allsettings->site_title }}</title>
@include('style')
</head>
<body>
@include('header')
    <section class="headerbg" style="background-image: url('{{ url('/') }}/public/storage/settings/{{ $allsettings->site_header_background }}');">
      <div class="container text-left">
        <h2 class="mb-0">404 Not Found</h2>
        <p class="mb-0"><a href="{{ URL::to('/') }}">{{ Helper::translation(1913,$translate,'') }}</a> <span class="split">&gt;</span> <span>404 Not Found</span></p>
      </div>
    </section>
  <main role="main">
      <div class="container page-white-box mt-3">
         
         <div class="row">
           <div class="col-md-12 mt-1 mb-1 pt-1 pb-1" align="center">
           <h1 class="four_not_four">404</h1>
         	<h3>Sorry, the page you are looking for could not be found.</h3>
           </div>
         </div>
         
      </div>
    </main>
@include('footer')
@include('javascript')
</body>
</html>
@else
@include('503')
@endif