@extends('siswa.app.app')

@section('title')
<title>Primasukses | Paket</title>
@endsection

@section('title-page')
Paket Bimbel Anda
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
							<th>{{\App\Paket::where('id',$dt->id_paket)->value('nama')}}</th>
							<td>{{\App\Paket::where('id',$dt->id_paket)->value('detail')}}</td>
							<td>{{\App\Paket::where('id',$dt->id_paket)->value('harga')}}</td>
							<td>{{\App\Paket::where('id',$dt->id_paket)->value('jenjang')}}</td>
							
							<td class="b-ta">
								<a href="{{route('SiswaDetailPaket',$dt->id)}}" class="waves-effect waves-light btn blue">Detail</a>
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