@extends('admin.app.app')

@section('title')
<title>Primasukses | Pengajar</title>
@endsection

@section('title-page')
Pengajar
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
							<th>NIP</th>
							<th>Paket</th>
							<th>Jenjang</th>
							<th class="b-ta">Action</th>
						</tr>
					</thead>
					<tfoot>
						<tr>
							<th>No</th>
							<th>Nama</th>
							<th>NIP</th>
							<th>Paket</th>
							<th>Jenjang</th>
							<th class="b-ta">Action</th>
						</tr>
					</tfoot>
					<tbody>
						<tr>
							<td>Tiger Nixon</td>
							<td>System Architect</td>
							<td>Edinburgh</td>
							<td>61</td>
							<td>2011/04/25</td>
							<td class="b-ta">
								<a class="waves-effect waves-light btn orange modal-trigger" href="#modal1">Edit</a>
								<a class="waves-effect waves-light btn red">Hapus</a>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

{{-- modal Edit --}}
<div id="modal1" class="modal">
	<div class="modal-content">
		<h4>Edit Pengajar</h4>
		
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
									<input type="hidden" name="id_paket" value="">
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