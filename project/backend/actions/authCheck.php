<?php 
if(!isset($_SESSION['id'])){
    $_SESSION['error'] = "Anda tidak memiliki akses karena tidak Login!";
    echo "<script>window.location.href = '../pages/login.php'</script>";
    exit();
}//haloooooo
