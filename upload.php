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

if(isset($_POST['upload'])){

    $judul = $_POST['judul'];
    $deskripsi = $_POST['deskripsi'];

    $gambar = $_FILES['gambar']['name'];
    $tmp = $_FILES['gambar']['tmp_name'];

    move_uploaded_file(
    $tmp,
    "assets/uploads/".$gambar
    );

    mysqli_query(
    $conn,
    "INSERT INTO galeri
    (judul,deskripsi,gambar)
    VALUES
    ('$judul','$deskripsi','$gambar')"
    );

echo "

<script>

Swal.fire({
icon:'success',
title:'Berhasil',
text:'Gambar berhasil diupload'
});

</script>

";
}
?>

<div class="content">

<div class="card p-4">

<h3>Upload Gambar</h3>

<form
method="POST"
enctype="multipart/form-data">

<div class="mb-3">

<label>Judul</label>

<input
type="text"
name="judul"
class="form-control">

</div>

<div class="mb-3">

<label>Deskripsi</label>

<textarea
name="deskripsi"
class="form-control"></textarea>

</div>

<div class="mb-3">

<label>Pilih Gambar</label>

<input
type="file"
name="gambar"
class="form-control">

</div>

<button
type="submit"
name="upload"
class="btn btn-primary">

Upload

</button>

</form>

</div>

</div>

<?php include 'partials/footer.php'; ?>