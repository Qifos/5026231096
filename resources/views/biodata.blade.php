<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Laravel - www.malasngoding.com</title>
</head>
<body>

	<h1>Tutorial Laravel</h1>
    <a href="https://www.malasngoding.com">www.malasngoding.com</a>
    <p>Nama : {{$nama}}</p>
    <p>Umur : {{$usia}}</p>
    <p>Alamat : {{$alamat}}</p>
    <ul>
        @foreach ($matkul as $m)
            <li>{{$m}}</li>
        @endforeach

</body>
</html>
