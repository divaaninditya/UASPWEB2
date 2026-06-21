<?php
session_start();
include 'config/koneksi.php';

if(isset($_POST['login'])){

$username=$_POST['username'];
$password=md5($_POST['password']);

$query=mysqli_query(
$conn,
"SELECT * FROM admin
WHERE username='$username'
AND password='$password'"
);

if(mysqli_num_rows($query)>0){

$_SESSION['login']=true;

header("Location: dashboard.php");

}
}
?>

<!DOCTYPE html>
<html>

<head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container">

<div class="row vh-100 align-items-center">

<div class="col-md-7">

<h1>Sistem Informasi Akademik</h1>

<p>Project UAS Pemrograman Web II</p>

</div>

<div class="col-md-4">

<form method="POST">

<div class="card shadow p-4">

<h4>Login Admin</h4>

<input
type="text"
name="username"
class="form-control mb-3"
placeholder="Username">

<input
type="password"
name="password"
class="form-control mb-3"
placeholder="Password">

<button
name="login"
class="btn btn-primary">

Masuk Dashboard

</button>

</div>

</form>

</div>

</div>

</div>

</body>
</html>