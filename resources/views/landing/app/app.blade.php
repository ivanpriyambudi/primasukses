<!DOCTYPE html>
<html lang="en">
<head>

  @yield('title')


  <link href='https://fonts.googleapis.com/css?family=Raleway:400,300,500,700,900' rel='stylesheet' type='text/css'>
  <!-- Material Icons CSS -->
  <link href="{{asset('assets/fonts/iconfont/material-icons.css')}}" rel="stylesheet">
  <!-- FontAwesoassetme CSS -->
  <link href="{{asset('assets/fonts/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <!-- magnific-assetpopup -->
  <link href="{{asset('assets/magnific-popup/magnific-popup.css')}}" rel="stylesheet">
  <!-- flexslidasseter -->
  <link href="{{asset('assets/flexSlider/flexslider.css')}}" rel="stylesheet">
  <!-- materialiassetze -->
  <link href="{{asset('assets/materialize/css/materialize.min.css')}}" rel="stylesheet">
  <!-- Bootstrassetap -->
  <link href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <!-- shortcodassetes -->
  <link href="{{asset('assets/css/shortcodes/shortcodes.css')}}" rel="stylesheet">
  <link href="{{asset('assets/css/shortcodes/login.css')}}" rel="stylesheet">
  <!-- Main Stylassete CSS -->
  <link href="{{asset('assets/style.css')}}" rel="stylesheet">
  <!-- Creative assetCSS -->
  <link href="{{asset('assets/css/skins/creative.css')}}" rel="stylesheet">

</head>

<body id="top" class="has-header-search">
  <!--header start-->
  <header id="header" class="tt-nav transparent-header nav-border-bottom">
    <div class="header-sticky light-header">
      <div class="container">
        <div id="materialize-menu" class="menuzord">

          <!--logo start-->
          <a href="index.html" class="logo-brand">
            <img class="logo-dark" src="assets/img/logo.png" alt=""/>
            <img class="logo-light" src="assets/img/logo-white.png" alt=""/>
          </a>
          <!--logo end-->

          <!-- menu start-->
          <ul class="menuzord-menu pull-right light">
            <li class=" 
            {{ (request()->routeIs(

              'Home'

              )) ? 'active' : '' }}
              ">
              <a href="{{route('Home')}}">Home</a>
            </li>
            <li class="
            {{ (request()->routeIs(

              'HomeAbout'

              )) ? 'active' : '' }}
              ">
              <a href="{{route('HomeAbout')}}">About Us</a>
            </li>
            <li class="
            {{ (request()->routeIs(

              'HomeArtikel',
              'HomeArtikelDetail'

              )) ? 'active' : '' }}
              "><a href="{{route('HomeArtikel')}}">Artikel</a></li>
              <li class="
              {{ (request()->routeIs(

                'HomePaket'

                )) ? 'active' : '' }}
                ">
                <a href="javascript:void(0)">Paket Bimbel</a>
                <ul class="dropdown">
                  <li><a href="{{route('HomePaketSD')}}">SD</a></li>
                  <li><a href="{{route('HomePaketSMP')}}">SMP</a></li>
                  <li><a href="{{route('HomePaketSMA')}}">SMA</a></li>
                </ul>
              </li>
              <li class="
              {{ (request()->routeIs(

                'HomeContact'

                )) ? 'active' : '' }}
                ">
                <a href="{{route('HomeContact')}}">Contact Us</a>
              </li>
              <li class="
              {{ (request()->routeIs(

                'HomeJoin'

                )) ? 'active' : '' }}
                ">
                <a href="{{route('HomeJoin')}}">Join Us</a>
              </li>
            </ul>
            <!-- menu end-->
          </div>
        </div>
      </div>
    </header>
    <!--header end-->

    @if(request()->routeIs('Home'))
    @include('landing.app.konten-landing')
    @else
    <section class="page-title page-title-bg overlay dark-7 ptb-190">
      <div class="container">
        <div class="row">
          <div class="col-md-12">

            @yield('title-konten')

            <ol class="breadcrumb">

              @yield('title-konten2')

            </ol>
          </div>
        </div>
      </div>
    </section>
    @endif

    @yield('konten')


    <footer class="footer footer-three">
      <div class="primary-footer brand-bg">
        <div class="container">
          <a href="#top" class="page-scroll btn-floating btn-large pink back-top waves-effect waves-light tt-animate btt" data-section="#top">
            <i class="material-icons">&#xE316;</i>
          </a>

          <div class="row">
            <div class="col-md-12 text-center">
              <div class="footer-logo">
                <h2 class="section-title text-uppercase white-text">Primasukses</h2>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="secondary-footer brand-bg">
        <div class="container">
          <hr class="mb-20">
          <div class="row">
            <div class="col-md-12">
              <span class="copy-text">Copyright &copy; 2019 <a href="#">Primasukses</a> &nbsp; | &nbsp;  All Rights Reserved &nbsp; | &nbsp;  Designed By <a href="#">Primasukses</a></span>
            </div>
          </div>
        </div>
      </div>
    </footer>


    <!-- Preloader -->
    <div id="preloader">
      <div class="preloader-position"> 
        <div class="progress">
          <div class="indeterminate"></div>
        </div>
      </div>
    </div>
    <!-- End Preloader -->  

    @yield('modal')

    <!-- jQuery -->
    <script src="{{asset('assets/js/jquery-2.1.3.min.js')}}"></script>
    <script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/materialize/js/materialize.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.easing.min.js')}}"></script>
    <script src="{{asset('assets/js/smoothscroll.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.inview.min.js')}}"></script>
    <script src="{{asset('assets/js/menuzord.js')}}"></script>
    <script src="{{asset('assets/js/equalheight.js')}}"></script>
    <script src="{{asset('assets/js/imagesloaded.js')}}"></script>
    <script src="{{asset('assets/js/jquery.stellar.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.countTo.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.shuffle.min.js')}}"></script>
    <script src="{{asset('assets/js/masonry.pkgd.min.js')}}"></script>
    <script src="{{asset('assets/js/twitterFetcher.min.js')}}"></script>
    <script src="{{asset('assets/flexSlider/jquery.flexslider-min.js')}}"></script>
    <script src="{{asset('assets/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('assets/js/scripts.js')}}"></script>

    @yield('js-plus')


  </body>

  </html>