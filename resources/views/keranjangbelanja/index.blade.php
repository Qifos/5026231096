<!DOCTYPE html>
<html>
<head>
    <title>Keranjang Belanja</title>
</head>
<body>
    <h1>Data Keranjang Belanja</h1>
    <a href="{{ route('keranjang.create') }}">Beli</a>
    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>Kode Pembelian</th>
                <th>Kode Barang</th>
                <th>Jumlah Pembelian</th>
                <th>Harga per item</th>
                <th>Total</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($data as $item)
            <tr>
                <td>{{ $item->kode_pembelian }}</td>
                <td>{{ $item->kode_barang }}</td>
                <td>{{ $item->jumlah }}</td>
                <td>Rp {{ number_format($item->harga, 0, ',', '.') }}</td>
                <td>Rp {{ number_format($item->jumlah * $item->harga, 0, ',', '.') }}</td>
                <td>
                    <form action="{{ route('keranjang.destroy', $item->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Batal</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</body>
</html>
