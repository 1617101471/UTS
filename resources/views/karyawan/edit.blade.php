@extends('layouts.app')
@section('content')
	<div class="row">
		<div class="container">
			<div class="col-md-12">
				<div class="panel panel-primary">
					<div class="panel-heading">Edit Data Karyawan
					<div class="panel-title pull-right">
						<a href="{{route('karyawan.index')}}">Kembali</a>
					</div>
					</div>
					<div class="panel-body">
						<form action="{{route('karyawan.update', $posts->id)}}" method="post">
							<input name="_method" type="hidden" value="PATCH">
							{{csrf_field()}}
							<div class="form-group {{$errors->has('nik') ? 'has-error' : ''}}">
								<label class="control-label">NIK</label>
								<input type="text" name="nik" class="form-control" value="{{$posts->nik}}" required>
								@if ($errors->has('nik'))
									<span class="help-block">
										<strong>{{$errors->first('nik')}}</strong>
									</span>
								@endif
							</div>

							<div class="form-group {{$errors->has('nama_karyawan') ? 'has-error' : ''}}">
								<label class="control-label">Nama Karyawan</label>
								<input type="text" name="nama_karyawan" class="form-control" value="{{$posts->nama_karyawan}}" required>
								@if ($errors->has('nama_karyawan'))
									<span class="help-block">
										<strong>{{$errors->first('nama_karyawan')}}</strong>
									</span>
								@endif
							</div>

							<div class="form-group {{$errors->has('bagian') ? 'has-error' : ''}}">
								<label class="control-label">Bagian</label>
								<input type="text" name="bagian" class="form-control" value="{{$posts->bagian}}" required>
								@if ($errors->has('bagian'))
									<span class="help-block">
										<strong>{{$errors->first('bagian')}}</strong>
									</span>
								@endif
							</div>

							<div class="form-group {{$errors->has('status') ? 'has-error' : ''}}">
								<label class="control-label">Status</label>
								<input type="text" name="status" class="form-control" value="{{$posts->status}}" required>
								@if ($errors->has('status'))
									<span class="help-block">
										<strong>{{$errors->first('status')}}</strong>
									</span>
								@endif
							</div>

							<div class="form-group {{$errors->has('penghasilan') ? 'has-error' : ''}}">
								<label class="control-label">Penghasilan</label>
								<input type="text" name="penghasilan" class="form-control" value="{{$posts->penghasilan}}" required>
								@if ($errors->has('penghasilan'))
									<span class="help-block">
										<strong>{{$errors->first('penghasilan')}}</strong>
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