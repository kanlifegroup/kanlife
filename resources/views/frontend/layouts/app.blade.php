<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="app-url" content="{{ env('APP_URL') }}">
  @yield('meta')
  {{-- Icons --}}
  <!-- <link rel="shortcut icon" type="image/x-icon" href="{{ asset('public/img/fav.png') }}"> -->
  <link rel="icon" type="image/png" href="{{ asset('public/img/fav.png') }}?v=2">

  <title>@yield('title')</title>


  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-2SW6V4RTV1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());

    gtag('config', 'G-2SW6V4RTV1');
  </script>

  <meta name="google-site-verification" content="B8YQulNOq6mHj_C2l--g5SWW4mY9HihREmBANB_mAl0" />


  <meta name="viewport" content="width=device-width, initial-scale=1">

  @yield('style')
  <link rel="stylesheet" href="https://cdn.rawgit.com/michalsnik/aos/1.0.1/dist/aos.min.css">
  <link rel="stylesheet" href="{{ URL::to('resources/views/admin/template/picker/jquery-ui.css') }}" />
  <link rel="stylesheet" href="{{ URL::to('resources/views/template/filter/jplist.jquery-ui-bundle.min.css') }}">
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
      -ms-overflow-style: none;
      /* IE and Edge */
      scrollbar-width: none;
      /* Firefox */
    }

    .close_model {
      /* border: none;
      font-weight: 900;
      background: none;
      font-size: 36px; */
      position: absolute;
      top: 10px;
      right: 14px;
      cursor: pointer;
      z-index: 1000;
    }

    .ui-widget {
      font-size: 1rem;
      height: auto;
      max-height: 200px;
      overflow-x: hidden;
    }


    .float {
      position: fixed;
      width: 60px;
      height: 60px;
      right: 40px;
      border-radius: 50px;
      text-align: center;
      font-size: 30px;
      box-shadow: 2px 2px 3px #999;
      z-index: 100;
    }

    .float-whatsApp {
      bottom: 40px;
      background-color: #25d366;
    }

    .float-phone {
      cursor: pointer;
      bottom: 110px;
      background-color: #0d6efd;
    }

    @media (max-width:600px) {

      .float {
        
        right: 15px;

      }

      .float-whatsApp{
        bottom: 80px;
      }

      .float-phone {
      bottom: 160px;
      }
    }

    .fa {
      display: inline-block;
      font: normal normal normal 14px/1 FontAwesome;
      font-size: inherit;
      text-rendering: auto;
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
    }

    .my-float {
      margin-top: 16px;
    }

    /* custom css applied start */
    .dropdown-item {
      font-size: 1.4rem;
    }

    .navbar-toggler {
      border: 2px solid black;
    }
    .nav-link {
        font-size: 1.3rem !important;
      }

    @media screen and (max-width:767px) {
      .nav-link {
        font-size: 2.3rem;
      }
    }

    /* custom css applied end */
  </style>



  <!-- Open Graph data -->
  <!-- https://moz.com/blog/meta-data-templates-123 -->
  <meta property="og:title" content="Global medical and health care delivered locally" />
  <meta property="og:type" content="article" />
  <meta property="og:url" content="http://www.kanlifegroup.com/" />
  <meta property="og:image" content="http://kanlifegroup.com" />
  <meta property="og:description"
    content="The easy-to-use vein finder that helps healthcare professionals improve vein cannulation and venipuncture success rates." />
  <meta property="og:site_name" content="Kanlife Group" />
  <meta property="article:published_time" content="2023-11-01T05:59:00+01:00" />
  <meta property="article:modified_time" content="2023-11-01T19:08:47+01:00" />
  <meta property="article:section" content="Article Section" />
  <meta property="article:tag" content="Article Tag" />
  <meta property="fb:admins" content="/kanlife Group" />



  <meta name="twitter:card" content="When and Why Are EUS Needles Used?" />
  <meta name="twitter:site" content="@kanlife_group" />
  <meta name="twitter:title" content="When and Why Are EUS Needles Used?" />
  <meta name="twitter:description"
    content="Endoscopic Ultrasound (EUS) is a medical procedure that combines endoscopy and ultrasound to provide detailed images and information about the digestive tract and nearby organs. Fine-needle aspiration (FNA), is crucial in this procedure. In this blog, we will explore when and why E-U-S needles are used, shedding light on their significance in diagnosing and treating various medical conditions." />
  <meta name="twitter:image" content="https://kanlifegroup.com/public/storage/post/1690798966.png" />

  <!-- JSON-LD markup generated by Google Structured Data Markup Helper. -->
  <script type="application/ld+json">
