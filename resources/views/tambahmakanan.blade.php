@extends('template')
@section('content')
	<h3>Data Makanan</h3>

	<a href="/makanan"> Kembali</a>

	<br/>
	<br/>

	<form action="/makanan/store" method="post">
		{{ csrf_field() }}
        <div class="row">
            <div class="col-3">
                Merk
            </div>
            <div class="col-8">
                <input type="text" name="merk" required="required" class="form-control">
            </div>
        </div>

        <div class="row">
            <div class="col-3">
                Harga
            </div>
            <div class="col-8">
                <input type="number" name="harga" required="required" class="form-control">
            </div>
        </div>

        <div class="row">
            <div class="col-3">
                Ketersediaan
            </div>
            <div class="col-8">
                <select name="tersedia" class="form-control" required>
                    <option value="1" {{ old('Tersedia')==='1' ? 'selected' : '' }}>Tersedia</option>
                    <option value="0" {{ old('Tersedia')==='0' ? 'selected' : '' }}>Tidak Tersedia</option>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col-3">
                Berat
            </div>
            <div class="col-8">
                <input type="number" name="berat" step="0.01" min="0" required="required" class="form-control">
            </div>
        </div>
		<input type="submit" value="Simpan Data" class="btn btn-success">
	</form>
@endsection

