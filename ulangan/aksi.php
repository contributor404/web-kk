<?php

include "koneksi.php";

$id = $_GET["id"];
if (isset($_GET["hapus"])) {
    $konek->query("DELETE FROM `surat` WHERE no=$id");
}

header("Location: ./index.php");