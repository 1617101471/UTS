@extends('layouts.app')
@section('content')
	<div class="row">
		<div class="container">
			<div class="col-md-12">
				<div class="panel panel-primary">
					<div class="panel-heading">Show Data Penjaga
					<div class="panel-title pull-right">
						<a href="{{route('penjaga.index')}}">Kembali</a>
					</div>
					</div>
					<div class="panel-body">
						<div class="form-group">
							<label class="control-label">Nama Penjaga</label>
							<input type="text" name="nama_penjaga" class="form-control" value="{{$posts->nama_penjaga}}" readonly>
						</div>

						<div class="form-group {{$errors->has('umur') ? 'has-error' : ''}}}">
							<label class="control-label">Umur</label>
							<input type="text" name="umur" class="form-control" value="{{$posts->umur}}" readonly>
						</div>

						<div class="form-group {{$errors->has('alamat') ? 'has-error' : ''}}}">
							<label class="control-label">Alamat</label>
							<textarea type="tetx" name="alamat" class="form-control" readonly>{{$posts->alamat}}</textarea>
						</div>

						<div class="form-group {{$errors->has('shift') ? 'has-error' : ''}}}">
							<label class="control-label">Shift</label>
							<input type="text" name="shift" class="form-control" value="{{$posts->shift}}" readonly>
						</div>
						<div class="form-group {{$errors->has('gaji') ? 'has-error' : ''}}}">
							<label class="control-label">Gaji</label>
							<input type="text" name="gaji" class="form-control" value="{{$posts->gaji}}" readonly>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection