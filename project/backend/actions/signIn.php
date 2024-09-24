<?php

include "../app.php";

if (isset($_POST['button'])) {
    $email      = $_POST['email'];
    $password   = $_POST['password'];

    $query = "SELECT * FROM `users` WHERE email='$email' LIMIT 1";

    $result = $connect->query($query);

    $user   = $result->fetch_object();

    $_SESSION['value_email'] = $email;

    if ($user) {
        // fungsi ini berfungsi untuk menverifikasi password yang dari form dengan password yang dari database
        if (password_verify($password, $user->password)) {
            $_SESSION['id']     = $user->id;
            $_SESSION['name']   = $user->name;
            $_SESSION['email']  = $user->email;
            $_SESSION['role']  = $user->role;

            $_SESSION['success'] = "Berhasil Login";
            echo "<script>window.location.href = '../pages/index.php'</script>";
            exit();
        }
        $_SESSION['error_password'] = "Password Salah!";
        echo "<script>window.location.href = '../pages/login.php'</script>";
        exit();
    }
    $_SESSION['error_email'] = "Email tidak Ditemukan!";
    echo "<script>window.location.href = '../pages/login.php'</script>";
    exit();
}
