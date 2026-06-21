<?php

session_start();

include 'config/koneksi.php';

if(isset($_POST['login'])){

    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $cek = mysqli_query(
        $conn,
        "SELECT * FROM users
         WHERE username='$username'
         AND password='$password'"
    );

    if(mysqli_num_rows($cek) > 0){

        $user = mysqli_fetch_assoc($cek);

        $_SESSION['login'] = true;
        $_SESSION['id_user'] = $user['id'];
        $_SESSION['nama'] = $user['nama_lengkap'];
        $_SESSION['level'] = $user['level'];

        header("Location: dashboard.php");
        exit;
    } else {

        echo "<script>alert('Username atau Password Salah');</script>";

    }
}
?>
<!DOCTYPE html>
<html>
<head>

<meta charset="UTF-8">

<title>Login Admin</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" rel="stylesheet">

<link rel="stylesheet" href="assets/css/login.css">

</head>

<body>

<div class="login-wrapper">

    <div class="hero-side">

        <div class="hero-content">

            <span class="badge bg-light text-dark">
                UNIVERSITAS PAMULANG
            </span>

            <h1>
            Academic Management System
            </h1>

            <p>
            Kelola data mahasiswa, galeri foto,
            dan manajemen pengguna dalam satu dashboard.
            </p>

        </div>

    </div>

    <div class="form-side">

        <div class="login-card">

            <h3>Portal Admin</h3>

            <p>Sistem Informasi</p>

            <form method="POST">

                <input
                type="text"
                name="username"
                class="form-control mb-3"
                placeholder="Masukkan Username">

                <input
                type="password"
                name="password"
                class="form-control mb-4"
                placeholder="Masukkan Password">

                <button
                type="submit"
                name="login"
                class="btn-login">

                MASUK KE DASHBOARD

                </button>

            </form>

        </div>

    </div>

</div>

</body>
</html>