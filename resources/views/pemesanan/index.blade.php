@extends('layouts.app')
@section('content')
	<div class="row">
		<div class="container">
			<div class="col-md-12">
				<div class="panel panel-primary">
					<div class="panel-heading">Data Pemesanan
					<div class="panel-title pull-right">
						<a href="{{route('pemesanan.create')}}">Tambah</a>
					</div>
					</div>
					<div class="panel-body">
						<div class="table-responsive">
							<table class="table">
								<thead>
									<tr>
										<th>No</th>
										<th>Kode Barang</th>
										<th>Nama Barang</th>
										<th>Tanggal Pembayaran</th>
										<th>Satuan</th>
										<th>Harga Minta</th>
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
										<td><p>{{$data->nama_barang}}</p></td>
										<td><p>{{$data->tanggal_pembayaran}}</p></td>
										<td><p>{{$data->satuan}}</p></td>
										<td><p>Rp.{{$data->harga_minta}}</p></td>
										<td>
											<a class="btn btn-warning" href="{{route('pemesanan.edit', $data->id)}}">Edit</a>
										</td>
										<td>
											<a href="{{route('pemesanan.show', $data->id)}}" class="btn btn-success">Show</a>
										</td>
										<td>
											<form method="post" action="{{route('pemesanan.destroy', $data->id)}}">
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