<?php

session_start();

if(!isset($_SESSION['login'])){
    header("Location:index.php");
    exit;
}

include 'config/koneksi.php';

include 'partials/header.php';
include 'partials/sidebar.php';

/* Hitung jumlah admin */
$qAdmin = mysqli_query(
$conn,
"SELECT * FROM users WHERE level='ADMIN'"
);

$admin = mysqli_num_rows($qAdmin);
$admin = mysqli_num_rows($qAdmin);

/* Hitung jumlah mahasiswa */
$qMhs = mysqli_query($conn,"SELECT * FROM mahasiswa");
$mhs = mysqli_num_rows($qMhs);

/* Hitung jumlah galeri */
$qGaleri = mysqli_query($conn,"SELECT * FROM galeri");
$galeri = mysqli_num_rows($qGaleri);

?>

<div class="content">

<div class="hero">

    <h2>
        Selamat Datang, <?= $_SESSION['nama']; ?> 👋
    </h2>

    <p>
        Login sebagai :
        <strong><?= $_SESSION['level']; ?></strong>
    </p>

</div>

<div class="row">
<div class="col-md-4 mb-4">

    <div class="card-stat">

        <div class="d-flex justify-content-between align-items-center">

            <div>

                <h2><?= $admin; ?></h2>

                <p>Total Administrator</p>

            </div>

            <div class="icon-box">

                <i class="fa fa-user-shield"></i>

            </div>

        </div>

    </div>

</div>

<div class="col-md-4 mb-4">

    <div class="card-stat">

        <div class="d-flex justify-content-between align-items-center">

            <div>

                <h2><?= $mhs; ?></h2>

                <p>Data Mahasiswa</p>

            </div>

            <div class="icon-box">

                <i class="fa fa-users"></i>

            </div>

        </div>

    </div>

</div>

<div class="col-md-4 mb-4">

    <div class="card-stat">

        <div class="d-flex justify-content-between align-items-center">

            <div>

                <h2><?= $galeri; ?></h2>

                <p>Koleksi Gambar</p>

            </div>

            <div class="icon-box">

                <i class="fa fa-image"></i>

            </div>

        </div>

    </div>

</div>
```

</div>


<hr>

<p class="text-center text-muted">

Copyright © 2026 PWEB II UAS

</p>

</div>

<?php include 'partials/footer.php'; ?>