[
  {
    "@context": "http://schema.org",
    "@type": "LocalBusiness",
    "name": "Kanlife Group",
    "email": "contact@kanlifemedical.asia",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "36/3, 2nd Floor, 1st Cross Rd, Pukhraj Layout, Adugodi, Bengaluru,",
      "postalCode": "560030"
    },
    "url": "https://kanlifegroup.com/buy"
  },
  {
    "@context": "http://schema.org",
    "@type": "LocalBusiness",
    "name": "Kanlife Group",
    "image": [
      "https://kanlifegroup.com/public/image/logo.webp",
      "https://kanlifegroup.com/public/storage/slideshow/1672384719.png"
    ],
    "telephone": "+91 805 093 1561 or 080 4224 2929",
    "email": "india@kanlifemedical.asia",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "36/3, 2nd Floor, 1st Cross Rd, Pukhraj Layout, Adugodi, Bengaluru,",
      "postalCode": "560030"
    },
    "url": "https://kanlifegroup.com/buy"
  },
  {
    "@context": "http://schema.org",
    "@type": "LocalBusiness",
    "name": "Health Medical Wellness",
    "telephone": "+91 805 093 1561 or 080 4224 2929",
    "email": "india@kanlifemedical.asia",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "36/3, 2nd Floor, 1st Cross Rd, Pukhraj Layout, Adugodi, Bengaluru,",
      "postalCode": "560030"
    },
    "url": "https://kanlifegroup.com/buy"
  },
  {
    "@context": "http://schema.org",
    "@type": "LocalBusiness",
    "name": "Buy Medical Equipment",
    "telephone": "+91 805 093 1561 or 080 4224 2929",
    "email": "india@kanlifemedical.asia",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "36/3, 2nd Floor, 1st Cross Rd, Pukhraj Layout, Adugodi, Bengaluru,",
      "postalCode": "560030"
    },
    "url": "https://kanlifegroup.com/buy"
  },
  {
    "@context": "http://schema.org",
    "@type": "LocalBusiness",
    "name": "Rent Medical Equipment",
    "image": "https://kanlifegroup.com/public/image/buy1.webp",
    "telephone": "+91 805 093 1561 or 080 4224 2929",
    "email": "india@kanlifemedical.asia",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "36/3, 2nd Floor, 1st Cross Rd, Pukhraj Layout, Adugodi, Bengaluru,",
      "postalCode": "560030"
    },
    "url": "https://www.asopo.in/"
  },
  {
    "@context": "http://schema.org",
    "@type": "LocalBusiness",
    "name": "Consult A Dr .",
    "image": "https://kanlifegroup.com/public/image/buy2.webp",
    "telephone": "+91 805 093 1561 or 080 4224 2929",
    "email": "india@kanlifemedical.asia",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "36/3, 2nd Floor, 1st Cross Rd, Pukhraj Layout, Adugodi, Bengaluru,",
      "postalCode": "560030"
    },
    "url": "https://drjamilaonline.clinic.icareheal.com/best-clinical-cardiologist-and-general-physician-in-bangalore-location-bangalore"
  },
  {
    "@context": "http://schema.org",
    "@type": "LocalBusiness",
    "name": "Global medical and health care delivered locally",
    "image": [
      "https://kanlifegroup.com/public/image/buy3.png",
      "https://kanlifegroup.com/public/kanlife/home_about_us.webp"
    ],
    "telephone": "+91 805 093 1561 or 080 4224 2929",
    "email": "india@kanlifemedical.asia",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "36/3, 2nd Floor, 1st Cross Rd, Pukhraj Layout, Adugodi, Bengaluru,",
      "postalCode": "560030"
    },
    "url": "https://kanlifegroup.com/buy"
  },
  {
    "@context": "http://schema.org",
    "@type": "LocalBusiness",
    "name": "Kanlife Group was conceptualized and founded in 2009 in Singapore as Kanlife Asia Pte. Ltd. with a vision to provide a go-to-market platform to medical technology and healthcare companies from across the globe that are looking to establish a presence or strengthen their distribution foothold in Asia. Over the years Kanlife grew from a single shareholder company based out of Singapore to a multi-national group with shareholder limited companies at strategic global business locations like India and the UK.",
    "telephone": "+91 805 093 1561 or 080 4224 2929",
    "email": "india@kanlifemedical.asia",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "36/3, 2nd Floor, 1st Cross Rd, Pukhraj Layout, Adugodi, Bengaluru,",
      "postalCode": "560030"
    },
    "url": "https://kanlifegroup.com/buy"
  },
  {
    "@context": "http://schema.org",
    "@type": "LocalBusiness",
    "name": "Enabling efficient product distribution",
    "telephone": "+91 805 093 1561 or 080 4224 2929",
    "email": "india@kanlifemedical.asia",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "36/3, 2nd Floor, 1st Cross Rd, Pukhraj Layout, Adugodi, Bengaluru,",
      "postalCode": "560030"
    },
    "url": "https://kanlifegroup.com/buy"
  },
  {
    "@context": "http://schema.org",
    "@type": "LocalBusiness",
    "name": "Over the years Kanlife has become the partner of choice for medical equipment manufacturers looking to introduce, establish and grow their business and channel partner network in India and South East Asia",
    "telephone": "+91 805 093 1561 or 080 4224 2929",
    "email": "india@kanlifemedical.asia",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "36/3, 2nd Floor, 1st Cross Rd, Pukhraj Layout, Adugodi, Bengaluru,",
      "postalCode": "560030"
    },
    "url": "https://kanlifegroup.com/buy"
  },
  {
    "@context": "http://schema.org",
    "@type": "LocalBusiness",
    "name": "CEO’s Desk",
    "telephone": "+91 805 093 1561 or 080 4224 2929",
    "email": "india@kanlifemedical.asia",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "36/3, 2nd Floor, 1st Cross Rd, Pukhraj Layout, Adugodi, Bengaluru,",
      "postalCode": "560030"
    },
    "url": "https://kanlifegroup.com/buy"
  },
  {
    "@context": "http://schema.org",
    "@type": "LocalBusiness",
    "name": "Murtuza Tambawala",
    "image": "https://kanlifegroup.com/public/image/Murtaza%20Tambawala.png",
    "telephone": "+91 805 093 1561 or 080 4224 2929",
    "email": "india@kanlifemedical.asia",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "36/3, 2nd Floor, 1st Cross Rd, Pukhraj Layout, Adugodi, Bengaluru,",
      "postalCode": "560030"
    },
    "url": "https://kanlifegroup.com/buy"
  },
  {
    "@context": "http://schema.org",
    "@type": "LocalBusiness",
    "name": "The previous financial year propelled Kanlife forward and helped us further strengthen our position as the distribution partner of choice. We closed the financial year with revenue growth of 103%. Through last year Kanlife reinforced its core strengths as the value-added distributor in the medical equipment space with an expanding network, increasing reach, and sales-centric financial solutions. We have entered the new year with a very promising start, we are on track to grow our quarterly YoY revenues by 75-80%. We have set ourselves a target to double our channel partner network, triple our field force and double our warehousing space, in line with Kanlife’s larger vision and mission. Through the next 24 months, Kanlife will focus on creating brand equity with multiple Brand trademark registrations, the addition of innovative product verticals, and the launch of our E-commerce and Asopo platforms. Kanlife will transform into a multi-faceted value-added distribution partner of choice. Kanlife’s customers, channel partners, and employees will remain at the center of all our decisions",
    "telephone": "+91 805 093 1561 or 080 4224 2929",
    "email": "india@kanlifemedical.asia",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "36/3, 2nd Floor, 1st Cross Rd, Pukhraj Layout, Adugodi, Bengaluru,",
      "postalCode": "560030"
    },
    "url": "https://kanlifegroup.com/buy"
  },
  {
    "@context": "http://schema.org",
    "@type": "LocalBusiness",
    "name": "Mr. Khuzem Tambawala",
    "image": "https://kanlifegroup.com/public/image/Khuzema%20Tambawala.png",
    "telephone": "+91 805 093 1561 or 080 4224 2929",
    "email": "india@kanlifemedical.asia",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "36/3, 2nd Floor, 1st Cross Rd, Pukhraj Layout, Adugodi, Bengaluru,",
      "postalCode": "560030"
    },
    "url": "https://kanlifegroup.com/buy"
  },
  {
    "@context": "http://schema.org",
    "@type": "LocalBusiness",
    "name": "Murtuza Tambawala",
    "image": "https://kanlifegroup.com/public/image/Murtaza%20Tambawala.png",
    "telephone": "+91 805 093 1561 or 080 4224 2929",
    "email": "india@kanlifemedical.asia",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "36/3, 2nd Floor, 1st Cross Rd, Pukhraj Layout, Adugodi, Bengaluru,",
      "postalCode": "560030"
    },
    "url": "https://kanlifegroup.com/buy"
  },
  {
    "@context": "http://schema.org",
    "@type": "LocalBusiness",
    "name": "Dr. Jamila Zaveri",
    "image": "https://kanlifegroup.com/public/image/jamila.webp",
    "telephone": "+91 805 093 1561 or 080 4224 2929",
    "email": "india@kanlifemedical.asia",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "36/3, 2nd Floor, 1st Cross Rd, Pukhraj Layout, Adugodi, Bengaluru,",
      "postalCode": "560030"
    },
    "url": "https://kanlifegroup.com/buy"
  },
  {
    "@context": "http://schema.org",
    "@type": "LocalBusiness",
    "name": "Fatima Khuzem",
    "image": "https://kanlifegroup.com/public/image/Fathima.webp",
    "telephone": "+91 805 093 1561 or 080 4224 2929",
    "email": "india@kanlifemedical.asia",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "36/3, 2nd Floor, 1st Cross Rd, Pukhraj Layout, Adugodi, Bengaluru,",
      "postalCode": "560030"
    },
    "url": "https://kanlifegroup.com/buy"
  },
  {
    "@context": "http://schema.org",
    "@type": "LocalBusiness",
    "name": "World class products from the best Global brands",
    "telephone": "+91 805 093 1561 or 080 4224 2929",
    "email": "india@kanlifemedical.asia",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "36/3, 2nd Floor, 1st Cross Rd, Pukhraj Layout, Adugodi, Bengaluru,",
      "postalCode": "560030"
    },
    "url": "https://kanlifegroup.com/buy"
  },
  {
    "@context": "http://schema.org",
    "@type": "LocalBusiness",
    "name": "Rapidly Expanding Network",
    "telephone": "+91 805 093 1561 or 080 4224 2929",
    "email": "india@kanlifemedical.asia",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "36/3, 2nd Floor, 1st Cross Rd, Pukhraj Layout, Adugodi, Bengaluru,",
      "postalCode": "560030"
    },
    "url": "https://kanlifegroup.com/buy",
    "review": [
      {
        "@type": "Review",
        "author": {
          "@type": "Person",
          "name": "Madhurima Das"
        },
        "reviewBody": "Today I was doing FIBRO SCAN at PEERLESS HOSPITAL. I am very happy with Kanlife India Staff Mr.PULAK DAS .He is very friendly,good behaviour and helpfull. Inspite of some difficulties he doing my fibroscan taking huge time with lots of patience.Thank you very much Mr.PULAK DAS.Thank you"
      },
      {
        "@type": "Review",
        "author": {
          "@type": "Person",
          "name": "Suparna Satpathi"
        },
        "reviewBody": "I am Suparna Satpathi(senior executive) staff of Amri Hospital_Dhakuria and I am very happy with kanlife staff Ms Sonali Chatterjee, She is very helpfull,good behaviour with Doctors, Patients and with us also.Kanlife India&#39;s Fibroscan test is very much needful for our Amri group&#39;s patients."
      }
    ]
  },
  {
    "@context": "http://schema.org",
    "@type": "LocalBusiness",
    "name": "Provide our customers and partners with an extensive and expert team of clinical, technical, and marketing resources",
    "image": [
      "https://kanlifegroup.com/public/kanlife/our1.webp",
      "https://kanlifegroup.com/public/kanlife/our2.webp",
      "https://kanlifegroup.com/public/kanlife/our3.webp",
      "https://kanlifegroup.com/public/kanlife/our4.webp",
      "https://kanlifegroup.com/public/kanlife/our5.webp",
      "https://kanlifegroup.com/public/image/logo.webp"
    ],
    "telephone": "+91 805 093 1561 or 080 4224 2929",
    "email": "india@kanlifemedical.asia",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "36/3, 2nd Floor, 1st Cross Rd, Pukhraj Layout, Adugodi, Bengaluru,",
      "addressCountry": "Singapore",
      "postalCode": "560030"
    },
    "url": "https://kanlifegroup.com/buy"
  },
  {
    "@context": "http://schema.org",
    "@type": "LocalBusiness",
    "name": "Provide our customers and partners with an extensive and expert team of clinical, technical, and marketing resources",
    "image": [
      "https://kanlifegroup.com/public/kanlife/our1.webp",
      "https://kanlifegroup.com/public/kanlife/our2.webp",
      "https://kanlifegroup.com/public/kanlife/our3.webp",
      "https://kanlifegroup.com/public/kanlife/our4.webp",
      "https://kanlifegroup.com/public/kanlife/our5.webp",
      "https://kanlifegroup.com/public/image/logo.webp"
    ],
    "telephone": "+91 805 093 1561 or 080 4224 2929",
    "email": "india@kanlifemedical.asia",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "36/3, 2nd Floor, 1st Cross Rd, Pukhraj Layout, Adugodi, Bengaluru,",
      "addressLocality": "Kolkata",
      "addressRegion": "London",
      "addressCountry": "India",
      "postalCode": "560030"
    },
    "url": "https://kanlifegroup.com/buy"
  },
  {
    "@context": "http://schema.org",
    "@type": "LocalBusiness",
    "name": "Provide our customers and partners with an extensive and expert team of clinical, technical, and marketing resources",
    "image": [
      "https://kanlifegroup.com/public/kanlife/our1.webp",
      "https://kanlifegroup.com/public/kanlife/our2.webp",
      "https://kanlifegroup.com/public/kanlife/our3.webp",
      "https://kanlifegroup.com/public/kanlife/our4.webp",
      "https://kanlifegroup.com/public/kanlife/our5.webp",
      "https://kanlifegroup.com/public/image/logo.webp"
    ],
    "telephone": "+91 805 093 1561 or 080 4224 2929",
    "email": "india@kanlifemedical.asia",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "36/3, 2nd Floor, 1st Cross Rd, Pukhraj Layout, Adugodi, Bengaluru,",
      "addressLocality": "Bangalore",
      "addressRegion": "London",
      "addressCountry": "India",
      "postalCode": "560030"
    },
    "url": "https://kanlifegroup.com/buy"
  },
  {
    "@context": "http://schema.org",
    "@type": "LocalBusiness",
    "name": "Provide our customers and partners with an extensive and expert team of clinical, technical, and marketing resources",
    "image": [
      "https://kanlifegroup.com/public/kanlife/our1.webp",
      "https://kanlifegroup.com/public/kanlife/our2.webp",
      "https://kanlifegroup.com/public/kanlife/our3.webp",
      "https://kanlifegroup.com/public/kanlife/our4.webp",
      "https://kanlifegroup.com/public/kanlife/our5.webp",
      "https://kanlifegroup.com/public/image/logo.webp"
    ],
    "telephone": "+91 805 093 1561 or 080 4224 2929",
    "email": "india@kanlifemedical.asia",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "36/3, 2nd Floor, 1st Cross Rd, Pukhraj Layout, Adugodi, Bengaluru,",
      "addressLocality": "Mumbai",
      "addressRegion": "London",
      "addressCountry": "India",
      "postalCode": "560030"
    },
    "url": "https://kanlifegroup.com/buy"
  }
]
</script>
</head>

