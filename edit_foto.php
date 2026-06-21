<?php

session_start();

if(!isset($_SESSION['login'])){
    header("Location:index.php");
    exit;
}

include 'config/koneksi.php';

$id = $_GET['id'];

$data = mysqli_query(
$conn,
"SELECT * FROM galeri WHERE id='$id'"
);

$d = mysqli_fetch_assoc($data);

if(isset($_POST['update'])){

    $judul = $_POST['judul'];
    $deskripsi = $_POST['deskripsi'];

    if($_FILES['gambar']['name'] != ""){

        $gambar = $_FILES['gambar']['name'];
        $tmp = $_FILES['gambar']['tmp_name'];

        move_uploaded_file(
        $tmp,
        "assets/uploads/".$gambar
        );

        if(file_exists("assets/uploads/".$d['gambar'])){
            unlink("assets/uploads/".$d['gambar']);
        }

        mysqli_query(
        $conn,
        "UPDATE galeri SET
        judul='$judul',
        deskripsi='$deskripsi',
        gambar='$gambar'
        WHERE id='$id'"
        );

    }else{

        mysqli_query(
        $conn,
        "UPDATE galeri SET
        judul='$judul',
        deskripsi='$deskripsi'
        WHERE id='$id'"
        );

    }

    header("Location: galeri.php");
    exit;
}

include 'partials/header.php';
include 'partials/sidebar.php';

?>

<div class="content">

<div class="card p-4">

<h3>Edit Foto</h3>

<form method="POST" enctype="multipart/form-data">

<div class="mb-3">

<label>Judul</label>

<input
type="text"
name="judul"
class="form-control"
value="<?= $d['judul']; ?>"
required>

</div>

<div class="mb-3">

<label>Deskripsi</label>

<textarea
name="deskripsi"
class="form-control"
rows="4"><?= $d['deskripsi']; ?></textarea>

</div>

<div class="mb-3">

<label>Foto Saat Ini</label>
<br>

<img
src="assets/uploads/<?= $d['gambar']; ?>"
width="250"
class="img-thumbnail">

</div>

<div class="mb-3">

<label>Ganti Foto (Opsional)</label>

<input
type="file"
name="gambar"
class="form-control">

</div>

<button
type="submit"
name="update"
class="btn btn-success">

Update

</button>

<a
href="galeri.php"
class="btn btn-secondary">

Kembali

</a>

</form>

</div>

</div>

<?php include 'partials/footer.php'; ?>