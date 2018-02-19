@extends('layouts.app')
@section('content')
	<div class="row">
		<div class="container">
			<div class="col-md-12">
				<div class="panel panel-primary">
					<div class="panel-heading">Show Data Pengiriman
					<div class="panel-title pull-right">
						<a href="{{route('pengiriman.index')}}">Kembali</a>
					</div>
					</div>
					<div class="panel-body">
						<div class="form-group">
							<label class="control-label">Kode Barang</label>
							<input type="text" name="kode_barang" class="form-control" value="{{$posts->kode_barang}}" readonly>
						</div>

						<div class="form-group {{$errors->has('tanggal_pengiriman') ? 'has-error' : ''}}}">
							<label class="control-label">Tanggal Pengiriman</label>
							<input type="text" name="tanggal_pengiriman" class="form-control" value="{{$posts->tanggal_pengiriman}}" readonly>
						</div>

						<div class="form-group {{$errors->has('tanggal_penerima') ? 'has-error' : ''}}}">
							<label class="control-label">Tanggal Penerima</label>
							<input type="text" name="tanggal_penerima" class="form-control" value="{{$posts->tanggal_penerima}}" readonly>
						</div>

						<div class="form-group {{$errors->has('alamat') ? 'has-error' : ''}}}">
							<label class="control-label">Alamat</label>
							<textarea type="tetx" name="alamat" class="form-control" readonly>{{$posts->alamat}}</textarea>
						</div>

						<div class="form-group {{$errors->has('cara_bayar') ? 'has-error' : ''}}}">
							<label class="control-label">Cara Bayar</label>
							<input type="text" name="cara_bayar" class="form-control" value="{{$posts->cara_bayar}}" readonly>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection