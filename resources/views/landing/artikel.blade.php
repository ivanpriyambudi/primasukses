@extends('landing.app.app')

@section('title')
<title>Primasukses | Artikel</title>
@endsection

@section('konten')

@section('title-konten')
<h1 class="white-text">Artikel</h1>
@endsection
@section('title-konten2')
<li class="active">Artikel</li>
@endsection

<section class="section-padding default-blog grid-blog">
	<div class="container">

		<div class="row">
			<div class="col-md-9">
				<div class="row">

					<div class="col-md-6">
						<article class="post-wrapper">
							<div class="thumb-wrapper">
								<img src="assets/img/blog/blog-3.jpg" class="img-responsive" alt="" >
								<div class="entry-header">
									<h2 class="entry-title">
										<a href="{{route('HomeArtikelDetail')}}">super duper stantaer tittle goes here</a>
									</h2>
								</div>
							</div>
							<div class="entry-content">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							</div>
						</article>
					</div>

				</div>
			</div>
			<div class="col-md-3">
				<div class="tt-sidebar-wrapper" role="complementary">

					<div class="widget widget_categories">
						<h3 class="widget-title">Recent Post</h3>   
						<ul>
							<li><a href="#">Technology</a></li>
							<li><a href="#">Media</a></li>
						</ul>
					</div>

				</div>

			</div>

		</div>

		<ul class="pagination post-pagination text-center mt-50">
			<li><a href="#." class="waves-effect waves-light"><i class="fa fa-angle-left"></i></a></li>
			<li><span class="current waves-effect waves-light">1</span></li>
			<li><a href="#." class="waves-effect waves-light"><i class="fa fa-angle-right"></i></a></li>
		</ul>

	</div>
</section>


@endsection