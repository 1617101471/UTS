@extends('layouts.app')
@section('content')
	<div class="row">
		<div class="container">
			<div class="col-md-12">
				<div class="panel panel-primary">
					<div class="panel-heading">Tambah Data Pemesanan
					<div class="panel-title pull-right">
						<a href="{{route('pemesanan.index')}}">Kembali</a>
					</div>
					</div>
					<div class="panel-body">
						<form action="{{route('pemesanan.store')}}" method="post">
							{{csrf_field()}}
							<div class="form-group {{$errors->has('kode_barang') ? 'has-error' : ''}}">
								<label class="control-label">Kode Barang</label>
								<input type="text" class="form-control" name="kode_barang" required>
								@if ($errors->has('kode_barang'))
									<span class="help-blocks">
										<strong>{{$errors->first('kode_barang')}}</strong>
									</span>
								@endif
							</div>

							<div class="form-group {{$errors->has('nama_barang') ? 'has-error' : ''}}">
							<label class="control-label">Nama Barang</label>
								<input type="text" class="form-control" name="nama_barang" required>
								@if ($errors->has('nama_barang'))
									<span class="help-blocks">
										<strong>{{$errors->first('nama_barang')}}</strong>
									</span>
								@endif
							</div>

							<div class="form-group {{$errors->has('tanggal_pembayaran') ? 'has-error' : ''}}">
							<label class="control-label">Tanggal Pembayaran</label>
								<input type="date" class="form-control" name="tanggal_pembayaran" required>
								@if ($errors->has('tanggal_pembayaran'))
									<span class="help-blocks">
										<strong>{{$errors->first('tanggal_pembayaran')}}</strong>
									</span>
								@endif
							</div>

							<div class="form-group {{$errors->has('satuan') ? 'has-error' : ''}}">
							<label class="control-label">Satuan</label>
								<input type="text" class="form-control" name="satuan" required>
								@if ($errors->has('satuan'))
									<span class="help-blocks">
										<strong>{{$errors->first('satuan')}}</strong>
									</span>
								@endif
							</div>
							
							<div class="form-group {{$errors->has('harga_minta') ? 'has-error' : ''}}">
							<label class="control-label">Harga Minta</label>
								<input type="text" class="form-control" name="harga_minta" required>
								@if ($errors->has('harga_minta'))
									<span class="help-blocks">
										<strong>{{$errors->first('harga_minta')}}</strong>
									</span>
								@endif
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-primary">Tambah</button>
							</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection