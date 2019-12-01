@extends('siswa.app.app')

@section('title')
<title>Primasukses | Detail Paket</title>
@endsection

@section('title-page')
Detail Nama Paket Bimbel
@endsection
@section('konten')

<div class="row">
	<div class="col s6">
		<div class="card">
			<div class="card-content">
				<ul class="collection with-header">
					<li class="collection-header"><h4>Nama Paket</h4></li>
					<li class="collection-item">
						<span class="card-title">Deskripsi</span><br>
						<p>Deskripsi ....</p>
					</li>
					<li class="collection-item"><b>Harga :</b> Rp. 50.000,00</li>
					<li class="collection-item"><b>Jenjang :</b> Jenjang</li>
					<li class="collection-item"><b>Pengajar :</b> Pengajar</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="col s6">
		<div class="card">
			<div class="card-content">
				<img class="materialboxed responsive-img" src="assets/images/card-image.jpg" alt="">
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col s12">
		<div class="card-panel blue darken-2">
			<div class="row valign-wrapper">
				<div class="col s8">
					<span class="white-text">
						<h4>Hello!! Nama</h4>
						Masa Bimbel anda sudah selesai, silahkan mengisi Feedback pada link berikut.
					</span>
				</div>
				<div class="col s4 valign">
					<a class="waves-effect waves-light btn">Feedback</a>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection