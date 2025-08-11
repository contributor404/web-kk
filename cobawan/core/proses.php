<?php

include "koneksi.php";

if (isset($_GET["action"]) && $_GET["action"] == "delete") {
    $id = $_GET["id"];

    $query = "DELETE FROM `siswa` WHERE id=$id";

    $konek->query($query);
} else if (isset($_POST["nama"]) && isset($_POST["kelas"]) && isset($_POST["jurusan"])) {
    $nama = $_POST["nama"];
    $kelas = $_POST["kelas"];
    $jurusan = $_POST["jurusan"];

    $query = "INSERT INTO `siswa` (nama, kelas, jurusan) VALUES ('$nama', '$kelas', '$jurusan')";

    $konek->query($query);
}

header("Location: ../pages/fahim.php");