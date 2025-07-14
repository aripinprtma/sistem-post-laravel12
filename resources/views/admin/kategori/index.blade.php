<x-layout>
    <p class="lead my-5">
        Kategori List:
        <br>
        <a href="{{ route('kategori.create') }}" class="btn btn-primary my-3">Tambah Kategori</a>

    <table class="table border">
        <thead>
            <h3 class="text-center my-5">Data Kategori</h3>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Kategori</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kategoris as $kategori)
                <tr>
                    <td scope="row">{{ $loop->iteration }}</td>
                    <td>{{ $kategori->nama_kategori }}</td>
                    <td>
                        <form action="{{ route('kategori.destroy', $kategori->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <a href="{{ route('kategori.edit', $kategori->id) }}" class="btn btn-warning">Edit</a>
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                </tr>
            @endforeach
        </tbody>
    </table>

    </p>
</x-layout>
