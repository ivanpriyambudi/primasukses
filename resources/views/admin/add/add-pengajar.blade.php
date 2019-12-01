@extends('admin.app.app')

@section('title')
<title>Primasukses | Add Pengajar</title>
@endsection

@section('title-page')
Pengajar
@endsection
@section('konten')

<div class="row">
	<div class="col s12">
		<div class="card">
			<div class="card-content">
				<span class="card-title">Tambah Pengajar Baru</span><br>
				<div class="row">
					<form action="{{route('PostAddPengajar')}}" method="POST" class="col s12">
						@csrf
						<div class="row">
							<div class="input-field col s6">
								<input name="nama" id="nama" type="text" class="validate">
								<label for="nama">Nama Pengajar</label>
							</div>
							<div class="input-field col s6">
								<input name="nip" id="nip" type="text" class="validate">
								<label for="nip">NIP Pengajar</label>
							</div>
							<div class="input-field col s6">
								<select name="paket">
									<option value="" disabled selected>Pilih Paket</option>
									@foreach($paket as $pk)
									<option value="{{$pk->id}}">{{$pk->nama}} - {{$pk->jenjang}}</option>
									@endforeach
								</select>
								<label>Paket</label>
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

@endsection