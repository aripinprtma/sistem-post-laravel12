<x-layout>
    <h3 class="text-center my-5">Tambah Produk</h3>

    <form action="{{ route('produk.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="nama_produk" class="form-label">Nama Produk</label>
            <input type="text" class="form-control" id="nama_produk" name="nama_produk" placeholder="Masukkan Nama Produk" required>
        </div>
        <div class="mb-3">
            <label for="harga_produk" class="form-label">Harga Produk</label>
            <input type="number" class="form-control" id="harga_produk" name="harga_produk" placeholder="Masukkan Harga Produk" required>
        </div>
        <div class="mb-3">
            <label for="stok_produk" class="form-label">Stok Produk</label>
            <input type="number" class="form-control" id="stok_produk" name="stok_produk" placeholder="Masukkan Stok Produk" required>
        </div>
        <div class="mb-3">
            <label for="gambar_produk" class="form-label">Gambar Produk</label>
            <input type="file" class="form-control" id="gambar_produk" name="gambar_produk" required>
        </div>
        <div class="mb-3">
            <label for="deskripsi_produk" class="form-label">Deskripsi Produk</label>
            <textarea name="deskripsi_produk" class="form-control" id="deskripsi_produk" cols="30" rows="10" placeholder="Masukkan Deskripsi Produk" required></textarea>
        </div>
        <div class="mb-3">
            <label for="kategori_id" class="form-label">Kategori</label>
            <select class="form-select" id="kategori_id" name="kategori_id" required>
                <option value="">Pilih Kategori</option>
                @foreach ($kategori as $kat)
                    <option value="{{ $kat->id }}">{{ $kat->nama_kategori }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Simpan Produk</button>
    </form>

    <a href="{{ route('produk.index') }}" class="btn btn-secondary my-3">Kembali ke Daftar Produk</a>

</x-layout>