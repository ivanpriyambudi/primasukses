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
							<th>Nama Siswa</th>
							<th>Nama Pengajar</th>
							<th>Isi</th>
							<th class="b-ta">Action</th>
						</tr>
					</thead>
					<tfoot>
						<tr>
							<th>No</th>
							<th>Paket</th>
							<th>Nama Siswa</th>
							<th>Nama Pengajar</th>
							<th>Isi</th>
							<th class="b-ta">Action</th>
						</tr>
					</tfoot>
					<tbody>
						<tr>
							@php
						$no=1;
						@endphp
						@foreach($data as $dt)
						<tr>
							<td>{{$no++}}</td>
							
							<td>{{\App\Paket::where('id',$dt->id_paket)->value('nama')}}</td>
							<td>{{\App\User::where('id',$dt->id_user)->value('nama')}}</td>
							<td>{{\App\Pengajar::where('id_paket',$dt->id_paket)->value('nama')}}</td>
							<th>{{$dt->isi}}</th>
							<td class="b-ta">
								<a href="{{route('hapusfeedback',$dt->id)}}" class="waves-effect waves-light btn red">Hapus</a>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

@endsection