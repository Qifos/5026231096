@extends('template')

@section('content')

	<h3>Data nilai</h3>
	<br/>
	<p>Cari Data nilai :</p>
	<form action="/nilai/cari" method="GET">
		<input type="text" class="form-control w-" name="cari" placeholder="Cari siswa .." value="{{ old('cari') }}">
		<input type="submit" class="btn btn-info" value="CARI">
	</form>

	<table class="table table-striped">
		<tr>
			<th>ID</th>
			<th>NRP</th>
			<th>Nilai Angka</th>
            <th>SKS</th>
			<th>Nilai Huruf</th>
            <th>Bobot</th>
		</tr>
		@foreach($nilai as $p)
		<tr>
			<td>{{ $p->id }}</td>
			<td>{{ $p->normorinduksiswa }}</td>
			<td>{{ $p->nilaiangka }}</td>
			<td>{{ $p->sks }}</td>
			<td>
                @if($p->nilaiangka < 41)
                D
            @elseif ($p->nilaiangka < 61 && $p->nilaiangka > 40)
                C
            @elseif ($p->nilaiangka < 81 && $p->nilaiangka > 60)
                B
            @elseif ($p->nilaiangka > 80)
                A
            @endif
            </td>
            <td>{{ $p->nilaiangka * $p->sks }}</td>
            <td>
        </td>
		</tr>
		@endforeach
	</table>
    	<a href="/nilai/tambah" class="btn btn-primary mb-3"> + Tambah data Baru</a>
    @endsection

