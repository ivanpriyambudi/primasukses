@extends('landing.app.app')

@section('title')
<title>Primasukses | Home</title>
@endsection

@section('konten')

<section class="section-padding list-news">
  <div class="container">
    <div class="text-center mb-80"><h2 class="section-title text-uppercase">Artikel Terkini</h2></div>

    <div class="row">

      <div class="col-md-6">
        <article class="post-wrapper list-article">
          <div class="hover-overlay brand-bg"></div>
          <div class="thumb-wrapper waves-effect waves-block waves-light">
            <a href="#">
              <img src="assets/img/blog/blog-20.jpg" class="img-responsive" alt="" >
            </a>
          </div>
          <div class="blog-content">
            <header class="entry-header-wrapper">
              <div class="entry-header">
                <h2 class="entry-title">
                  <a href="#">Ideas That Moved Us in 2015</a>
                </h2>
              </div>
            </header>
            <div class="entry-content">
              <p>Maecenas varius finibus orci vel dignissim. Nam posuere, magna pellentesque accumsan tincidunt, libero lorem convallis lectus</p>
            </div>
          </div>
        </article>
      </div>

    </div>
  </div>
</section>

@endsection