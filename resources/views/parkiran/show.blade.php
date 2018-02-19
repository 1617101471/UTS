@extends('layouts.app')
@section('content')
	<div class="row">
		<div class="container">
			<div class="col-md-12">
				<div class="panel panel-primary">
					<div class="panel-heading">Show Data Parkiran
					<div class="panel-title pull-right">
						<a href="{{route('parkiran.index')}}">Kembali</a>
					</div>
					</div>
					<div class="panel-body">
						<div class="form-group">
							<label class="control-label">Plat Nomor</label>
							<input type="text" name="plat_nomor" class="form-control" value="{{$posts->plat_nomor}}" readonly>
						</div>

						<div class="form-group {{$errors->has('nama_pemilik') ? 'has-error' : ''}}}">
							<label class="control-label">Nama Pemilik</label>
							<input type="text" name="nama_pemilik" class="form-control" value="{{$posts->nama_pemilik}}" readonly>
						</div>

						<div class="form-group {{$errors->has('merk_kendaraan') ? 'has-error' : ''}}}">
							<label class="control-label">Merk Kendaraan</label>
							<input type="text" name="merk_kendaraan" class="form-control" value="{{$posts->merk_kendaraan}}" readonly>
						</div>

						<div class="form-group {{$errors->has('jam_masuk') ? 'has-error' : ''}}}">
							<label class="control-label">Jam Masuk</label>
							<input type="text" name="jam_masuk" class="form-control" value="{{$posts->jam_masuk}}" readonly>
						</div>
						<div class="form-group {{$errors->has('jam_keluar') ? 'has-error' : ''}}}">
							<label class="control-label">Jam Keluar</label>
							<input type="text" name="jam_keluar" class="form-control" value="{{$posts->jam_keluar}}" readonly>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection