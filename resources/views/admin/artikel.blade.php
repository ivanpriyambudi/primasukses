@extends('admin.app.app')

@section('title')
<title>Primasukses | Artikel</title>
@endsection

@section('title-page')
Artikel
@endsection
@section('konten')

<div class="row">
	<div class="col s12 m12 l12">
		<div class="card">
			<div class="card-content">
				<table id="example" class="display responsive-table datatable-example">
					<thead>
						<tr>
							<th>No</th>
							<th>Judul</th>
							<th>Detail</th>
							<th>Gambar</th>
							<th class="b-ta">Action</th>
						</tr>
					</thead>
					<tfoot>
						<tr>
							<th>No</th>
							<th>Judul</th>
							<th>Detail</th>
							<th>Gambar</th>
							<th class="b-ta">Action</th>
						</tr>
					</tfoot>
					<tbody>
						@php
						$no=1;
						@endphp
						@foreach($data as $dt)
						<tr>
							<td>{{$no++}}</td>
							<th>{{$dt->judul}}</th>
							<td>{{$dt->gambar}}</td>
							<td>{{$dt->detail}}</td>
							<td class="b-ta">
								<a class="waves-effect waves-light btn orange modal-trigger" href="#modal{{$dt->id}}">Edit</a>
								<a class="waves-effect waves-light btn red">Hapus</a>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

{{-- modal Edit --}}
<div id="modal1" class="modal">
	<div class="modal-content">
		<h4>Edit Artikel</h4>
		<div class="row">
			<div class="col s12">
				<div class="card">
					<div class="card-content">
						<div class="row">
							<form action="" method="POST" class="col s12">
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

	</div>
	<div class="modal-footer">
		<a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Close</a>
	</div>
</div>
{{-- modal Edit --}}

@endsection