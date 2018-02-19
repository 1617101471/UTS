@extends('layouts.app')
@section('content')
	<div class="row">
		<div class="container">
			<div class="col-md-12">
				<div class="panel panel-primary">
					<div class="panel-heading">Tambah Data karyawan
					<div class="panel-title pull-right">
						<a href="{{route('karyawan.index')}}">Kembali</a>
					</div>
					</div>
					<div class="panel-body">
						<form action="{{route('karyawan.store')}}" method="post">
							{{csrf_field()}}
							<div class="form-group {{$errors->has('nik') ? 'has-error' : ''}}">
								<label class="control-label">NIK</label>
								<input type="text" class="form-control" name="nik" required>
								@if ($errors->has('nik'))
									<span class="help-blocks">
										<strong>{{$errors->first('nik')}}</strong>
									</span>
								@endif
							</div>

							<div class="form-group {{$errors->has('nama_karyawan') ? 'has-error' : ''}}">
							<label class="control-label">Nama Karyawan</label>
								<input type="text" class="form-control" name="nama_karyawan" required>
								@if ($errors->has('nama_karyawan'))
									<span class="help-blocks">
										<strong>{{$errors->first('nama_karyawan')}}</strong>
									</span>
								@endif
							</div>

							<div class="form-group {{$errors->has('bagian') ? 'has-error' : ''}}">
							<label class="control-label">Bagian</label>
								<input type="text" class="form-control" name="bagian" required>
								@if ($errors->has('bagian'))
									<span class="help-blocks">
										<strong>{{$errors->first('bagian')}}</strong>
									</span>
								@endif
							</div>

							<div class="form-group {{$errors->has('status') ? 'has-error' : ''}}">
							<label class="control-label">Status</label>
								<input type="text" class="form-control" name="status" required>
								@if ($errors->has('status'))
									<span class="help-blocks">
										<strong>{{$errors->first('status')}}</strong>
									</span>
								@endif
							</div>
							
							<div class="form-group {{$errors->has('penghasilan') ? 'has-error' : ''}}">
							<label class="control-label">Penghasilan</label>
								<input type="text" class="form-control" name="penghasilan" required>
								@if ($errors->has('penghasilan'))
									<span class="help-blocks">
										<strong>{{$errors->first('penghasilan')}}</strong>
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