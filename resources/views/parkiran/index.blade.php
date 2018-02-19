@extends('layouts.app')
@section('content')
	<div class="row">
		<div class="container">
			<div class="col-md-12">
				<div class="panel panel-primary">
					<div class="panel-heading">Data Parkiran
					<div class="panel-title pull-right">
						<a href="{{route('parkiran.create')}}">Tambah</a>
					</div>
					</div>
					<div class="panel-body">
						<div class="table-responsive">
							<table class="table">
								<thead>
									<tr>
										<th>No</th>
										<th>Plat Nomor</th>
										<th>Nama Pemilik</th>
										<th>Merk Kendaraan</th>
										<th>Jam Masuk</th>
										<th>Jam Keluar</th>
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
										<td>{{$data->plat_nomor}}</td>
										<td><p>{{$data->nama_pemilik}}</p></td>
										<td><p>{{$data->merk_kendaraan}}</p></td>
										<td><p>{{$data->jam_masuk}}</p></td>
										<td><p>{{$data->jam_keluar}}</p></td>
										<td>
											<a class="btn btn-warning" href="{{route('parkiran.edit', $data->id)}}">Edit</a>
										</td>
										<td>
											<a href="{{route('parkiran.show', $data->id)}}" class="btn btn-success">Show</a>
										</td>
										<td>
											<form method="post" action="{{route('parkiran.destroy', $data->id)}}">
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