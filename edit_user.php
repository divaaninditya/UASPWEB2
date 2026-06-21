<?php

include 'config/koneksi.php';

$id = $_GET['id'];

$data = mysqli_query(
$conn,
"SELECT * FROM users
WHERE id='$id'"
);

$user = mysqli_fetch_assoc($data);

if(isset($_POST['update'])){

$nama = $_POST['nama'];
$username = $_POST['username'];
$email = $_POST['email'];
$level = $_POST['level'];

mysqli_query(
$conn,
"UPDATE users SET

nama_lengkap='$nama',
username='$username',
email='$email',
level='$level'

WHERE id='$id'"
);

header("Location: users.php");
}
?>

<?php include 'partials/header.php'; ?>
<?php include 'partials/sidebar.php'; ?>

<div class="content">

<div class="card p-4">

<h3>Edit User</h3>

<form method="POST">

<div class="mb-3">
<label>Nama Lengkap</label>
<input
type="text"
name="nama"
value="<?= $user['nama_lengkap']; ?>"
class="form-control">
</div>

<div class="mb-3">
<label>Username</label>
<input
type="text"
name="username"
value="<?= $user['username']; ?>"
class="form-control">
</div>

<div class="mb-3">
<label>Email</label>
<input
type="email"
name="email"
value="<?= $user['email']; ?>"
class="form-control">
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
name="update"
class="btn btn-primary">

Update

</button>

</form>

</div>

</div>

<?php include 'partials/footer.php'; ?>