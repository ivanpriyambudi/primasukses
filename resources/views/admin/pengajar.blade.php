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
						@php
						$no=1;
						@endphp
						@foreach($data as $dt)
						<tr>
							<td>{{$no++}}</td>
							<th>{{$dt->nama}}</th>
							<td>{{$dt->nip}}</td>
							<td>{{\App\Paket::where('id',$dt->id_paket)->value('nama')}}</td>
							<td>{{\App\Paket::where('id',$dt->id_paket)->value('jenjang')}}</td>
							
							<td class="b-ta">
								<a class="waves-effect waves-light btn orange modal-trigger" href="#modal{{$dt->id}}">Edit</a>
								<a href="{{url('admin/hapus-pengajar')}}/{{$dt->id}}" class="waves-effect waves-light btn red">Hapus</a>
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
		<h4>Edit Pengajar</h4>
		
		<div class="row">
			<div class="col s12">
				<div class="card">
					<div class="card-content">
						<span class="card-title">Tambah Pengajar Baru</span><br>
						<div class="row">
							<form action="{{route('editpengajar')}}" method="POST" class="col s12">
								@csrf
								<div class="row">
									<div class="input-field col s6">
										<input name="nama" id="nama" type="text" class="validate" value="{{$dt->nama}}">
										<input name="id" id="nama" type="hidden" class="validate" value="{{$dt->id}}">
										<label for="nama">Nama Pengajar</label>
									</div>
									<div class="input-field col s6">
										<input name="nip" id="nip" type="text" class="validate" value="{{$dt->nip}}" readonly="">
										<label for="nip">NIP Pengajar</label>
									</div>
									<div class="input-field col s6">
										<select name="paket">
											<option value="" disabled selected>Pilih Paket</option>
											@foreach($paket as $pk)
											<option value="{{$pk->id}}">{{$pk->nama}} - {{$pk->jenjang}}</option>
											@endforeach
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
@endforeach
@endsection