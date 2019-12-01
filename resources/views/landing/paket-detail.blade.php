@extends('landing.app.app')

@section('title')
<title>Primasukses | Detail Paket Bimbel</title>
@endsection

@section('konten')

@foreach($paket as $pak)

@section('title-konten')
<h1 class="white-text">{{$pak->nama}}</h1>
@endsection
@section('title-konten2')
<li>Paket Bimbel </li>
<li class="active">{{$pak->nama}}</li>
@endsection

<section class="blog-section section-padding">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="posts-content single-post">

					<article class="post-wrapper">

						<header class="entry-header-wrapper clearfix">

							<div class="entry-header">
								<h2 class="entry-title">{{$pak->nama}}</h2>
							</div>

						</header><!-- /.entry-header-wrapper -->

						<div class="thumb-wrapper">
							<img src="../../{{$pak->gambar}}" class="img-responsive" alt="" >
						</div><!-- .post-thumb -->


						<div class="entry-content">
							<p>{{$pak->detail}}</p>
						</div><!-- .entry-content -->


						<footer class="entry-footer">

							<div class="promo-box border-box">
								<div class="promo-info">
									<h2 class="text-extrabold text-uppercase">{{$pak->nama}}</h2>
									<h1><b>Rp.</b> {{$pak->harga}}</h1>
								</div>
								<div class="promo-btn">
									@auth('user')
									<a href="#modal1" class="btn btn-lg waves-effect waves-light">Daftar Sekarang</a>
									@endauth
								</div>
							</div>							

						</footer>

					</article>

				</div>
			</div>

		</div>
	</div>
</section>

@endforeach

@endsection
