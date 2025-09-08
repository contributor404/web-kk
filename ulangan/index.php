<?php
include "koneksi.php";
include "bootstrap.php";

$response = $konek->query("SELECT * FROM surat");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ulangan</title>
    <style>
        th, td {
            text-align: center;
        }
    </style>
</head>

<body>
    <?php
    include "navbar.php";
    ?>

    <main class="px-5">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">No Surat</th>
                    <th scope="col">Tanggal Surat</th>
                    <th scope="col">Type Surat</th>
                    <th scope="col">Isi Surat</th>
                    <th scope="col">Ditunjukan Kepada</th>
                    <th scope="col" colspan="2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 0;
                while ($data = $response->fetch_assoc()) {
                    $no++;
                ?>
                    <tr>
                        <td scope="row"><?= $no ?></td>
                        <td scope="row"><?= $data["no_surat"] ?></td>
                        <td scope="row"><?= $data["tgl_surat"] ?></td>
                        <td scope="row"><?= $data["type_surat"] ?></td>
                        <td scope="row"><?= $data["isi_surat"] ?></td>
                        <td scope="row"><?= $data["ditunjukan_kpd"] ?></td>
                        <td scope="row"><a onclick="return confirm('Yakin?');" class="btn btn-danger" href="./aksi.php?hapus=1&id=<?= $data["no"] ?>">Hapus</a></td>
                        <td scope="row"><a class="btn btn-primary" href="./ubahSurat.php?id=<?= $data["no"] ?>">Ubah</a></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </main>
</body>

</html>