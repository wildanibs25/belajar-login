<?php
session_start();
session_destroy();
session_start();

$_SESSION['success'] = "Berhasil Logout";

echo "<script>window.location.href = '../pages/login.php'</script>";
exit();
