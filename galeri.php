<?php

session_start();

if(!isset($_SESSION['login'])){

header("Location:index.php");

exit;

}
?>
<?php

include 'config/koneksi.php';
include 'partials/header.php';
include 'partials/sidebar.php';

$data = mysqli_query(
$conn,
"SELECT * FROM galeri
ORDER BY id DESC"
);

?>

<div class="content">

<h3>Galeri Foto</h3>

<div class="row">

<?php
while($d=mysqli_fetch_assoc($data)){
?>

<div class="col-md-3 mb-4">

    <div class="card h-100">

        <img
        src="assets/uploads/<?= $d['gambar']; ?>"
        class="card-img-top"
        height="250"
        style="object-fit:cover;">

        <div class="card-body">

            <h5><?= $d['judul']; ?></h5>

            <p><?= $d['deskripsi']; ?></p>

            <div class="d-flex gap-2">

                <a
                href="edit_foto.php?id=<?= $d['id']; ?>"
                class="btn btn-warning btn-sm">

                <i class="fa fa-pen"></i>
                Edit

                </a>

                <a
                href="hapus_foto.php?id=<?= $d['id']; ?>"
                class="btn btn-danger btn-sm"
                onclick="return confirm('Yakin hapus foto ini?')">

                <i class="fa fa-trash"></i>
                Hapus

                </a>

            </div>

        </div>

    </div>

</div>
<?php } ?>

</div>

</div>

<?php include 'partials/footer.php'; ?>