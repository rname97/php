<?php 
 
session_start();
unset($_SESSION['username']);

if(!isset($_SESSION['username'])) {
    echo "<script>
        alert('Anda Telah Logout');
        window.location.href='index.php';
        </script>";
}
 

 
?>