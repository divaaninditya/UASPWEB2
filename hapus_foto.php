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

$foto = mysqli_fetch_assoc($data);

if($foto){

    $file = "assets/uploads/" . $foto['gambar'];

    if(file_exists($file)){
        unlink($file);
    }

    mysqli_query(
    $conn,
    "DELETE FROM galeri WHERE id='$id'"
    );
}

header("Location: galeri.php");
exit;