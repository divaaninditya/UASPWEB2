<?php

include 'config/koneksi.php';

if(isset($_POST['simpan'])){

    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $prodi = $_POST['prodi'];
    $usia = $_POST['usia'];

    mysqli_query(
    $conn,
    "INSERT INTO mahasiswa
    (nim,nama,prodi,usia)
    VALUES
    ('$nim','$nama','$prodi','$usia')"
    );

    header("Location: mahasiswa.php");
}
?>

<?php include 'partials/header.php'; ?>
<?php include 'partials/sidebar.php'; ?>

<div class="content">

<div class="card p-4">

<h4>Tambah Mahasiswa</h4>

<form method="POST">

<div class="mb-3">
<label>NIM</label>
<input
type="text"
name="nim"
class="form-control">
</div>

<div class="mb-3">
<label>Nama</label>
<input
type="text"
name="nama"
class="form-control">
</div>

<div class="mb-3">
<label>Program Studi</label>
<input
type="text"
name="prodi"
class="form-control">
</div>

<div class="mb-3">
<label>Usia</label>
<input
type="number"
name="usia"
class="form-control">
</div>

<button
type="submit"
name="simpan"
class="btn btn-success">

Simpan

</button>

</form>

</div>

</div>

<?php include 'partials/footer.php'; ?>