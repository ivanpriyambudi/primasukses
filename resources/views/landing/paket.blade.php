@extends('landing.app.app')

@section('title')
<title>Primasukses | Paket Bimbel</title>
@endsection

@section('konten')

@section('title-konten')
<h1 class="white-text">Paket Bimbel 
	{{ (request()->routeIs('HomePaketSD')) ? 'SD' : '' }}
	{{ (request()->routeIs('HomePaketSMP')) ? 'SMP' : '' }}
	{{ (request()->routeIs('HomePaketSMA')) ? 'SMA' : '' }}
</h1>
@endsection
@section('title-konten2')
<li>Paket Bimbel 
	{{ (request()->routeIs('HomePaketSD')) ? 'SD' : '' }}
	{{ (request()->routeIs('HomePaketSMP')) ? 'SMP' : '' }}
	{{ (request()->routeIs('HomePaketSMA')) ? 'SMA' : '' }}
</li>
@endsection

<section class="section-padding default-blog grid-blog">
	<div class="container">

		<div class="row">
			<div class="col-md-12">
				<div class="row">

					@if(request()->routeIs('HomePaketSD'))

					@foreach($sd as $s)
					<div class="col-md-4">
						<article class="post-wrapper">
							<div class="thumb-wrapper">
								<img src="../{{ $s->gambar }}" class="img-responsive" alt="" >
								<div class="entry-header">
									<h2 class="entry-title">
										<a href="{{route('HomePaketDetail', $s->id)}}">
											{{$s->nama}}
										</a>
									</h2>
								</div>
							</div>
							<div class="entry-content">
								<p>{{$s->detail}}</p>
							</div>
						</article>
					</div>
					@endforeach
					@endif
					@if(request()->routeIs('HomePaketSMP'))

					@foreach($smp as $sp)

					<div class="col-md-4">
						<article class="post-wrapper">
							<div class="thumb-wrapper">
								<img src="{{ str_replace('public/','../../../../', $sp->gambar) }}" class="img-responsive" alt="" >
								<div class="entry-header">
									<h2 class="entry-title">
										<a href="{{route('HomePaketDetail', $sp->id)}}">
											{{$sp->nama}}
										</a>
									</h2>
								</div>
							</div>
							<div class="entry-content">
								<p>{{$sp->detail}}</p>
							</div>
						</article>
					</div>
					@endforeach
					@endif
					@if(request()->routeIs('HomePaketSMA'))

					@foreach($sma as $sa)
					<div class="col-md-4">
						<article class="post-wrapper">
							<div class="thumb-wrapper">
								<img src="{{ str_replace('public/','../../../../', $sa->gambar) }}" class="img-responsive" alt="" >
								<div class="entry-header">
									<h2 class="entry-title">
										<a href="{{route('HomePaketDetail', $sa->id)}}">
											{{$sa->nama}}
										</a>
									</h2>
								</div>
							</div>
							<div class="entry-content">
								<p>{{$sa->detail}}</p>
							</div>
						</article>
					</div>
					@endforeach

					
					@endif


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