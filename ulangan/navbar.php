<?php
include "koneksi.php";

$query = $_GET['query'] ?? "";

$response = $konek->query("SELECT * FROM surat WHERE type_surat LIKE '%$query%' or no_surat LIKE '%$query%'");
?>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Website Surat</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="./index.php">Data Surat</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./buatSurat.php">Tambah Surat</a>
                </li>
            </ul>

            <form class="d-flex" role="search" method="GET">
                <input class="form-control me-2" name="query" type="search" placeholder="Cari" aria-label="Cari" />
                <button class="btn btn-outline-success" type="submit">Cari</button>
            </form>
        </div>
    </div>
</nav>