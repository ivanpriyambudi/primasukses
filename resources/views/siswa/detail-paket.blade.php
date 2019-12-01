@extends('siswa.app.app')

@section('title')
<title>Primasukses | Detail Paket</title>
@endsection

@section('title-page')
Detail Nama Paket Bimbel
@endsection
@section('konten')
@foreach($data as $dt)
<div class="row">
	<div class="col s6">
		<div class="card">
			<div class="card-content">
				<ul class="collection with-header">
					<li class="collection-header"><h4>{{$dt->nama}}</h4></li>
					<li class="collection-item">
						<span class="card-title">Deskripsi</span><br>
						<p>{{$dt->detail}}</p>
					</li>
					<li class="collection-item"><b>Harga :</b> Rp. {{$dt->harga}}</li>
					<li class="collection-item"><b>Jenjang :</b> {{$dt->jenjang}}</li>
					<li class="collection-item"><b>Pengajar :</b> {{\App\Pengajar::where('id_paket',$dt->id)->value('nama')}}</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="col s6">
		<div class="card">
			<div class="card-content">
				<img class="materialboxed responsive-img" src="../../{{$dt->gambar}}" alt="">
			</div>
		</div>
	</div>
</div>
@endforeach
@if($status=='selesai')
<div class="row">
	<div class="col s12">
		<div class="card-panel blue darken-2">
			<div class="row valign-wrapper">
				<div class="col s8">
					<span class="white-text">
						<h4>Hello, {{Auth::guard('user')->user()->nama}}</h4>
						Masa Bimbel anda sudah selesai, silahkan mengisi Feedback pada link berikut.
					</span>
				</div>
				<div class="col s4 valign">
					
					
					<a href="#modal" class="waves-effect waves-light btn modal-trigger">Isi Feedback</a>
					
					
				</div>
			</div>
		</div>
	</div>
</div>
@endif
@foreach($data as $dt)
{{-- modal Edit --}}
<div id="modal" class="modal">
	<div class="modal-content">
		<h4>Feedback</h4>
		<div class="row">
			<div class="col s12">
				<div class="card">
					<div class="card-content">
						<div class="row">
							<form action="{{route('feedback')}}" method="POST" class="col s12">
								@csrf
								<div class="row">
									
									<input type="hidden" name="paket" value="{{$dt->id}}">
									<input type="hidden" name="user" value="{{Auth::guard('user')->user()->id}}">
									<div class="input-field col s12">
										<textarea name="detail" id="detail" class="materialize-textarea"></textarea>
										<label for="detail">Kritik dan saran</label>
									</div>
									<div class="input-field col s12 center">
										<button type="submit" class="waves-effect waves-light btn b-sub">Submit</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
	<div class="modal-footer">
		<a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Close</a>
	</div>
</div>
{{-- modal Edit --}}
@endforeach
@endsection