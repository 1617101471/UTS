@extends('layouts.app')
@section('content')
	<div class="row">
		<div class="container">
			<div class="col-md-12">
				<div class="panel panel-primary">
					<div class="panel-heading">Tambah Data Pemesanan
					<div class="panel-title pull-right">
						<a href="{{route('pengiriman.index')}}">Kembali</a>
					</div>
					</div>
					<div class="panel-body">
						<form action="{{route('pengiriman.store')}}" method="post">
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

							<div class="form-group {{$errors->has('tanggal_pengiriman') ? 'has-error' : ''}}">
							<label class="control-label">Tanggal Pengiriman</label>
								<input type="date" class="form-control" name="tanggal_pengiriman" required>
								@if ($errors->has('tanggal_pengiriman'))
									<span class="help-blocks">
										<strong>{{$errors->first('tanggal_pengiriman')}}</strong>
									</span>
								@endif
							</div>

							<div class="form-group {{$errors->has('tanggal_penerima') ? 'has-error' : ''}}">
							<label class="control-label">Tanggal Penerima</label>
								<input type="date" class="form-control" name="tanggal_penerima" required>
								@if ($errors->has('tanggal_penerima'))
									<span class="help-blocks">
										<strong>{{$errors->first('tanggal_penerima')}}</strong>
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
							
							<div class="form-group {{$errors->has('cara_bayar') ? 'has-error' : ''}}">
							<label class="control-label">Cara Bayar</label>
								<input type="text" class="form-control" name="cara_bayar" required>
								@if ($errors->has('cara_bayar'))
									<span class="help-blocks">
										<strong>{{$errors->first('cara_bayar')}}</strong>
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