@extends('layouts.app')
@section('content')
	<div class="row">
		<div class="container">
			<div class="col-md-12">
				<div class="panel panel-primary">
					<div class="panel-heading">Tambah Data Penjaga
					<div class="panel-title pull-right">
						<a href="{{route('penjaga.index')}}">Kembali</a>
					</div>
					</div>
					<div class="panel-body">
						<form action="{{route('penjaga.store')}}" method="post">
							{{csrf_field()}}
							<div class="form-group {{$errors->has('nama_penjaga') ? 'has-error' : ''}}">
								<label class="control-label">Nama Pejaga</label>
								<input type="text" class="form-control" name="nama_penjaga" required>
								@if ($errors->has('nama_penjaga'))
									<span class="help-blocks">
										<strong>{{$errors->first('nama_penjaga')}}</strong>
									</span>
								@endif
							</div>

							<div class="form-group {{$errors->has('umur') ? 'has-error' : ''}}">
							<label class="control-label">Umur</label>
								<input type="text" class="form-control" name="umur" required>
								@if ($errors->has('umur'))
									<span class="help-blocks">
										<strong>{{$errors->first('umur')}}</strong>
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

							<div class="form-group {{$errors->has('shift') ? 'has-error' : ''}}">
							<label class="control-label">Shift</label>
								<input type="text" class="form-control" name="shift" required>
								@if ($errors->has('shift'))
									<span class="help-blocks">
										<strong>{{$errors->first('shift')}}</strong>
									</span>
								@endif
							</div>
							
							<div class="form-group {{$errors->has('gaji') ? 'has-error' : ''}}">
							<label class="control-label">Gaji</label>
								<input type="text" class="form-control" name="gaji" required>
								@if ($errors->has('gaji'))
									<span class="help-blocks">
										<strong>{{$errors->first('gaji')}}</strong>
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