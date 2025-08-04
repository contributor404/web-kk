<?php

include "koneksi.php";

if (isset($_GET["action"]) && $_GET["action"] == "delete") {
    $id = $_GET["id"];

    $query = "DELETE FROM `siswa` WHERE id=$id";

    $konek->query($query);
} else if (isset($_GET["action"]) && $_GET["action"] == "add") {
    $nama = $_GET["nama"];
    $kelas = $_GET["kelas"];
    $jurusan = $_GET["nama"];

    $query = "INSERT INTO `siswa` (nama, kelas, jurusan) VALUES ('Nama Siswa', 'Kelas Siswa','')";

    $konek->query($query);
}

header("Location: ../pages/fahim.php");