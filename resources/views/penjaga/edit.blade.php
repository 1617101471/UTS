@extends('layouts.app')
@section('content')
	<div class="row">
		<div class="container">
			<div class="col-md-12">
				<div class="panel panel-primary">
					<div class="panel-heading">Edit Data Penjaga
					<div class="panel-title pull-right">
						<a href="{{route('penjaga.index')}}">Kembali</a>
					</div>
					</div>
					<div class="panel-body">
						<form action="{{route('penjaga.update', $posts->id)}}" method="post">
							<input name="_method" type="hidden" value="PATCH">
							{{csrf_field()}}
							<div class="form-group {{$errors->has('nama_penjaga') ? 'has-error' : ''}}">
								<label class="control-label">Nama Penjaga</label>
								<input type="text" name="nama_penjaga" class="form-control" value="{{$posts->nama_penjaga}}" required>
								@if ($errors->has('nama_penjaga'))
									<span class="help-block">
										<strong>{{$errors->first('nama_penjaga')}}</strong>
									</span>
								@endif
							</div>

							<div class="form-group {{$errors->has('umur') ? 'has-error' : ''}}">
								<label class="control-label">Umur</label>
								<input type="text" name="umur" class="form-control" value="{{$posts->umur}}" required>
								@if ($errors->has('umur'))
									<span class="help-block">
										<strong>{{$errors->first('umur')}}</strong>
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

							<div class="form-group {{$errors->has('shift') ? 'has-error' : ''}}">
								<label class="control-label">Shift</label>
								<input type="text" name="shift" class="form-control" value="{{$posts->shift}}" required>
								@if ($errors->has('shift'))
									<span class="help-block">
										<strong>{{$errors->first('shift')}}</strong>
									</span>
								@endif
							</div>

							<div class="form-group {{$errors->has('gaji') ? 'has-error' : ''}}">
								<label class="control-label">Gaji</label>
								<input type="text" name="gaji" class="form-control" value="{{$posts->gaji}}" required>
								@if ($errors->has('gaji'))
									<span class="help-block">
										<strong>{{$errors->first('gaji')}}</strong>
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