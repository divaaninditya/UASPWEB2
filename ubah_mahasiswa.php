<?php

include 'config/koneksi.php';

$id = $_GET['id'];

$data = mysqli_query(
$conn,
"SELECT * FROM mahasiswa
WHERE id='$id'"
);

$mhs = mysqli_fetch_assoc($data);

if(isset($_POST['update'])){

    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $prodi = $_POST['prodi'];
    $usia = $_POST['usia'];

    mysqli_query(
    $conn,
    "UPDATE mahasiswa SET

    nim='$nim',
    nama='$nama',
    prodi='$prodi',
    usia='$usia'

    WHERE id='$id'"
    );

    header("Location: mahasiswa.php");
}
?>

<?php include 'partials/header.php'; ?>
<?php include 'partials/sidebar.php'; ?>

<div class="content">

<div class="card p-4">

<h4>Edit Mahasiswa</h4>

<form method="POST">

<div class="mb-3">
<label>NIM</label>

<input
type="text"
name="nim"
value="<?= $mhs['nim']; ?>"
class="form-control">

</div>

<div class="mb-3">
<label>Nama</label>

<input
type="text"
name="nama"
value="<?= $mhs['nama']; ?>"
class="form-control">

</div>

<div class="mb-3">
<label>Program Studi</label>

<input
type="text"
name="prodi"
value="<?= $mhs['prodi']; ?>"
class="form-control">

</div>

<div class="mb-3">
<label>Usia</label>

<input
type="number"
name="usia"
value="<?= $mhs['usia']; ?>"
class="form-control">

</div>

<button
type="submit"
name="update"
class="btn btn-primary">

Update

</button>

</form>

</div>

</div>

<?php include 'partials/footer.php'; ?>