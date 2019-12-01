@extends('admin.app.app')

@section('title')
<title>Primasukses | Bimbel</title>
@endsection

@section('title-page')
Bimbel
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
							<th>Paket</th>
							<th>Nama Siswa</th>
							<th>Status</th>
							<th class="b-ta">Action</th>
						</tr>
					</thead>
					<tfoot>
						<tr>
							<th>No</th>
							<th>Paket</th>
							<th>Nama Siswa</th>
							<th>Status</th>
							<th class="b-ta">Action</th>
						</tr>
					</tfoot>
					<tbody>
						<tr>
							<td>1</td>
							<td>Paket A</td>
							<td>User</td>
							<td>status</td>
							<td>
								<a class="waves-effect waves-light btn blue darken-1 modal-trigger">Terima</a>
								<a class="waves-effect waves-light btn green darken-1 modal-trigger">Selesai</a>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

@endsection