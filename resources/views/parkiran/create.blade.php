@extends('layouts.app')
@section('content')
	<div class="row">
		<div class="container">
			<div class="col-md-12">
				<div class="panel panel-primary">
					<div class="panel-heading">Tambah Data Parkiran
					<div class="panel-title pull-right">
						<a href="{{route('parkiran.index')}}">Kembali</a>
					</div>
					</div>
					<div class="panel-body">
						<form action="{{route('parkiran.store')}}" method="post">
							{{csrf_field()}}
							<div class="form-group {{$errors->has('plat_nomor') ? 'has-error' : ''}}">
								<label class="control-label">Plat Nomor</label>
								<input type="text" class="form-control" name="plat_nomor" required>
								@if ($errors->has('plat_nomor'))
									<span class="help-blocks">
										<strong>{{$errors->first('plat_nomor')}}</strong>
									</span>
								@endif
							</div>

							<div class="form-group {{$errors->has('nama_pemilik') ? 'has-error' : ''}}">
							<label class="control-label">Nama Pemilik</label>
								<input type="text" class="form-control" name="nama_pemilik" required>
								@if ($errors->has('nama_pemilik'))
									<span class="help-blocks">
										<strong>{{$errors->first('nama_pemilik')}}</strong>
									</span>
								@endif
							</div>

							<div class="form-group {{$errors->has('merk_kendaraan') ? 'has-error' : ''}}">
							<label class="control-label">Merk Kendaraan</label>
								<input type="text" class="form-control" name="merk_kendaraan" required>
								@if ($errors->has('merk_kendaraan'))
									<span class="help-blocks">
										<strong>{{$errors->first('merk_kendaraan')}}</strong>
									</span>
								@endif
							</div>

							<div class="form-group {{$errors->has('jam_masuk') ? 'has-error' : ''}}">
							<label class="control-label">Jam Masuk</label>
								<input type="time" class="form-control" name="jam_masuk" required>
								@if ($errors->has('jam_masuk'))
									<span class="help-blocks">
										<strong>{{$errors->first('jam_masuk')}}</strong>
									</span>
								@endif
							</div>
							
							<div class="form-group {{$errors->has('jam_keluar') ? 'has-error' : ''}}">
							<label class="control-label">Jam Keluar</label>
								<input type="time" class="form-control" name="jam_keluar" required>
								@if ($errors->has('jam_keluar'))
									<span class="help-blocks">
										<strong>{{$errors->first('jam_keluar')}}</strong>
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