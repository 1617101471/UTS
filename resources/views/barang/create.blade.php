@extends('layouts.app')
@section('content')
	<div class="row">
		<div class="container">
			<div class="col-md-12">
				<div class="panel panel-primary">
					<div class="panel-heading">Tambah Data Barang
					<div class="panel-title pull-right">
						<a href="{{route('barang.index')}}">Kembali</a>
					</div>
					</div>
					<div class="panel-body">
						<form action="{{route('barang.store')}}" method="post">
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

							<div class="form-group {{$errors->has('harga_beli') ? 'has-error' : ''}}">
							<label class="control-label">Harga Beli</label>
								<input type="text" class="form-control" name="harga_beli" required>
								@if ($errors->has('harga_beli'))
									<span class="help-blocks">
										<strong>{{$errors->first('harga_beli')}}</strong>
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