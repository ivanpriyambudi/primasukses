@extends('admin.app.app')

@section('title')
<title>Primasukses | Add Paket</title>
@endsection

@section('title-page')
Paket
@endsection
@section('konten')

<div class="row">
	<div class="col s12">
		<div class="card">
			<div class="card-content">
				<span class="card-title">Tambah Paket Baru</span><br>
				<div class="row">
					<form action="" method="POST" class="col s12">
						<div class="row">
							<div class="input-field col s6">
								<input name="nama" id="nama" type="text" class="validate">
								<label for="nama">Nama Paket</label>
							</div>
							<div class="input-field col s6">
								<input name="harga" id="harga" type="number" class="validate">
								<label for="harga">Harga Paket</label>
							</div>
							<div class="input-field col s6">
								<select>
									<option value="" disabled selected>Pilih Jenjang</option>
									<option value="SD">SD</option>
									<option value="SMP">SMP</option>
									<option value="SMA">SMA</option>
								</select>
								<label>Jenjang</label>
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
								<label for="detail">Detail</label>
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