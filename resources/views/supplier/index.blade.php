@extends('layouts.app')
@section('content')
	<div class="row">
		<div class="container">
			<div class="col-md-12">
				<div class="panel panel-primary">
					<div class="panel-heading">Data Supplier
					<div class="panel-title pull-right">
						<a href="{{route('supplier.create')}}">Tambah</a>
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
										<th>Alamat Supplier</th>
										<th>Perusahaan Supplier</th>
										<th>No Telepon Supplier</th>
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
										<td><p>{{$data->alamat}}</p></td>
										<td><p>{{$data->perusahaan}}</p></td>
										<td><p>0{{$data->no_telepon}}</p></td>
										<td>
											<a class="btn btn-warning" href="{{route('supplier.edit', $data->id)}}">Edit</a>
										</td>
										<td>
											<a href="{{route('supplier.show', $data->id)}}" class="btn btn-success">Show</a>
										</td>
										<td>
											<form method="post" action="{{route('supplier.destroy', $data->id)}}">
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