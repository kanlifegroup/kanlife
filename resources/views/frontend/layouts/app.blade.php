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

    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    @yield('style')
    <link rel="stylesheet" href="{{asset('public/css/style.css')}}">
    <style>
    /* Chrome, Safari, Edge, Opera */
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
      -webkit-appearance: none;
      margin: 0;
    }

    /* Firefox */
    input[type=number] {
      -moz-appearance: textfield;
    }

    /* Hide scrollbar for Chrome, Safari and Opera */
    .regiS::-webkit-scrollbar {
      display: none;
    }

    /* Hide scrollbar for IE, Edge and Firefox */
    .regiS {
      -ms-overflow-style: none;  /* IE and Edge */
      scrollbar-width: none;  /* Firefox */
    }
    #about_us_menu::after{
      content: none;
    }
    .close_model{
      border: none;
      font-weight: 900;
      background: none;
      font-size: 36px;
      position: absolute;
      top: -7px;
      right: 4px;
      cursor: pointer;
      z-index:1000;
    }
    </style>
</head>

<body>

@include('frontend.layouts.navbar')
@yield('content')

@include('frontend.sections.auth_models')

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
  $(document).ready(function() {
    $(".alert").fadeTo(10000, 500).slideUp(500, function(){
      $(".alert").slideUp(500);
    });
    @if(session('registered'))
      $('#myModal3').modal('show');
      setTimeout(function(){
        $('#myModal3').modal('hide');
      }, 5000);
      <?php
        session()->forget('registered');
      ?>
    @endif
  });
  @if(Auth::guest())
    $(document).ready(function() {
      @if(session('signup') && session('signup') == 'signup')
        $('#myModal1').modal('show');
      @endif
      @if(session('signin') && session('signin') == 'signin')
        $('#myModal').modal('show');
      @endif
      @if(session('reset') && session('reset') != '' || session('reset_error') && session('reset_error') != '')
        $('#myModal2').modal('show');
      @endif
        <?php
          session()->forget('signup');
          session()->forget('signin');
          session()->forget('reset');
          session()->forget('reset_error');
        ?>
    });

    function openModel(id){
      closeModels();
      $('#'+id).modal('show');
    }
    function closeModels(){
      $('#myModal').modal('hide');
      $('#myModal1').modal('hide');
      $('#myModal2').modal('hide');
    }
  @endif
  function see_password(e){
    $(e).parent().find("input").prop("type", "text");
    $(e).hide();
    $(e).siblings("span.seepassword").show();
  }
  function hide_password(e){
    $(e).parent().find("input").prop("type", "password");
    $(e).hide();
    $(e).siblings("span.seepassword").show();
    }
  if(performance.navigation.type == 2){
   location.reload(true);
  }
</script>
</body>
</html>
