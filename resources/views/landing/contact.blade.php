@extends('landing.app.app')

@section('title')
<title>Primasukses | Contact</title>
@endsection

@section('konten')

@section('title-konten')
<h1 class="white-text">Contact</h1>
@endsection
@section('title-konten2')
<li class="active">Contact</li>
@endsection

@foreach($contact as $con)

<section class="section-padding">
  
  <div class="container">

    <div class="row">

      <div class="col-md-12 contact-info">

        <address>
          <i class="material-icons brand-color">&#xE55F;</i>
          <div class="address">
            <p>{{$con->alamat}}</p>
          </div>

          <i class="material-icons brand-color">&#xE61C;</i>
          <div class="phone">
            <p>Phone: {{$con->telfon}}</p>
          </div>

          <i class="material-icons brand-color">&#xE0E1;</i>
          <div class="mail">
            <p>{{$con->email}}</p>
          </div>
        </address>

      </div><!-- /.col-md-4 -->
    </div><!-- /.row -->
  </div>
</section>

@endforeach

@endsection