<body>

  @include('frontend.layouts.navbar')
  @yield('content')

  @include('frontend.sections.auth_models')

  @include('frontend.layouts.footer')

  @yield('script')


  <a href="https://api.whatsapp.com/send?phone=+918050931561&amp;text=Hi, I want to buy an equipment." class="float float-whatsApp"
    target="_blank">
    <i class="fa fa-whatsapp my-float"></i>
  </a>
  <a href="tel:+918050931561" class="float float-phone">
    <i class="fa fa-phone my-float"></i>
  </a>
  <script src="{{ URL::to('resources/views/template/autosearch/jquery-ui.min.js') }}"></script>
  <script src="https://cdn.rawgit.com/michalsnik/aos/1.0.1/dist/aos.js"></script>
  <script>
    AOS.init({
      easing: 'ease-out-back',
      duration: 1000
    });
    function set_location(location) {
      $.ajax({
        type: "get",
        url: "{{url('/set-my-location/')}}/" + location,
        success: function (response) {
          window.location.reload();
        },
        error: function (error) {
          console.log(error);
        }
      });
    }
    $(document).ready(function () {
      src = "{{ route('searchajax') }}";
      $("#search_text").autocomplete({
        source: function (request, response) {
          $.ajax({
            url: src,
            dataType: "json",
            data: {
              term: request.term
            },
            success: function (data) {
              response(data);

            }
          });
        },
        minLength: 1,

      });
      $(".alert").fadeTo(10000, 500).slideUp(500, function () {
        $(".alert").slideUp(500);
      });
      @if(session('registered'))
        $('#myModal3').modal('show');
        setTimeout(function () {
        $('#myModal3').modal('hide');
        }, 5000);
        <?php
      session()->forget('registered');
        ?>
    @endif
    });
    @if(Auth::guest())
      $(document).ready(function () {
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

      function openModel(id) {
        closeModels();
        $('#' + id).modal('show');
      }
      function closeModels() {
        $('#myModal').modal('hide');
        $('#myModal1').modal('hide');
        $('#myModal2').modal('hide');
      }
  @endif
    function see_password(e) {
      $(e).parent().find("input").prop("type", "text");
      $(e).hide();
      $(e).siblings("span.seepassword").show();
    }
    function hide_password(e) {
      $(e).parent().find("input").prop("type", "password");
      $(e).hide();
      $(e).siblings("span.seepassword").show();
    }
    if (performance.navigation.type == 2) {
      location.reload(true);
    }

  </script>
</body>

</html>