@extends('layouts.app')
@section('content')
	<div class="row">
		<div class="container">
			<div class="col-md-12">
				<div class="panel panel-primary">
					<div class="panel-heading">Edit Data Parkiran
					<div class="panel-title pull-right">
						<a href="{{route('parkiran.index')}}">Kembali</a>
					</div>
					</div>
					<div class="panel-body">
						<form action="{{route('parkiran.update', $posts->id)}}" method="post">
							<input name="_method" type="hidden" value="PATCH">
							{{csrf_field()}}
							<div class="form-group {{$errors->has('plat_nomor') ? 'has-error' : ''}}">
								<label class="control-label">Plat Nomor</label>
								<input type="text" name="plat_nomor" class="form-control" value="{{$posts->plat_nomor}}" required>
								@if ($errors->has('plat_nomor'))
									<span class="help-block">
										<strong>{{$errors->first('plat_nomor')}}</strong>
									</span>
								@endif
							</div>

							<div class="form-group {{$errors->has('nama_pemilik') ? 'has-error' : ''}}">
								<label class="control-label">Nama Pemilik</label>
								<input type="text" name="nama_pemilik" class="form-control" value="{{$posts->nama_pemilik}}" required>
								@if ($errors->has('nama_pemilik'))
									<span class="help-block">
										<strong>{{$errors->first('nama_pemilik')}}</strong>
									</span>
								@endif
							</div>

							<div class="form-group {{$errors->has('merk_kendaraan') ? 'has-error' : ''}}">
								<label class="control-label">Merk Kendaraan</label>
								<input type="text" name="merk_kendaraan" class="form-control" value="{{$posts->merk_kendaraan}}" required>
								@if ($errors->has('merk_kendaraan'))
									<span class="help-block">
										<strong>{{$errors->first('merk_kendaraan')}}</strong>
									</span>
								@endif
							</div>
							
							<div class="form-group {{$errors->has('jam_masuk') ? 'has-error' : ''}}">
								<label class="control-label">Jam Masuk</label>
								<input type="time" name="jam_masuk" class="form-control" value="{{$posts->jam_masuk}}" required>
								@if ($errors->has('jam_masuk'))
									<span class="help-block">
										<strong>{{$errors->first('jam_masuk')}}</strong>
									</span>
								@endif
							</div>

							<div class="form-group {{$errors->has('jam_keluar') ? 'has-error' : ''}}">
								<label class="control-label">jam Keluar</label>
								<input type="time" name="jam_keluar" class="form-control" value="{{$posts->jam_keluar}}" required>
								@if ($errors->has('jam_keluar'))
									<span class="help-block">
										<strong>{{$errors->first('jam_keluar')}}</strong>
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