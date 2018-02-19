@extends('layouts.app')
@section('content')
	<div class="row">
		<div class="container">
			<div class="col-md-12">
				<div class="panel panel-primary">
					<div class="panel-heading">Data Pengiriman
					<div class="panel-title pull-right">
						<a href="{{route('pengiriman.create')}}">Tambah</a>
					</div>
					</div>
					<div class="panel-body">
						<div class="table-responsive">
							<table class="table">
								<thead>
									<tr>
										<th>No</th>
										<th>Kode Barang</th>
										<th>Tanggal Pengiriman</th>
										<th>Tanggal Penerima</th>
										<th>Alamat</th>
										<th>Cara Bayar</th>
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
										<td>{{$data->kode_barang}}</td>
										<td><p>{{$data->tanggal_pengiriman}}</p></td>
										<td><p>{{$data->tanggal_penerima}}</p></td>
										<td><p>{{$data->alamat}}</p></td>
										<td><p>{{$data->cara_bayar}}</p></td>
										<td>
											<a class="btn btn-warning" href="{{route('pengiriman.edit', $data->id)}}">Edit</a>
										</td>
										<td>
											<a href="{{route('pengiriman.show', $data->id)}}" class="btn btn-success">Show</a>
										</td>
										<td>
											<form method="post" action="{{route('pengiriman.destroy', $data->id)}}">
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