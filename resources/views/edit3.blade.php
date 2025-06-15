@extends('template')

@section('content')
    <h3>Edit Karyawan</h3>

    <a href="/karyawanganjil" class="btn btn-primary mb-3"> Kembali</a>

    @foreach($karyawan as $p)
    <form action="/karyawanganjil/update" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="kodepegawai" value="{{ $p->kodepegawai }}">

        <div class="table-responsive">
            <table class="table table-bordered">
                <tr>
                    <td class="col-md-2">Nama Lengkap</td>
                    <td><input type="text" class="form-control" required="required" name="namalengkap" value="{{ $p->namalengkap }}"></td>
                </tr>
                <tr>
                    <td>Divisi</td>
                    <td><input type="text" class="form-control" required="required" name="divisi" value="{{ $p->divisi }}"></td>
                </tr>
                <tr>
                    <td>Departemen</td>
                    <td><input type="text" class="form-control" required="required" name="departemen" value="{{ $p->departemen }}"></td>
                </tr>
            </table>
        </div>

        <div class="text-center">
            <input type="submit" class="btn btn-success" value="Simpan Data">
        </div>
    </form>
    @endforeach

@endsection
