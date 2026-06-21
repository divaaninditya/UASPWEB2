<?php

session_start();

if(!isset($_SESSION['login'])){
    header("Location:index.php");
    exit;
}

if($_SESSION['level'] != "ADMIN"){
    header("Location:dashboard.php");
    exit;
}

include 'config/koneksi.php';
include 'partials/header.php';
include 'partials/sidebar.php';

$data = mysqli_query(
    $conn,
    "SELECT * FROM users ORDER BY id DESC"
);

?>

<div class="content">

<div class="table-box">

<div class="d-flex justify-content-between mb-3">

<h3>Manajemen User</h3>

<a href="tambah_user.php"
class="btn btn-primary">

Tambah User

</a>

</div>

<table class="table table-bordered datatable">

<thead>

<tr>
<th>No</th>
<th>Nama Lengkap</th>
<th>Username</th>
<th>Email</th>
<th>Level</th>
<th>Aksi</th>
</tr>

</thead>

<tbody>

<?php

$no = 1;

while($d=mysqli_fetch_assoc($data)){

?>

<tr>

<td><?= $no++; ?></td>

<td><?= $d['nama_lengkap']; ?></td>

<td><?= $d['username']; ?></td>

<td><?= $d['email']; ?></td>

<td>

<?php
if($d['level']=="ADMIN"){
    echo "<span class='badge bg-danger'>ADMIN</span>";
}else{
    echo "<span class='badge bg-primary'>OPERATOR</span>";
}
?>

</td>

<td>

<a
href="edit_user.php?id=<?= $d['id']; ?>"
class="btn btn-warning btn-sm">

Edit

</a>

<a
href="hapus_user.php?id=<?= $d['id']; ?>"
class="btn btn-danger btn-sm"
onclick="return confirm('Yakin hapus user?')">

Hapus

</a>

</td>

</tr>

<?php } ?>

</tbody>

</table>

</div>

</div>

<?php include 'partials/footer.php'; ?>