<x-layout>
    <h3 class="text-center my-5">Edit Produk</h3>
    <form action="{{ route('produk.update', $produk->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nama_produk" class="form-label">Nama Produk</label>
            <input type="text" class="form-control" id="nama_produk" name="nama_produk"
                value="{{ $produk->nama_produk }}" required>
        </div>
        <div class="mb-3">
            <label for="harga_produk" class="form-label">Harga Produk</label>
            <input type="number" class="form-control" id="harga_produk" name="harga_produk"
                value="{{ $produk->harga_produk }}" required>
        </div>
        <div class="mb-3">
            <label for="stok_produk" class="form-label">Stok Produk</label>
            <input type="number" class="form-control" id="stok_produk" name="stok_produk"
                value="{{ $produk->stok_produk }}" required>
        </div>
        <div class="mb-3">
            <label for="gambar_produk" class="form-label">Gambar Produk</label>
            <input type="file" class="form-control" id="gambar_produk" name="gambar_produk">
            @if ($produk->gambar_produk)
                <img src="{{ asset('images/produk/' . $produk->gambar_produk) }}" alt="{{ $produk->nama_produk }}"
                    width="100">
            @endif
        </div>
        <div class="mb-3">
            <label for="deskripsi_produk" class="form-label">Deskripsi Produk</label>
            <textarea name="deskripsi_produk" class="form-control" id="deskripsi_produk" cols="30" rows="10">{{ $produk->deskripsi_produk }}</textarea>
        </div>
        <div class="mb-3">
            <label for="kategori_id" class="form-label">Kategori</label>
            <select class="form-select" id="kategori_id" name="kategori_id" required>
                @foreach ($kategori as $kat)
                    <option value="{{ $kat->id }}" {{ $kat->id == $produk->kategori_id ? 'selected' : '' }}>
                        {{ $kat->nama_kategori }}
                    </option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update Produk</button>
    </form>
</x-layout>
