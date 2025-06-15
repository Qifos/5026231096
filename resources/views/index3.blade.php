@extends('template')

@section('content')
	<h3>Data Karyawan</h3>

     <p>Cari Data Karyawan :</p>
	<form action="/karyawanganjil/cari" method="GET">
		<input type="text" class="form-control " name="cari" placeholder="Cari Karyawan ..">
        <br/>
		<input type="submit" class="btn btn-info" value="CARI">
	</form>

	<br/>

	<table class="table table-striped table-hover">
		<tr>
			<th>Kode Karyawan</th>
			<th>Nama Lengkap</th>
			<th>Divisi</th>
			<th>Departemen</th>
			<th>Opsi</th>
		</tr>
		@foreach($karyawan as $p)
		<tr>
			<td>{{ $p->kodepegawai }}</td>
            <td>{{ strtoupper($p->namalengkap) }}</td>
            <td>{{ $p->divisi }}</td>
            <td>{{ strtolower($p->departemen) }}</td>
            <td>
				<a href="/karyawanganjil/edit/{{ $p->kodepegawai }}" class="btn btn-success">Edit</a>
				|
				<a href="/karyawanganjil/hapus/{{ $p->kodepegawai }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

    <a href="/karyawanganjil/tambah" class="btn btn-primary"> + Tambah Karyawan Baru</a>
    <br/>
    <br/>
    {{ $karyawan->links() }}
@endsection
