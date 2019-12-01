@extends('landing.app.app')

@section('title')
<title>Primasukses | About</title>
@endsection

@section('konten')

@section('title-konten')
<h1 class="white-text">About</h1>
@endsection
@section('title-konten2')
<li class="active">About</li>
@endsection

<section class="section-padding">
  <div class="container">
  	@foreach($about as $ab)
    <p>{{$ab->detail}}</p>
    @endforeach
  </div>
</section>

@endsection