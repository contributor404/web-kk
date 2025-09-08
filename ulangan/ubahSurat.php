<?php
include "koneksi.php";
include "bootstrap.php";

$id = $_GET["id"];

$response = $konek->query("SELECT * FROM surat WHERE no=$id");
$data = $response->fetch_assoc();

if (isset($_POST["ubah_surat"])) {
    $no_surat = $_POST['no_surat'];
    $tgl_surat = $_POST['tgl_surat'];
    $type_surat = $_POST['type_surat'];
    $isi_surat = $_POST['isi_surat'];
    $ditunjukan_kpd = $_POST['ditunjukan_kpd'];

    $konek->query("UPDATE `surat` SET `no_surat`='$no_surat',`tgl_surat`='$tgl_surat',`type_surat`='$type_surat',`isi_surat`='$isi_surat',`ditunjukan_kpd`='$ditunjukan_kpd' WHERE no=$id");

    $response = $konek->query("SELECT * FROM surat WHERE no=$id");
    $data = $response->fetch_assoc();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Surat</title>
</head>

<body>
    <?php
    include "navbar.php";
    ?>

    <form class="px-5" method="POST">
        <div class="mb-3">
            <label for="no_surat" class="form-label">No Surat</label>
            <input type="text" class="form-control" id="no_surat" required name="no_surat" value="<?= $data['no_surat'] ?>">
        </div>
        <div class="mb-3">
            <label for="tgl_surat" class="form-label">Tanggal Surat</label>
            <input type="date" class="form-control" id="tgl_surat" required name="tgl_surat" value="<?= $data['tgl_surat'] ?>">
        </div>
        <div class="mb-3">
            <label for="type_surat" class="form-label">Type Surat</label>
            <input type="text" class="form-control" id="type_surat" required name="type_surat" value="<?= $data['type_surat'] ?>">
        </div>
        <div class="mb-3">
            <label for="isi_surat" class="form-label">Isi Surat</label>
            <textarea class="form-control" id="isi_surat" required name="isi_surat" style="height: 100px" value="<?= $data['isi_surat'] ?>"><?= $data['isi_surat'] ?></textarea>
        </div>
        <div class="mb-3">
            <label for="ditunjukan_kpd" class="form-label">Ditunjukan Kepada</label>
            <input type="text" class="form-control" id="ditunjukan_kpd" required name="ditunjukan_kpd" value="<?= $data['ditunjukan_kpd'] ?>">
        </div>
        <button type="submit" name="ubah_surat" class="btn btn-primary">Ubah</button>
    </form>
</body>

</html>