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

$data = mysqli_query(
$conn,
"SELECT * FROM admin LIMIT 1"
);

$admin = mysqli_fetch_assoc($data);

?>

<div class="content">

<div class="card p-4">

<h3>Profil Administrator</h3>

<hr>

<table class="table">

<tr>
<td width="250">Nama Lengkap</td>
<td><?= $admin['nama']; ?></td>
</tr>

<tr>
<td>Username</td>
<td><?= $admin['username']; ?></td>
</tr>

<tr>
<td>Email</td>
<td><?= $admin['email']; ?></td>
</tr>

</table>

</div>

</div>

<?php include 'partials/footer.php'; ?>