<x-layout>
    <h3 class="text-center my-5">Edit Kategori</h3>

    <form action="{{ route('kategori.update', $kategori->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nama_kategori" class="form-label">Nama Kategori</label>
            <input type="text" class="form-control" id="nama_kategori" name="nama_kategori" value="{{ $kategori->nama_kategori }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan Kategori</button>
    </form>

    <a href="{{ route('kategori.index') }}" class="btn btn-secondary my-3">Kembali ke Daftar Kategori</a>
</x-layout>