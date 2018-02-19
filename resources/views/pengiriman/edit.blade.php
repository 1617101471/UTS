@extends('layouts.app')
@section('content')
	<div class="row">
		<div class="container">
			<div class="col-md-12">
				<div class="panel panel-primary">
					<div class="panel-heading">Edit Data Pengiriman
					<div class="panel-title pull-right">
						<a href="{{route('pengiriman.index')}}">Kembali</a>
					</div>
					</div>
					<div class="panel-body">
						<form action="{{route('pengiriman.update', $posts->id)}}" method="post">
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

							<div class="form-group {{$errors->has('tanggal_pengiriman') ? 'has-error' : ''}}">
								<label class="control-label">Tanggal Pengiriman</label>
								<input type="date" name="tanggal_pengiriman" class="form-control" value="{{$posts->tanggal_pengiriman}}" required>
								@if ($errors->has('tanggal_pengiriman'))
									<span class="help-block">
										<strong>{{$errors->first('tanggal_pengiriman')}}</strong>
									</span>
								@endif
							</div>

							<div class="form-group {{$errors->has('tanggal_penerima') ? 'has-error' : ''}}">
								<label class="control-label">Tanggal Penerima</label>
								<input type="date" name="tanggal_penerima" class="form-control" value="{{$posts->tanggal_penerima}}" required>
								@if ($errors->has('tanggal_penerima'))
									<span class="help-block">
										<strong>{{$errors->first('tanggal_penerima')}}</strong>
									</span>
								@endif
							</div>

							<div class="form-group {{$errors->has('alamat') ? 'has-error' : ''}}">
								<label class="control-label">Alamat</label>
								<textarea type="text" name="alamat" class="form-control" rows="3" required>{{$posts->alamat}}</textarea>
								@if ($errors->has('alamat'))
									<span class="help-block">
										<strong>{{$errors->first('alamat')}}</strong>
									</span>
								@endif
							</div>

							<div class="form-group {{$errors->has('cara_bayar') ? 'has-error' : ''}}">
								<label class="control-label">Cara Bayar</label>
								<input type="text" name="cara_bayar" class="form-control" value="{{$posts->cara_bayar}}" required>
								@if ($errors->has('cara_bayar'))
									<span class="help-block">
										<strong>{{$errors->first('cara_bayar')}}</strong>
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