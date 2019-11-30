@extends('admin.app.app')

@section('title')
<title>Primasukses | Feedback</title>
@endsection

@section('title-page')
Feedback
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
							<th>Nama</th>
							<th>Isi</th>
							<th class="b-ta">Action</th>
						</tr>
					</thead>
					<tfoot>
						<tr>
							<th>No</th>
							<th>Paket</th>
							<th>Nama</th>
							<th>Isi</th>
							<th class="b-ta">Action</th>
						</tr>
					</tfoot>
					<tbody>
						<tr>
							<td>1</td>
							<td>System Architect</td>
							<td>Edinburgh</td>
							<td>61</td>
							<td class="b-ta">
								<a class="waves-effect waves-light btn red">Hapus</a>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

@endsection