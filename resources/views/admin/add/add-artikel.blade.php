@extends('admin.app.app')

@section('title')
<title>Primasukses | Add Artikel</title>
@endsection

@section('title-page')
Artikel
@endsection
@section('konten')

<div class="row">
	<div class="col s12">
		<div class="card">
			<div class="card-content">
				<span class="card-title">Tambah Artikel Baru</span><br>
				<div class="row">
					<form action="{{route('PostAddArtikel')}}" method="POST" enctype="multipart/form-data" class="col s12">
						@csrf
						<div class="row">
							<div class="input-field col s6">
								<input name="judul" id="judul" type="text" class="validate">
								<label for="judul">Judul Artikel</label>
							</div>
							<div class="input-field col s6">
								<div class="file-field input-field">
									<div class="btn teal lighten-1">
										<span>Gambar</span>
										<input name="gambar" type="file" multiple>
									</div>
									<div class="file-path-wrapper">
										<input name="gambar" class="file-path validate" type="text" placeholder="Upload Gambar Artikel">
									</div>
								</div>
							</div>
							<div class="input-field col s12">
								<textarea name="detail" id="detail" class="materialize-textarea"></textarea>
								<label for="detail">Detail Artikel</label>
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