<?php

include 'config/koneksi.php';

if(isset($_POST['simpan'])){

$nama = $_POST['nama'];
$username = $_POST['username'];
$password = md5($_POST['password']);
$email = $_POST['email'];
$level = $_POST['level'];

mysqli_query(
$conn,
"INSERT INTO users
(nama_lengkap,username,password,email,level)
VALUES
('$nama','$username','$password','$email','$level')"
);

header("Location: users.php");
}
?>

<?php include 'partials/header.php'; ?>
<?php include 'partials/sidebar.php'; ?>

<div class="content">

<div class="card p-4">

<h3>Tambah User</h3>

<form method="POST">

<div class="mb-3">
<label>Nama Lengkap</label>
<input type="text" name="nama" class="form-control">
</div>

<div class="mb-3">
<label>Username</label>
<input type="text" name="username" class="form-control">
</div>

<div class="mb-3">
<label>Password</label>
<input
type="password"
name="password"
class="form-control"
required>
</div>

<div class="mb-3">
<label>Email</label>
<input type="email" name="email" class="form-control">
</div>

<div class="mb-3">
<label>Level</label>

<select name="level" class="form-control">

<option value="ADMIN">ADMIN</option>

<option value="OPERATOR">OPERATOR</option>

</select>

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