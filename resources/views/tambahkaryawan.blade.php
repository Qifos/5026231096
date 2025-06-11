@extends('template')
@section('content')
	<h3>Data karyawan</h3>

	<a href="/karyawan"> Kembali</a>

	<br/>
	<br/>

    <div class="row mb-3">
        <div class="col-3">
            Kode Pegawai
        </div>
        <div class="col-8">
        <input type="text" name="kodepegawai" required="required" maxlength="5" class="form-control">
        @error('kodepegawai')
          <div class="text-danger small">{{ $message }}</div>
        @enderror
      </div>
    </div>

	<form action="/karyawan/store" method="post">
		{{ csrf_field() }}
        <div class="row">
            <div class="col-3">
                Nama Lengkap
            </div>
            <div class="col-8">
                <input type="text" name="nama" required="required" maxlength="50" class="form-control">
            </div>
        </div>

        <div class="row">
            <div class="col-3">
                Divisi
            </div>
            <div class="col-8">
                <input type="text" name="divisi" required="required" maxlength="5" class="form-control">
            </div>
        </div>

        <div class="row">
            <div class="col-3">
                Departemen
            </div>
            <div class="col-8">
                <input type="text" name="departemen" required="required" maxlength="10" class="form-control">
            </div>
        </div>

		<input type="submit" value="Simpan Data" class="btn btn-success">
	</form>
@endsection


