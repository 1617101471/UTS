@extends('layouts.app')
@section('content')
	<div class="row">
		<div class="container">
			<div class="col-md-12">
				<div class="panel panel-primary">
					<div class="panel-heading">Show Data Barang
					<div class="panel-title pull-right">
						<a href="{{route('barang.index')}}">Kembali</a>
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

						<div class="form-group {{$errors->has('satuan') ? 'has-error' : ''}}}">
							<label class="control-label">Satuan</label>
							<input type="text" name="satuan" class="form-control" value="{{$posts->satuan}}" readonly>
						</div>

						<div class="form-group {{$errors->has('harga_beli') ? 'has-error' : ''}}}">
							<label class="control-label">Harga Beli</label>
							<input type="text" name="harga_beli" class="form-control" value="{{$posts->harga_beli}}" readonly>
						</div>
						<div class="form-group {{$errors->has('harga_jual') ? 'has-error' : ''}}}">
							<label class="control-label">Harga Jual</label>
							<input type="text" name="harga_jual" class="form-control" value="{{$posts->harga_jual}}" readonly>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection