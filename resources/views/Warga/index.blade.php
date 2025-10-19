
<div class="container">
    <h2>Data Warga</h2>
    <a href="{{ route('warga.create') }}" class="btn btn-primary mb-3">Tambah Warga</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>No KTP</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Agama</th>
                <th>Pekerjaan</th>
                <th>Telp</th>
                <th>Email</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($warga as $row)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $row->no_ktp }}</td>
                <td>{{ $row->nama }}</td>
                <td>{{ $row->jenis_kelamin }}</td>
                <td>{{ $row->agama }}</td>
                <td>{{ $row->pekerjaan }}</td>
                <td>{{ $row->telp }}</td>
                <td>{{ $row->email }}</td>
                <td>
                    <a href="{{ route('warga.edit', $row->warga_id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('warga.destroy', $row->warga_id) }}" method="POST" class="d-inline">
                        @csrf @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger"
                            onclick="return confirm('Yakin ingin hapus data ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

