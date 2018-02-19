@extends('layouts.app')
@section('content')
	<div class="row">
		<div class="container">
			<div class="col-md-12">
				<div class="panel panel-primary">
					<div class="panel-heading">Tambah Data Penjualan
					<div class="panel-title pull-right">
						<a href="{{route('penjualan.index')}}">Kembali</a>
					</div>
					</div>
					<div class="panel-body">
						<form action="{{route('penjualan.store')}}" method="post">
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

							<div class="form-group {{$errors->has('satuan') ? 'has-error' : ''}}">
							<label class="control-label">Satuan</label>
								<input type="text" class="form-control" name="satuan" required>
								@if ($errors->has('satuan'))
									<span class="help-blocks">
										<strong>{{$errors->first('satuan')}}</strong>
									</span>
								@endif
							</div>

							<div class="form-group {{$errors->has('sisa_stok') ? 'has-error' : ''}}">
							<label class="control-label">Sisa Stok</label>
								<input type="text" class="form-control" name="sisa_stok" required>
								@if ($errors->has('sisa_stok'))
									<span class="help-blocks">
										<strong>{{$errors->first('sisa_stok')}}</strong>
									</span>
								@endif
							</div>
							
							<div class="form-group {{$errors->has('harga_jual') ? 'has-error' : ''}}">
							<label class="control-label">Harga Jual</label>
								<input type="text" class="form-control" name="harga_jual" required>
								@if ($errors->has('harga_jual'))
									<span class="help-blocks">
										<strong>{{$errors->first('harga_jual')}}</strong>
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