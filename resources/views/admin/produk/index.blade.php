<x-layout>

    <p class="lead my-5">Berikut adalah daftar produk yang tersedia di sistem.
        <br>
        <a href="{{ route('produk.create') }}" class="btn btn-primary my-3">Tambah Produk</a>
    </p>
    <table class="table border">
        <thead>
            <h3 class="text-center my-5">Data Produk</h3>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Produk</th>
                <th scope="col">Harga</th>
                <th scope="col">Stok</th>
                <th scope="col">Gambar</th>
                <th scope="col">Deskripsi</th>
                <th scope="col">Kategori</th>
                <th scope="col">Tanggal Dibuat</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($produks as $produk)
                <tr>
                    <td scope="row">{{ $loop->iteration }}</td>
                    <td>{{ $produk->nama_produk }}</td>
                    <td>{{ $produk->harga_produk }}</td>
                    <td>{{ $produk->stok_produk }}</td>
                    <td>
                        @if ($produk->gambar_produk)
                            <img src="{{ asset('images/produk/' . $produk->gambar_produk) }}"
                                alt="{{ $produk->nama_produk }}" width="100">
                        @endif
                    </td>
                    <td>{{ $produk->deskripsi_produk }}</td>
                    <td>{{ $produk->kategori->nama_kategori ?? '-' }}</td>
                    <td>{{ $produk->created_at->format('d-m-Y') }}</td>
                    <td>
                        <form action="{{ route('produk.destroy', $produk->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <a href="{{ route('produk.edit', $produk->id) }}" class="btn btn-warning">Edit</a>
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-layout>
