@extends('layouts.app')
@section('content')
	<div class="row">
		<div class="container">
			<div class="col-md-12">
				<div class="panel panel-primary">
					<div class="panel-heading">Show Data Transaksi
					<div class="panel-title pull-right">
						<a href="{{route('transaksi.index')}}">Kembali</a>
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

						<div class="form-group {{$errors->has('tanggal_beli') ? 'has-error' : ''}}}">
							<label class="control-label">Tanggal Beli</label>
							<input type="text" name="tanggal_beli" class="form-control" value="{{$posts->tanggal_beli}}" readonly>
						</div>

						<div class="form-group {{$errors->has('satuan') ? 'has-error' : ''}}}">
							<label class="control-label">Satuan</label>
							<input type="text" name="satuan" class="form-control" value="{{$posts->satuan}}" readonly>
						</div>
						<div class="form-group {{$errors->has('harga') ? 'has-error' : ''}}}">
							<label class="control-label">Harga</label>
							<input type="text" name="harga" class="form-control" value="{{$posts->harga}}" readonly>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection