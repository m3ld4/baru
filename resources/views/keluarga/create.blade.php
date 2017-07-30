@extends('layouts.app');
@section('content')
<div class="row">
	<center><h1>Data orangtua</h1></center>
	<div class="panel panel-primary">
		<div class="panel-heading">Data keluarga
		<div class="panel-title pull-right"><a href="{{ URL::previous() }}">kembali</a></div>
		</div>

		<div class="panel-body">
			<form action="{{route('keluarga.store')}}" method="post">
				{{csrf_field()}}
				<div class="form_group">
				<label class="control-label">Nama ayah</label>
					<input type="text" name="a" class="form-control" required="">
				</div>
				<div class="form_group">
				<label class="control-label">Nama ibu</label>
					<input type="text" name="b" class="form-control" required="">
					</div>

					<div class="form_group">
				<label class="control-label">Umur ayah</label>
					<input type="text" name="c" class="form-control" required="">
					</div>

					<div class="form_group">
				<label class="control-label">Umur ibu</label>
					<input type="text" name="d" class="form-control" required="">
					</div>

					<div class="form_group">
				<label class="control-label">Alamat</label>
					<textarea class="form-control" rows="10" name="e" required=""></textarea> 
					</div>
					<div class="form_group">
						<button type="submit" class="btn btn-succes">simpan</button>
						<button type="reset" class="btn btn-danger">reset</button>
					</div>
			</form>
		</div>
		</div>
		</div>
		@endsection