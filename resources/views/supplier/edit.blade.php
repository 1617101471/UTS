@extends('layouts.app')
@section('content')
	<div class="row">
		<div class="container">
			<div class="col-md-12">
				<div class="panel panel-primary">
					<div class="panel-heading">Edit Data Supplier
					<div class="panel-title pull-right">
						<a href="{{route('supplier.index')}}">Kembali</a>
					</div>
					</div>
					<div class="panel-body">
						<form action="{{route('supplier.update', $posts->id)}}" method="post">
							<input name="_method" type="hidden" value="PATCH">
							{{csrf_field()}}
							<div class="form-group {{$errors->has('kode_barang') ? 'has-error' : ''}}">
								<label class="control-label">Kode Barang</label>
								<input type="text" name="kode_barang" class="form-control" value="{{$posts->kode_barang}}" required>
								@if ($errors->has('kode_barang'))
									<span class="help-block">
										<strong>{{$errors->first('kode_barang')}}</strong>
									</span>
								@endif
							</div>

							<div class="form-group {{$errors->has('nama_barang') ? 'has-error' : ''}}">
								<label class="control-label">Nama Barang</label>
								<input type="text" name="nama_barang" class="form-control" value="{{$posts->nama_barang}}" required>
								@if ($errors->has('nama_barang'))
									<span class="help-block">
										<strong>{{$errors->first('nama_barang')}}</strong>
									</span>
								@endif
							</div>

							<div class="form-group {{$errors->has('alamat') ? 'has-error' : ''}}">
								<label class="control-label">Alamat Supplier</label>
								<textarea type="text" name="alamat" class="form-control" rows="3" required>{{$posts->alamat}}</textarea>
								@if ($errors->has('alamat'))
									<span class="help-block">
										<strong>{{$errors->first('alamat')}}</strong>
									</span>
								@endif
							</div>

							<div class="form-group {{$errors->has('perusahaan') ? 'has-error' : ''}}">
								<label class="control-label">perusahaan Supplier</label>
								<input type="text" name="perusahaan" class="form-control" value="{{$posts->perusahaan}}" required>
								@if ($errors->has('perusahaan'))
									<span class="help-block">
										<strong>{{$errors->first('perusahaan')}}</strong>
									</span>
								@endif
							</div>

							<div class="form-group {{$errors->has('no_telepon') ? 'has-error' : ''}}">
								<label class="control-label">No Telepon Supplier</label>
								<input type="text" name="no_telepon" class="form-control" value="{{$posts->no_telepon}}" required>
								@if ($errors->has('no_telepon'))
									<span class="help-block">
										<strong>{{$errors->first('no_telepon')}}</strong>
									</span>
								@endif
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-primary">Edit</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection