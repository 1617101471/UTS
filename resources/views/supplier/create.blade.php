@extends('layouts.app')
@section('content')
	<div class="row">
		<div class="container">
			<div class="col-md-12">
				<div class="panel panel-primary">
					<div class="panel-heading">Tambah Data Supplier
					<div class="panel-title pull-right">
						<a href="{{route('supplier.index')}}">Kembali</a>
					</div>
					</div>
					<div class="panel-body">
						<form action="{{route('supplier.store')}}" method="post">
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

							<div class="form-group {{$errors->has('alamat') ? 'has-error' : ''}}">
							<label class="control-label">Alamat Supplier</label>
								<textarea name="alamat" class="form-control" rows="3" required></textarea>
								@if ($errors->has('alamat'))
									<span class="help-blocks">
										<strong>{{$errors->first('alamat')}}</strong>
									</span>
								@endif
							</div>

							<div class="form-group {{$errors->has('perusahaan') ? 'has-error' : ''}}">
							<label class="control-label">Perusahaan Supplier</label>
								<input type="text" class="form-control" name="perusahaan" required>
								@if ($errors->has('perusahaan'))
									<span class="help-blocks">
										<strong>{{$errors->first('perusahaan')}}</strong>
									</span>
								@endif
							</div>
							
							<div class="form-group {{$errors->has('no_telepon') ? 'has-error' : ''}}">
							<label class="control-label">No Telepon Supllier</label>
								<input type="text" class="form-control" name="no_telepon" required>
								@if ($errors->has('no_telepon'))
									<span class="help-blocks">
										<strong>{{$errors->first('no_telepon')}}</strong>
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