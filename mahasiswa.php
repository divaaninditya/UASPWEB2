<?php
include 'partials/header.php';
include 'partials/sidebar.php';
?>

<div class="content">

    <h3>Data Mahasiswa</h3>

    <a href="tambah_mahasiswa.php" class="btn btn-primary mb-3">
        Tambah Mahasiswa
    </a>

    <?php include 'data_mahasiswa.php'; ?>

</div>

<?php include 'partials/footer.php'; ?>