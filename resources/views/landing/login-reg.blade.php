@extends('landing.app.app')

@section('title')
<title>Primasukses | Join Us</title>
@endsection

@section('konten')

@section('title-konten')
<h1 class="white-text">Join Us</h1>
@endsection
@section('title-konten2')

@endsection

<section class="section-padding banner-wrapper login-alt banner-6 fullscreen-banner">
  <div class="container">

    <div class="login-wrapper">
      <div class="card-wrapper"></div>
      <div class="card-wrapper">
        <h1 class="title">Login</h1>
        <form action="/login" method="post">
          @csrf
          <div class="input-container">
            <input type="text" name="username" id="username" required="required"/>
            <label for="username">Username</label>
            <div class="bar"></div>
          </div>
          <div class="input-container">
            <input type="password" name="password" id="password" required="required"/>
            <label for="password">Password</label>
            <div class="bar"></div>
          </div>
          <div class="button-container">
            <button type="submit" class="btn btn-lg btn-block waves-effect waves-light">Login</button>
          </div>
        </form>
      </div>
      <div class="card-wrapper alt">
        <div class="toggle"></div>
        <h1 class="title">Register
          <div class="close"></div>
        </h1>
        <form action="/regis" method="post">
          @csrf
          <div class="row" style="margin: 0px;">
            <div class="col s6">
              <div class="input-container">
                <input name="nama" type="text" id="nama" required="required"/>
                <label for="nama">Nama Lengkap</label>
                <div class="bar"></div>
              </div>
              <div class="input-container">
                <input name="email" type="email" id="username" required="required"/>
                <label for="username">Email</label>
                <div class="bar"></div>
              </div>
              <div class="input-container">
                <input name="nomor" type="number" id="username" required="required"/>
                <label for="username">No Telepon</label>
                <div class="bar"></div>
              </div>
            </div>
            <div class="col s6">
             <div class="input-container">
              <input name="username" type="text" id="newusername" required="required"/>
              <label for="newusername">Username</label>
              <div class="bar"></div>
            </div>
            <div class="input-container">
              <input name="password" type="password" id="newpassword" required="required"/>
              <label for="newpassword">Password</label>
              <div class="bar"></div>
            </div>
            <div class="input-container" style="padding-top: 10px; margin-top: 80px;">
              <select name="jenjang" class="drop">
                <option value="" disabled selected>Pilih Jenjang</option>
                <option value="SD">SD</option>
                <option value="SMP">SMP</option>
                <option value="SMA">SMA</option>
              </select>
              <label style="top: -40px;">Jenjang</label>
              <div class="bar"></div>
            </div>

          </div>
        </div>

        <div class="button-container">
          <button type="submit" class="btn btn-lg btn-block white waves-effect waves-red">Register</button>
        </div>
      </form>
    </div>
  </div>

</div>
</section>

<br>
<br>

@section('js-plus')
<script>
  $('.toggle').on('click', function() {
    $('.login-wrapper').stop().addClass('active');
  });

  $('.close').on('click', function() {
    $('.login-wrapper').stop().removeClass('active');
  });

  $(document).ready(function() {
    $('select').material_select();
  });
</script>
@endsection

@endsection