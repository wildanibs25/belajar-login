<?php

include "../app.php";

if (isset($_POST['button'])) {
    $name       = $_POST['name'];
    $email      = $_POST['email'];
    $password   = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $query  = "INSERT INTO `users` (`name`, `email`, `password`) VALUES ('$name', '$email', '$password')";

    $result = $connect->query($query);

    if($result){
        echo "<script>window.location.href = '../pages/login.php'</script>";
        exit();
    }else{
        echo "<script>window.location.href = '../pages/register.php'</script>";
        exit();
    }
}
