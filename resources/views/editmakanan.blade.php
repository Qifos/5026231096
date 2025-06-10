<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Edit Makanan</h3>

	<a href="/makanan"> Kembali</a>

	<br/>
	<br/>

	@foreach($makanan as $p)
	<form action="/makanan/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->id }}"> <br/>
		Merk <input type="text" required="required" name="merk" value="{{ $p->merkmakanan }}"> <br/>
		Harga <input type="number" required="required" name="harga" value="{{ $p->hargamakanan }}"> <br/>
        <label for="tersedia">Ketersediaan</label>
            <select id="tersedia" name="tersedia" class="form-control" required>
            <option value="1" {{ $p->tersedia == 1 ? 'selected' : '' }}>Tersedia</option>
            <option value="0" {{ $p->tersedia == 0 ? 'selected' : '' }}>Tidak Tersedia</option>
        </select>
        <br/>
		Berat <input type="number" required="required" name="berat" value="{{ $p->berat }}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach

</body>
</html>

