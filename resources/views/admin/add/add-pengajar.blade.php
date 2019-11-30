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
					<form action="" method="POST" class="col s12">
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
								<select>
									<option value="" disabled selected>Pilih Paket</option>
									<option value="SD">SD</option>
									<option value="SMP">SMP</option>
									<option value="SMA">SMA</option>
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