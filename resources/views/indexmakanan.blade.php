@extends('template')

@section('content')

	<h3>Data Makanan</h3>
	<a href="/makanan/tambah" class="btn btn-primary"> + Tambah Makanan Baru</a>
	<br/>
	<p>Cari Data Makanan :</p>
	<form action="/makanan/cari" method="GET">
		<input type="text" class="form-control w-" name="cari" placeholder="Cari Makanan .." value="{{ old('cari') }}">
		<input type="submit" class="btn btn-info" value="CARI">
	</form>

	<table class="table table-striped">
		<tr>
			<th>Merk</th>
			<th>Harga</th>
			<th>Ketersediaan</th>
            <th>Berat</th>
			<th>Opsi</th>
		</tr>
		@foreach($makanan as $p)
		<tr>
			<td>{{ $p->merkmakanan }}</td>
			<td>{{ $p->hargamakanan }}</td>
			<td>{{ $p->tersedia ? 'Tersedia' : 'Habis' }}</td>
			<td>{{ $p->berat }}</td>
			<td>
				<a href="/makanan/edit/{{ $p->id }}" class="btn btn-success">Edit</a>
				|
				<a href="/makanan/hapus/{{ $p->id }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
{{$makanan->links()}}
    @endsection

