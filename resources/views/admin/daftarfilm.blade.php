<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Daftar Film - Admin Bioskop</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body class="bg-light">
    <div class="container-fluid">
        <div class="row min-vh-100">

            <!-- Sidebar Component -->
            <x-sidebar />

            <!-- Main Content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-5 py-4">
                <h1 class="mb-4">Daftar Film</h1>
                <p>Berikut adalah data film yang tersedia:</p>

                <!-- Table -->
                <div class="card">
                    <div class="card-header bg-success text-white">
                        Data Film
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped table-hover">
                            <thead class="table-dark">
                                <tr>
                                    <th>#</th>
                                    <th>Judul Film</th>
                                    <th>Genre</th>
                                    <th>Durasi</th>
                                    <th>Rating</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Avengers: Endgame</td>
                                    <td>Action</td>
                                    <td>3h 2m</td>
                                    <td>PG-13</td>
                                    <td>
                                        <button class="btn btn-primary btn-sm">Edit</button>
                                        <button class="btn btn-danger btn-sm">Hapus</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Frozen II</td>
                                    <td>Animation</td>
                                    <td>1h 43m</td>
                                    <td>G</td>
                                    <td>
                                        <button class="btn btn-primary btn-sm">Edit</button>
                                        <button class="btn btn-danger btn-sm">Hapus</button>
                                    </td>
                                </tr>
                                <!-- Tambahkan baris film lainnya di sini -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </main>

        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
