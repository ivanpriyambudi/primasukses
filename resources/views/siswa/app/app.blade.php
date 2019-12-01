<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Title -->
  @yield('title')

  <!-- Styles -->
  <link type="text/css" rel="stylesheet" href="{{asset('assetss/plugins/materialize/css/materialize.min.css')}}"/>
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="{{asset('assetss/plugins/material-preloader/css/materialPreloader.min.css')}}" rel="stylesheet">
  <link href="{{asset('assetss/plugins/datatables/css/jquery.dataTables.min.css')}}" rel="stylesheet">        

  <!-- Theme Styles -->
  <link href="{{asset('assetss/css/alpha.min.css')}}" rel="stylesheet" type="text/css"/>
  <link href="{{asset('assetss/css/custom.css')}}" rel="stylesheet" type="text/css"/>

</head>
<body>

  @include('siswa.app.app-loader')

  <aside id="slide-out" class="side-nav white fixed">
    <div class="side-nav-wrapper">
      <div class="sidebar-profile">
        <div class="sidebar-profile-image">
          <img src="assets/images/profile-image.png" class="circle" alt="">
        </div>
        <div class="sidebar-profile-info">
          <a href="javascript:void(0);" class="account-settings-link">
            <span>SISWA<i class="material-icons right">arrow_drop_down</i></span>
          </a>
        </div>
      </div>
      <div class="sidebar-account-settings">
        <ul>
          <li class="no-padding">
            <a class="waves-effect waves-grey" href="/logout"><i class="material-icons">exit_to_app</i>Sign Out</a>
          </li>
        </ul>
      </div>
      <ul class="sidebar-menu collapsible collapsible-accordion" data-collapsible="accordion">

        <li class="no-padding 
        {{ (request()->routeIs(

          'SiswaDashboard'

          )) ? 'active' : '' }}
          ">
          <a class="waves-effect waves-grey" href="{{route('SiswaDashboard')}}">
            <i class="material-icons">dashboard</i>Dashboard
          </a>
        </li>

        {{-- User --}}

        <li class="no-padding
        {{ (request()->routeIs(

          'SiswaEditProfile'

          )) ? 'active' : '' }}
          ">
          <a class="waves-effect waves-grey active" href="{{route('SiswaEditProfile')}}"><i class="material-icons">edit</i>Edit Profile</a>
        </li>

        {{-- Paket --}}

        <li class="no-padding
        {{ (request()->routeIs(

          'SiswaShowPaket',
          'SiswaDetailPaket'

          )) ? 'active' : '' }}
          ">
          <a class="waves-effect waves-grey active" href="{{route('SiswaShowPaket')}}"><i class="material-icons">work</i>Paket Bimbel Anda</a>
        </li>

      </ul>
    </div>
  </aside>
  <main class="mn-inner">
    <div class="row">
      <div class="col s12">
        <div class="page-title">@yield('title-page')</div>
      </div>
    </div>

    @yield('konten')

  </main>
</div>
<div class="left-sidebar-hover"></div>

<!-- Javascripts -->
<script src="{{asset('assetss/plugins/jquery/jquery-2.2.0.min.js')}}"></script>
<script src="{{asset('assetss/plugins/materialize/js/materialize.min.js')}}"></script>
<script src="{{asset('assetss/plugins/material-preloader/js/materialPreloader.min.js')}}"></script>
<script src="{{asset('assetss/plugins/jquery-blockui/jquery.blockui.js')}}"></script>
<script src="{{asset('assetss/js/alpha.min.js')}}"></script>
<script src="{{asset('assetss/plugins/datatables/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assetss/js/pages/table-data.js')}}"></script>

@yield('js-plus')

</body>
</html>