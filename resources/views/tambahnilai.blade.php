@extends('template')

@section('content')
	<h3>Data Nilai</h3>

	<a href="/nilai" class="btn btn-info"> Kembali</a>

	<br/>
	<br/>

	<form action="/nilai/store" method="post">
		{{ csrf_field() }}
        <div class="row">
            <div class="col-3">
                Nomor induk
            </div>
            <div class="col-8">
                <input type="number" name="normorinduksiswa" required="required" maxlength="5" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                Nilai
            </div>
            <div class="col-8">
                <input type="number" name="nilaiangka" required="required" maxlength="3" class="form-control">
            </div>
        </div>

        <div class="row">
            <div class="col-3">
                SKS
            </div>
            <div class="col-8">
                <input type="number" name="sks" required="required" maxlength="1" class="form-control">
            </div>
        </div>
        <br>
        <input type="submit" value="Simpan Data" class="btn btn-success">
	</form>

@endsection
