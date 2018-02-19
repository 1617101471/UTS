@extends('layouts.app')
@section('content')
	<div class="row">
		<div class="container">
			<div class="col-md-12">
				<div class="panel panel-primary">
					<div class="panel-heading">Show Data Supplier
					<div class="panel-title pull-right">
						<a href="{{route('supplier.index')}}">Kembali</a>
					</div>
					</div>
					<div class="panel-body">
						<div class="form-group">
							<label class="control-label">Kode Barang</label>
							<input type="text" name="kode_barang" class="form-control" value="{{$posts->kode_barang}}" readonly>
						</div>

						<div class="form-group {{$errors->has('nama_barang') ? 'has-error' : ''}}}">
							<label class="control-label">Nama Barang</label>
							<input type="text" name="nama_barang" class="form-control" value="{{$posts->nama_barang}}" readonly>
						</div>

						<div class="form-group {{$errors->has('alamat') ? 'has-error' : ''}}}">
							<label class="control-label">Alamat Supplier</label>
							<textarea type="tetx" name="alamat" class="form-control" readonly>{{$posts->alamat}}</textarea>
						</div>

						<div class="form-group {{$errors->has('perusahaan') ? 'has-error' : ''}}}">
							<label class="control-label">Perusahaan Supplier</label>
							<input type="text" name="perusahaan" class="form-control" value="{{$posts->perusahaan}}" readonly>
						</div>
						<div class="form-group {{$errors->has('no_telepon') ? 'has-error' : ''}}}">
							<label class="control-label">No Telepon Supplier</label>
							<input type="text" name="no_telepon" class="form-control" value="{{$posts->no_telepon}}" readonly>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection