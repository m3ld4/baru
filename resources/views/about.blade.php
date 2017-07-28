<!DOCTYPE html>
<html>
<head>
	<title>about</title>
</head>
<body>
        @foreach($keluarga as $data) <hr>
       Nama ibu : {{ $data->nama_ibu}}<br>
       Nama ayah : {{ $data->nama_ayah}}<br>
       umur ibu : {{ $data->umur_ibu}}<br>
       umur ayah : {{ $data->umur_ayah}}<br>

       @foreach ($data->anak as $key)
    	<li>{{$key->nama}}</li><br>
       @endforeach

       @endforeach <hr>
</body>
</html>