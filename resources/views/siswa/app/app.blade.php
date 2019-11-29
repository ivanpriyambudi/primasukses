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

  <style type="text/css">
    #container {
      padding-left: 300px;
    }

    #content {
      padding: 20px;
    }

    @media only screen and (max-width : 992px) {
      #container {
        padding-left: 0px;
      }
    }
  </style>

</head>

<body id="top" class="has-header-search">

 <header id="header" class="tt-nav nav-border-bottom">
  <div class="header-sticky brand-header">
    <div class="container">
      <div id="materialize-menu" class="menuzord">

        <a href="index.html" class="logo-brand">
          <h2 class="white-text"><b>Siswa</b></h2>
        </a>

        <ul class="menuzord-menu pull-right light">
          <li><a href="javascript:void(0)" style="line-height: 70px;">Akun Siswa</a>
            <ul class="dropdown">
              <li><a href="{{route('logout')}}">Logout</a></li>
            </ul>
          </li>
        </ul>

      </div>
    </div>
  </div>
</header>

<div id="container">

  <div id="menu">
    <ul id="slide-out" class="side-nav fixed" style="margin-top: 7rem; padding-top: 70px;">
      <li><a href="#"><i class="material-icons left pr-pt">dashboard</i>Dashboard</a></li>
    </ul>
  </div>

  <div id="content">
    
    @yield('konten')

  </div>

</div>

<!-- Preloader -->
<div id="preloader">
  <div class="preloader-position"> 
    <div class="progress">
      <div class="indeterminate"></div>
    </div>
  </div>
</div>
<!-- End Preloader -->  

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

<script>
  $('.button-collapse').sideNav({
    menuWidth: 300,
    edge: 'left',
    closeOnClick: false,
    draggable: true
  }
  ); 
</script>

@yield('js-plus')


</body>

</html>