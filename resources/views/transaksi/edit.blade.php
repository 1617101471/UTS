@extends('layouts.app')
@section('content')
	<div class="row">
		<div class="container">
			<div class="col-md-12">
				<div class="panel panel-primary">
					<div class="panel-heading">Edit Data Transaksi
					<div class="panel-title pull-right">
						<a href="{{route('transaksi.index')}}">Kembali</a>
					</div>
					</div>
					<div class="panel-body">
						<form action="{{route('transaksi.update', $posts->id)}}" method="post">
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

							<div class="form-group {{$errors->has('tanggal_beli') ? 'has-error' : ''}}">
								<label class="control-label">Tanggal_beli</label>
								<input type="date" name="tanggal_beli" class="form-control" value="{{$posts->tanggal_beli}}" required>
								@if ($errors->has('tanggal_beli'))
									<span class="help-block">
										<strong>{{$errors->first('tanggal_beli')}}</strong>
									</span>
								@endif
							</div>

							<div class="form-group {{$errors->has('satuan') ? 'has-error' : ''}}">
								<label class="control-label">Satuan</label>
								<input type="text" name="satuan" class="form-control" value="{{$posts->satuan}}" required>
								@if ($errors->has('satuan'))
									<span class="help-block">
										<strong>{{$errors->first('satuan')}}</strong>
									</span>
								@endif
							</div>

							<div class="form-group {{$errors->has('harga') ? 'has-error' : ''}}">
								<label class="control-label">Harga</label>
								<input type="text" name="harga" class="form-control" value="{{$posts->harga}}" required>
								@if ($errors->has('harga'))
									<span class="help-block">
										<strong>{{$errors->first('harga')}}</strong>
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