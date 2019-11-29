@extends('landing.app.app')

@section('title')
<title>Primasukses | Detail Artikel</title>
@endsection

@section('konten')

@section('title-konten')
<h1 class="white-text">Judul Artikel</h1>
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
						<h2 class="entry-title">Judul Artkel</h2>
						<div class="thumb-wrapper">
							<img src="assets/img/blog/blog-1.jpg" class="img-responsive" alt="" >
						</div>
						<div class="entry-content">
							<p>Maecenas varius finibus orci vel dignissim. Nam posuere, magna pellentesque accumsan tincidunt, libero lorem convallis lectus, tincidunt accumsan enim ex ut sem. Ut in augue congue, tempus urna sit amet, condimentum lorem. Pellentesque est sem, semper sit amet velit et, commodo fringilla turpis. Aenean quam erat, eleifend quis congue vitae, interdum vitae risus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque sed viverra nulla.</p>

							<p>Maecenas congue risus enim, a bibendum erat sodales non. Aliquam sodales nunc id nisi scelerisque, eu semper neque condimentum. Suspendisse at purus eget velit volutpat consequat. Sed sodales, enim a pretium euismod, dui nunc venenatis enim, a hendrerit diam mauris sed ligula. Integer malesuada velit velit, et rhoncus velit finibus eu. Nam faucibus nulla lectus, eu laoreet mi rhoncus sed. Suspendisse iaculis mollis faucibus. Phasellus nisi ex, lacinia ac velit eget, congue ultrices ante. Vestibulum a ex dui. Etiam eget ex sodales, semper urna et, faucibus nisi. Etiam vehicula, elit in efficitur pretium, quam quam pellentesque tellus, vel laoreet erat leo id tortor. Morbi lobortis erat non ipsum hendrerit, non venenatis erat tempus. Nunc laoreet malesuada dolor, nec iaculis mi suscipit hendrerit. Aliquam arcu magna.</p>
						</div>
					</article>
				</div>
			</div>

			<div class="col-md-4">
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

	</div>
</section>


@endsection