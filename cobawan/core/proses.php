<?php

include "koneksi.php";

function movePage($page) {
    header("Location: ../pages/fahim.php");
}

if ($_GET["action"] == "delete") {
    $id = $_GET["id"];

    $query = "DELETE FROM `siswa` WHERE id=$id";

    $konek->query($query);

    movePage("../pages/fahim.php");
}

if (isset($_POST["tambah"])) {
    $nama = $_POST["nama"];
    $kelas = $_POST["kelas"];
    $jurusan = $_POST["jurusan"];

    $query = "INSERT INTO `siswa` (nama, kelas, jurusan) VALUES ('$nama', '$kelas', '$jurusan')";

    $konek->query($query);
    movePage("../pages/fahim.php");
}

if (isset($_POST["update"])) {
    $id = $_POST["id"];
    $nama = $_POST["nama"];
    $kelas = $_POST["kelas"];
    $jurusan = $_POST["jurusan"];

    $query = "UPDATE `siswa` SET nama='$nama', kelas='$kelas', jurusan='$jurusan' WHERE id=$id";

    $konek->query($query);

    movePage("../pages/fahim.php");
}