@extends('landing.app.app')

@section('title')
<title>Primasukses | Detail Artikel</title>
@endsection

@section('konten')

@section('title-konten')

@foreach($artikel as $art)

<h1 class="white-text">{{$art->judul}}</h1>
@endsection
@section('title-konten2')
<li><a href="{{route('HomeArtikel')}}">Artikel</a></li>
<li class="active">Detail Artikel</li>
@endsection

<section class="section-padding default-blog grid-blog">
	<div class="container">

		<div class="row">

			<div class="col-md-8">
				<div class="posts-content single-post">
					<article class="post-wrapper">
						<h2 class="entry-title">{{$art->judul}}</h2>
						<div class="thumb-wrapper">
							<img src="{{ str_replace('public/','../../../../', $art->gambar) }}" class="img-responsive" alt="" >
						</div>
						<div class="entry-content">
							<p>{{$art->detail}}</p>
						</div>
					</article>
				</div>
			</div>

			<div class="col-md-4">
				<div class="tt-sidebar-wrapper" role="complementary">
					<div class="widget widget_categories">
						<h3 class="widget-title">Recent Post</h3>   
						<ul>
							@foreach($recent as $re)
							<li><a href="{{route('HomeArtikelDetail', $re->id)}}">{{$re->judul}}</a></li>
							@endforeach
						</ul>
					</div>
				</div>
			</div>

		</div>

	</div>
</section>

@endforeach

@endsection