@extends('template')

@section('content')

	<h3>Data karyawan</h3>
	<br/>
	<p>Cari Data karyawan :</p>
	<form action="/karyawan/cari" method="GET">
		<input type="text" class="form-control w-" name="cari" placeholder="Cari karyawan .." value="{{ old('cari') }}">
		<input type="submit" class="btn btn-info" value="CARI">
	</form>

	<table class="table table-striped">
		<tr>
			<th>Kode Pegawai</th>
			<th>Nama</th>
			<th>Divisi</th>
            <th>Departemen</th>
			<th>Opsi</th>
		</tr>
		@foreach($karyawan as $p)
		<tr>
			<td>{{ $p->kodepegawai }}</td>
			<td>{{ $p->namalengkap }}</td>
			<td>{{ $p->divisi }}</td>
			<td>{{ $p->departemen }}</td>
			<td>
				<a href="/karyawan/edit/{{ $p->kodepegawai }}" class="btn btn-success">Edit</a>
                |
				<a href="/karyawan/hapus/{{ $p->kodepegawai }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    	<a href="/karyawan/tambah" class="btn btn-primary mb-3"> + Tambah karyawan Baru</a>
    @endsection

