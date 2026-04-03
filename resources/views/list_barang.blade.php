{{-- <div>
    <h1>List barang</h1>
    <p>Kode barang {{ $id }}</p>
    <p>Nama barang {{ $nama}}</p>
    <p>Kategori barang {{ $kategori}}</p>
    <p>Harga barang {{ $harga}}</p>
    <p>Jumlah barang {{ $jumlah}}</p>
</div> --}}

<html>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Harga</th>
        </tr>
    </thead>

    <tbody>
        @foreach($data as $dataku)
            <tr>
                <td>{{ $dataku['id'] }}</td>
                <td>{{ $dataku['nama'] }}</td>
                <td>{{ $dataku['harga'] }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
</html>