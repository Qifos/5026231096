<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Edit Karyawan</h3>

	<a href="/karyawan"> Kembali</a>

	<br/>
	<br/>

	@foreach($karyawan as $p)
	<form action="/karyawan/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->kodepegawai }}"> <br/>
		Nama Lengkap <input type="text" required="required" name="nama" value="{{ $p->namalengkap }}" maxlength="50" class="form-control"> <br/>
		Divisi <input type="text" required="required" name="divisi" value="{{ $p->divisi }}" maxlength="5" class="form-control"> <br/>
        Departemen <input type="text" required="required" name="departemen" value="{{ $p->departemen }}" maxlength="10" class="form-control"> <br/>
		<input type="submit" value="Simpan Data">
    </form>
	@endforeach
</body>
</html>

