@extends('admin.app.app')

@section('title')
<title>Primasukses | Paket</title>
@endsection

@section('title-page')
Paket
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
							<th>Nama</th>
							<th>Gambar</th>
							<th>Detail</th>
							<th>Harga</th>
							<th>Jenjang</th>
							<th class="b-ta">Action</th>
						</tr>
					</thead>
					<tfoot>
						<tr>
							<th>No</th>
							<th>Nama</th>
							<th>Gambar</th>
							<th>Detail</th>
							<th>Harga</th>
							<th>Jenjang</th>
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
							<th>{{$dt->nama}}</th>
							<td>{{$dt->gambar}}</td>
							<td>{{$dt->detail}}</td>
							<td>{{$dt->harga}}</td>
							<td>{{$dt->jenjang}}</td>
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

@foreach($data as $dt)
{{-- modal Edit --}}
<div id="modal{{$dt->id}}" class="modal">
	<div class="modal-content">
		<h4>Edit Paket</h4>
		
		<div class="row">
			<div class="col s12">
				<div class="card">
					<div class="card-content">
						<div class="row">
							<form action="" method="POST" class="col s12">
								<div class="row">
									<div class="input-field col s6">
										<input name="nama" id="nama" type="text" class="validate" value="{{$dt->nama}}">
										<label for="nama">Nama Paket</label>
									</div>
									<div class="input-field col s6">
										<input name="harga" id="harga" type="number" class="validate" value="{{$dt->harga}}">
										<label for="harga">Harga Paket</label>
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

	</div>
	<div class="modal-footer">
		<a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Close</a>
	</div>
</div>
{{-- modal Edit --}}
@endforeach

@endsection