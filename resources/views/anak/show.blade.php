@extends('layouts.app');
@section('content')
<div class="row">
	<center><h1>Data anak</h1></center>
	<div class="panel panel-primary">
		<div class="panel-heading">Data anak
		<div class="panel-title pull-right"><a href="{{ URL::previous() }}">kembali</a></div>
		</div>

		<div class="panel-body">
			<form action="{{route('anak.show', $anak->id)}}" method="post">
			<input type="hidden" name="_method" value="PUT">
			<input type="hidden" name="_token" value="{{csrf_token()}}">

				
				<label class="control-label">Nama </label>
					<input type="text" name="a" value="{{$anak->nama}}" class="form-control" readonly="">
				</div>
				<div class="form_group">
				<label class="control-label">Nama orangtua</label>
					<input type="text" name="b" value="{{$anak->keluarga->nama_ayah}} dan {{$anak->keluarga->nama_ibu}}" class="form-control" readonly="">
					</div>

					<div class="form_group">
				<label class="control-label">Umur</label>
					<input type="text" name="c" value="{{$anak->umur}}" class="form-control" readonly="" >
					</div>

					<div class="form_group">
				<label class="control-label">Alamat</label>
					<textarea class="form-control" rows="10" name="e" readonly="">{{$anak->alamat}}</textarea> 
					</div>
					<div class="form_group">
						<button type="submit" class="btn btn-succes">simpan</button>
						<button type="reset" class="btn btn-danger">reset</button>
					</div>
			</form>
			</div>
			</div>
		</div>
		</div>
		</div>
		@endsection