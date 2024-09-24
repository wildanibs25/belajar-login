<?php
if (isset($_SESSION['id'])) {
    $_SESSION['error'] = "Anda sudah Login!";
    echo "<script>window.location.href = '../pages/index.php'</script>";
    exit();
}
