<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="app-url" content="{{ env('APP_URL') }}">

    {{--  Icons  --}}
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('public/image/logo.png') }}">

    <title>@yield('title') - KanLife</title>
    <link rel="stylesheet" href="{{asset('public/css/style.css')}}">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    @yield('style')
</head>

<body>

@include('frontend.layouts.navbar')
@yield('content')
@if(Auth::guest())
@include('frontend.sections.auth_models')
@endif
@include('frontend.layouts.footer')

@yield('script')
<script>
  function set_location(location){
    $.ajax({
      type:"get",
      url:"{{url('/set-my-location/')}}/"+location,
      success:function(response)
      {
        window.location.reload();
      },
      error: function(error){
        console.log(error);
      }
    });
  }
  @if(Auth::guest())
    $(document).ready(function() {
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
  @endif
</script>
</body>
</html>
