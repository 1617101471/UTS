@extends('layouts.app')
@section('content')
	<div class="row">
		<div class="container">
			<div class="col-md-12">
				<div class="panel panel-primary">
					<div class="panel-heading">Data Karyawan
					<div class="panel-title pull-right">
						<a href="{{route('karyawan.create')}}">Tambah</a>
					</div>
					</div>
					<div class="panel-body">
						<div class="table-responsive">
							<table class="table">
								<thead>
									<tr>
										<th>No</th>
										<th>NIK</th>
										<th>Nama Karyawan</th>
										<th>Bagian</th>
										<th>Status</th>
										<th>Penghasilan</th>
										<th colspan="2">Action</th>
									</tr>
								</thead>
								<tbody>
									@php
										$no = 1;
									@endphp
									@foreach($posts as $data)
									<tr>
										<td>{{$no++}}</td>
										<td>{{$data->nik}}</td>
										<td><p>{{$data->nama_karyawan}}</p></td>
										<td><p>{{$data->bagian}}</p></td>
										<td><p>{{$data->status}}</p></td>
										<td><p>Rp.{{$data->penghasilan}}</p></td>
										<td>
											<a class="btn btn-warning" href="{{route('karyawan.edit', $data->id)}}">Edit</a>
										</td>
										<td>
											<a href="{{route('karyawan.show', $data->id)}}" class="btn btn-success">Show</a>
										</td>
										<td>
											<form method="post" action="{{route('karyawan.destroy', $data->id)}}">
												<input name="_token" type="hidden" value="{{csrf_token()}}">
												<input type="hidden" name="_method" value="DELETE">
												<button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin untuk menghapus data ini?')">Delete</button>
											</form>
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection