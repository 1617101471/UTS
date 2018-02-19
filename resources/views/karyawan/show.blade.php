@extends('layouts.app')
@section('content')
	<div class="row">
		<div class="container">
			<div class="col-md-12">
				<div class="panel panel-primary">
					<div class="panel-heading">Show Data Karyawan
					<div class="panel-title pull-right">
						<a href="{{route('karyawan.index')}}">Kembali</a>
					</div>
					</div>
					<div class="panel-body">
						<div class="form-group">
							<label class="control-label">NIK</label>
							<input type="text" name="nik" class="form-control" value="{{$posts->nik}}" readonly>
						</div>

						<div class="form-group {{$errors->has('nama_karyawan') ? 'has-error' : ''}}}">
							<label class="control-label">Nama Karyawan</label>
							<input type="text" name="nama_karyawan" class="form-control" value="{{$posts->nama_karyawan}}" readonly>
						</div>

						<div class="form-group {{$errors->has('bagian') ? 'has-error' : ''}}}">
							<label class="control-label">Bagian</label>
							<input type="text" name="bagian" class="form-control" value="{{$posts->bagian}}" readonly>
						</div>

						<div class="form-group {{$errors->has('status') ? 'has-error' : ''}}}">
							<label class="control-label">Status</label>
							<input type="text" name="status" class="form-control" value="{{$posts->status}}" readonly>
						</div>
						<div class="form-group {{$errors->has('penghasilan') ? 'has-error' : ''}}}">
							<label class="control-label">Penghasilan</label>
							<input type="text" name="penghasilan" class="form-control" value="{{$posts->penghasilan}}" readonly>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection