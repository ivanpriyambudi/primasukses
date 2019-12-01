@extends('landing.app.app')

@section('title')
<title>Primasukses | Home</title>
@endsection

@section('konten')

<section class="section-padding list-news">
  <div class="container">
    <div class="text-center mb-80"><h2 class="section-title text-uppercase">Artikel Terkini</h2></div>

    <div class="row">

      @foreach($artikel as $art)
      <div class="col-md-6">
        <article class="post-wrapper list-article">
          <div class="hover-overlay brand-bg"></div>
          <div class="thumb-wrapper waves-effect waves-block waves-light" style="width: 40%;">
            <a href="#">
              <img src="{{ str_replace('public/','../../../', $art->gambar) }}" class="img-responsive" alt="" >
            </a>
          </div>
          <div class="blog-content">
            <header class="entry-header-wrapper">
              <div class="entry-header">
                <h2 class="entry-title">
                  <a href="#">{{$art->judul}}</a>
                </h2>
              </div>
            </header>
            <div class="entry-content">
              <p>{{ Str::limit($art->detail, 250, '...') }}</p>
            </div>
          </div>
        </article>
      </div>
      @endforeach

    </div>
  </div>
</section>

@endsection