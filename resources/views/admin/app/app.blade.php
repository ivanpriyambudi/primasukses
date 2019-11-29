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

  @include('admin.app.app-loader')

  <aside id="slide-out" class="side-nav white fixed">
    <div class="side-nav-wrapper">
      <div class="sidebar-profile">
        <div class="sidebar-profile-image">
          <img src="assets/images/profile-image.png" class="circle" alt="">
        </div>
        <div class="sidebar-profile-info">
          <a href="javascript:void(0);" class="account-settings-link">
            <span>Admin<i class="material-icons right">arrow_drop_down</i></span>
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

          'AdminDashboard'

          )) ? 'active' : '' }}
          ">
          <a class="waves-effect waves-grey" href="{{route('AdminDashboard')}}">
            <i class="material-icons">dashboard</i>Dashboard
          </a>
        </li>

        {{-- paket --}}

        <li class="no-padding
        {{ (request()->routeIs(

          'AdminShowPaket',
          'AdminAddPaket'

          )) ? 'active' : '' }}
          ">
          <a class="collapsible-header waves-effect waves-grey 
          {{ (request()->routeIs(

            'AdminShowPaket',
            'AdminAddPaket'

            )) ? 'active' : '' }}
            ">
            <i class="material-icons">work</i>Paket<i class="nav-drop-icon material-icons">keyboard_arrow_right</i>
          </a>
          <div class="collapsible-body">
            <ul>
              <li class="
              {{ (request()->routeIs(

                'AdminShowPaket'

                )) ? 'active' : '' }}
                ">
                <a href="{{route('AdminShowPaket')}}">Tabel Paket</a>
              </li>
              <li class="
              {{ (request()->routeIs(

                'AdminAddPaket'

                )) ? 'active' : '' }}
                "><a href="{{route('AdminAddPaket')}}">Tambah Paket</a></li>
              </ul>
            </div>
          </li>

          {{-- artikel --}}

          <li class="no-padding
          {{ (request()->routeIs(

            'AdminShowArtikel',
            'AdminAddArtikel'

            )) ? 'active' : '' }}
            ">
            <a class="collapsible-header waves-effect waves-grey 
            {{ (request()->routeIs(

              'AdminShowArtikel',
              'AdminAddArtikel'

              )) ? 'active' : '' }}
              ">
              <i class="material-icons">assignment</i>Artikel<i class="nav-drop-icon material-icons">keyboard_arrow_right</i>
            </a>
            <div class="collapsible-body">
              <ul>
                <li class="
                {{ (request()->routeIs(

                  'AdminShowArtikel'

                  )) ? 'active' : '' }}
                  ">
                  <a href="{{route('AdminShowArtikel')}}">Tabel Artikel</a>
                </li>
                <li class="
                {{ (request()->routeIs(

                  'AdminAddArtikel'

                  )) ? 'active' : '' }}
                  "><a href="{{route('AdminAddArtikel')}}">Tambah Artikel</a></li>
                </ul>
              </div>
            </li>

            {{-- User --}}

            <li class="no-padding
            {{ (request()->routeIs(

              'AdminShowUser',
              'AdminAddUser'

              )) ? 'active' : '' }}
              ">
              <a class="collapsible-header waves-effect waves-grey 
              {{ (request()->routeIs(

                'AdminShowUser',
                'AdminAddUser'

                )) ? 'active' : '' }}
                ">
                <i class="material-icons">supervised_user_circle</i>User<i class="nav-drop-icon material-icons">keyboard_arrow_right</i>
              </a>
              <div class="collapsible-body">
                <ul>
                  <li class=" 
                  {{ (request()->routeIs(

                    'AdminShowUser'

                    )) ? 'active' : '' }}
                    ">
                    <a href="{{route('AdminShowUser')}}">Tabel User</a>
                  </li>
                  <li class="
                  {{ (request()->routeIs(

                    'AdminAddUser'

                    )) ? 'active' : '' }}
                    "><a href="{{route('AdminAddUser')}}">Tambah User</a></li>
                  </ul>
                </div>
              </li>

              {{-- feedback --}}

              <li class="no-padding
              {{ (request()->routeIs(

                'AdminShowfFedback'

                )) ? 'active' : '' }}
                ">
                <a class="collapsible-header waves-effect waves-grey 
                {{ (request()->routeIs(

                  'AdminShowfFedback'

                  )) ? 'active' : '' }}
                  ">
                  <i class="material-icons">speaker_notes</i>Feedback<i class="nav-drop-icon material-icons">keyboard_arrow_right</i>
                </a>
                <div class="collapsible-body">
                  <ul>
                    <li class="no-padding 
                    {{ (request()->routeIs(

                      'AdminShowfFedback'

                      )) ? 'active' : '' }}
                      ">
                      <a href="{{route('AdminShowfFedback')}}">Tabel Feedback</a>
                    </li>
                    <li><a href="#">Tambah Feedback</a></li>
                  </ul>
                </div>
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