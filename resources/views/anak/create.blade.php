@extends('layouts.app');
@section('content')
<div class="row">
	<center><h1>Data anak</h1></center>
	<div class="panel panel-primary">
		<div class="panel-heading">Data anak
		<div class="panel-title pull-right"><a href="{{ URL::previous() }}">kembali</a></div>
		</div>

		<div class="panel-body">
			<form action="{{route('anak.store')}}" method="post">
				{{csrf_field()}}
				<div class="form_group">
				<label class="control-label">Nama</label>
					<input type="text" name="a" class="form-control" required="">
				</div>
				<div class="form_group">
				<label class="control-label">Umur</label>
					<input type="text" name="c" class="form-control" required="">
					</div>

					<div class="form_group">
				<label class="control-label">nama orang tua</label>
					<select name="b" class="form-control" required="">
						 @foreach($kelu as $data)
						 <option value="{{$data->id}}">
						 	{{ $data->nama_ayah }} dan {{ $data->nama_ibu }}
						 </option>
						 @endforeach
					</select>  
					</div>

					<div class="form_group">
				<label class="control-label">alamat</label>
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