@extends('admin.app.app')

@section('title')
<title>Primasukses | Add Contact</title>
@endsection

@section('title-page')
Contact
@endsection
@section('konten')

<div class="row">
	<div class="col s12">
		<div class="card">
			<div class="card-content">
				<span class="card-title">Edit Contact</span><br>
				<div class="row">
					<form action="" method="POST" class="col s12">
						<div class="row">
							<div class="input-field col s6">
								<input name="email" id="email" type="email" class="validate">
								<label for="email">Email</label>
							</div>
							<div class="input-field col s6">
								<input name="telfon" id="telfon" type="number" class="validate">
								<label for="telfon">Telfon</label>
							</div>
							<div class="input-field col s12">
								<textarea name="alamat" id="alamat" class="materialize-textarea"></textarea>
								<label for="alamat">Alamat</label>
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