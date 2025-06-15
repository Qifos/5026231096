<!DOCTYPE html>Add commentMore actions
<html>
<head>
    <title>Tambah Data</title>
</head>
<body>
    <h1>Beli Barang</h1>
    <form method="POST" action="{{ route('keranjang.store') }}">
        @csrf
        <label>Kode Pembelian:</label><br>
        <input type="text" name="kode_pembelian"><br><br>

        <label>Kode Barang:</label><br>
        <input type="text" name="kode_barang"><br><br>

        <label>Jumlah Pembelian:</label><br>
        <input type="text" name="jumlah"><br><br>Add commentMore actions

        <label>Harga per item:</label><br>
        <input type="text" name="harga"><br><br>

        <button type="submit">Simpan</button>
    </form>
</body>
</html>
