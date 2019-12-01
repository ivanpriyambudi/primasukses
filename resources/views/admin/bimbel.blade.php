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
						@php
						$no=1;
						@endphp
						@foreach($data as $dt)
						<tr>
							<td>{{$no++}}</td>

							<td>{{\App\Paket::where('id',$dt->id_paket)->value('nama')}}</td>
							<td>{{\App\User::where('id',$dt->id_user)->value('nama')}}</td>
							
							<td>{{$dt->status}}</td>
							
							<td>
								@if($dt->status=='belum aktif')
								<a href="{{route('terima',$dt->id)}}" class="waves-effect waves-light btn blue darken-1 modal-trigger">Terima</a>
								@endif
								@if($dt->status=='aktif')
								<a href="{{route('selesai',$dt->id)}}" class="waves-effect waves-light btn green darken-1 modal-trigger">Selesai</a>
								@endif
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