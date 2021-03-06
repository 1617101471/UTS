@extends('layouts.app')
@section('content')
	<div class="row">
		<div class="container">
			<div class="col-md-12">
				<div class="panel panel-primary">
					<div class="panel-heading">Tambah Data Pembelian
					<div class="panel-title pull-right">
						<a href="{{route('pembelian.index')}}">Kembali</a>
					</div>
					</div>
					<div class="panel-body">
						<form action="{{route('pembelian.store')}}" method="post">
							{{csrf_field()}}
							<div class="form-group {{$errors->has('nama_pembeli') ? 'has-error' : ''}}">
								<label class="control-label">Nama Pembeli</label>
								<input type="text" class="form-control" name="nama_pembeli" required>
								@if ($errors->has('nama_pembeli'))
									<span class="help-blocks">
										<strong>{{$errors->first('nama_pembeli')}}</strong>
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

							<div class="form-group {{$errors->has('alamat') ? 'has-error' : ''}}">
							<label class="control-label">Alamat</label>
								<textarea name="alamat" class="form-control" rows="3" required></textarea>
								@if ($errors->has('alamat'))
									<span class="help-blocks">
										<strong>{{$errors->first('alamat')}}</strong>
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
							
							<div class="form-group {{$errors->has('harga') ? 'has-error' : ''}}">
							<label class="control-label">Harga</label>
								<input type="text" class="form-control" name="harga" required>
								@if ($errors->has('harga'))
									<span class="help-blocks">
										<strong>{{$errors->first('harga')}}</strong>
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