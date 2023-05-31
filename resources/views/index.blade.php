<!DOCTYPE html>
<html>
<head>
    <title>Manajemen Dosen</title>
    <!-- Panggil file CSS Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Tabel Dosen</h1>
        <div class="text-right">
            <a href="{{ route('dosen.create') }}" class="btn btn-primary">+ Data Dosen</a>
            <a href="{{ route('dosen.index') }}" class="btn btn-danger">Logout</a>
        </div>
        <br/>

        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif

        @if(count($dosens) > 0)
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NIP</th>
                    <th>NAMA</th>
                    <th>FAKULTAS</th>
                    <th>ACTION</th>
                </tr>
            </thead>
            <tbody>
                @foreach($dosens as $dosen)
                <tr>
                    <td>{{ $dosen->id }}</td>
                    <td>{{ $dosen->nip }}</td>
                    <td>{{ $dosen->nama }}</td>
                    <td>{{ $dosen->fakultas }}</td>
                    <td>
                        <a href="{{ route('dosen.edit', $dosen->id) }}" class="btn btn-success">Edit</a>
                        <form action="{{ route('dosen.destroy', $dosen->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Apakah anda yakin ingin menghapus?')" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @else
        <p>Tidak ada data yang ditemukan.</p>
        @endif
    </div>

    <!-- Panggil file JavaScript Bootstrap -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
