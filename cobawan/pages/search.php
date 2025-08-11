<?php
include "../core/koneksi.php";

$query = "SELECT * FROM `siswa`";

$from_database = $konek->query($query);
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <style>
        i {
            cursor: pointer;
        }
    </style>
</head>

<body>
    <h1>Hasil</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">no</th>
                <th scope="col">nama</th>
                <th scope="col">kelas</th>
                <th scope="col">jurusan</th>
                <th scope="col">action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (isset($_GET['cari'])) {
                $cari = $_GET['cari'];
            } else {
                $cari = '';
            }
            $tampil = $konek->query("SELECT * FROM `siswa` WHERE nama LIKE '%" . $cari . "%' OR kelas LIKE '%" . $cari . "%' OR jurusan LIKE '%" . $cari . "%'");
            // $datas = $tampil->fetch_all();
            // var_dump($datas);
            $id = 0;
            while ($hasil = $tampil->fetch_assoc()) {
                $id++
            ?>
                <tr>
                    <th scope="row"><?= $id ?></th>
                    <td><?= $hasil["nama"] ?></td>
                    <td><?= $hasil["kelas"] ?></td>
                    <td><?= $hasil["jurusan"] ?></td>
                    <td>
                        <a href="../core/proses.php?action=delete&id=<?= $hasil["id"] ?>" onclick="return confirm('Apakah anda yakin?')"><i class="bi bi-trash text-danger fs-4"></i></a>
                        <a href="../pages/update.php?id=<?= $hasil["id"] ?>"><i class="bi ms-3 fs-4 bi-pencil text-warning"></i></i></a>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
        crossorigin="anonymous"></script>
</body>

</html>