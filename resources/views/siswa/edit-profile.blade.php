@extends('siswa.app.app')

@section('title')
<title>Primasukses | Profile</title>
@endsection

@section('title-page')
Profile
@endsection
@section('konten')

<div class="row">
	<div class="col s12">
		<div class="card">
			<div class="card-content">
				<span class="card-title">Edit Profile</span><br>
				<div class="row">

					<form action="" method="POST" class="col s12">
						<div class="row">
							<div class="input-field col s6">
								<input name="nama" id="nama" type="text" class="validate" value="">
								<label for="nama">Nama Lengkap</label>
							</div>
							<div class="input-field col s6">
								<input name="username" id="username" type="text" class="validate" value="">
								<label for="username">Username</label>
							</div>
							<div class="input-field col s6">
								<input name="tlp" id="tlp" type="text" class="validate" value="">
								<label for="tlp">No Telepon</label>
							</div>
							<div class="input-field col s6">
								<input name="email" id="email" type="email" class="validate" value="">
								<label for="email">Email</label>
							</div>
							<div class="input-field col s6">
								<input name="password" id="password" type="password" class="validate" value="">
								<label for="password">Password</label>
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