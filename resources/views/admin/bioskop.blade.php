<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
  </head>
  <body>
    <body class="bg-light">
        <div class="container-fluid">
            <div class="row min-vh-100">
                <!-- Sidebar -->
             <x-sidebar />

<!-- navigasi atas -->
<!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand fw-bold" href="#">Admin Bioskop</a>
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarAdmin" aria-controls="navbarAdmin" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarAdmin">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Daftar Film</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Jadwal Tayang</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Laporan</a>
        </li>
      </ul>

      <form class="d-flex" method="POST" action="{{ route('logout') }}">
        @csrf
        <button class="btn btn-danger" type="submit">Logout</button>
      </form>
    </div>
  </div>
</nav> -->
            <!-- Main Content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-5 py-4">
                <h1 class="mb-4">Selamat Datang di Dashboard Admin</h1>
                <p>Berikut adalah data jadwal film yang akan tayang:</p>

                <!-- Table -->
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        Jadwal Tayang Film
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Judul Film</th>
                                    <th>Tanggal Tayang</th>
                                    <th>Jam</th>
                                    <th>Studio</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Avengers: Endgame</td>
                                    <td>2025-06-10</td>
                                    <td>18:30</td>
                                    <td>Studio 1</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Spiderman: No Way Home</td>
                                    <td>2025-06-11</td>
                                    <td>20:00</td>
                                    <td>Studio 2</td>
                                </tr>
                                <!-- Tambahkan baris lainnya di sini -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </main>
            </div>
        </div>

        
    <!-- Bootstrap JS (opsional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
  </body>
</html>

