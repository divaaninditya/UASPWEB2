<?php

$conn = mysqli_connect(
    "sql302.infinityfree.com",
    "if0_42236249",
    "e2Vdhtke8zrD",
    "if0_42236249_web2_uas"
);

if(!$conn){
    die("Koneksi gagal: " . mysqli_connect_error());
}

?>