<!DOCTYPE html>
<html>
  <head>
    <title>Manajemen Dosen</title>
    <!-- Panggil file CSS Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container">
      <h1>Form Dosen Baru</h1>

      <!-- Tampilkan form -->
      <form method="POST" action="{{ route('dosen.store') }}">
        @csrf
        <div class="form-group">
          <label for="nip">NIP</label>
          <input type="number" class="form-control" id="nip" name="nip" placeholder="Masukkan nip">
        </div>
        <div class="form-group">
          <label for="nama">Nama</label>
          <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama">
        </div>
        <div class="form-group">
          <label for="fakultas">Fakultas</label>
          <input type="text" class="form-control" id="fakultas" name="fakultas" placeholder="Masukkan fakultas">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>

    <!-- Panggil file JavaScript Bootstrap -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  </body>
</html>
