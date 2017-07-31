@extends('layouts.app');
@section('content')
<div class="row">
	<center><h1>Data Orangtua</h1></center>
	<div class="panel panel-primary">
		<div class="panel-heading">Data keluarga</div>
		<div class="panel-title pull-right"><a href="/keluarga/create">
		Tambah data</a></div>
		</div>

		<div class="panel-body">
		<table class="table">
		<thead>
			<tr>
				<th>Nama Ayah</th>
				<th>Nama ibu</th>
				<th>Umur Ayah</th>
	            <th>Umur ibu</th>
	            <th>Alamat</th>
	            <th>Nama anak</th>
	            <th colspan="3">Action</th>

			</tr>
		</thead>
		<tbody>
		<tr>
			@foreach($kelu as $data)
			<td>{{$data->nama_ayah}}</td>
			<td>{{$data->nama_ibu}}</td>
			<td>{{$data->umur_ayah}}</td>
			<td>{{$data->umur_ibu}}</td>
			<td>{{$data->alamat}}</td>
		
			<td>
				@foreach($data->anak as $a)
				<li>{{$a->nama}}</li>
				@endforeach
			</td>
			<td>
				<a class="btn btn-warning" href="/keluarga/{{$data->id}}/edit">Edit</a>
				<td>
					<a class="btn btn-primary" href="/keluarga/{{$data->id}}">Show</a>
				</td>
				<td>
					<form action="{{route('keluarga.destroy',$data->id)}}" method="post">
					<input type="hidden" name="_method" value="DELETE">
					<input type="hidden" name="_token">
					<input class="btn btn-danger" type="submit" value="Delete">
					{{csrf_field()}}
						
					</form>
				</td>
			</td>
			
			</tr>
			@endforeach
		</tbody>
		</table>
		</div>s
		</div>
	</div>
</div>
@endsection