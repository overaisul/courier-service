<?php
    if(!isset($_SESSION['user'])){
        $_SESSION['no-login-message']="<div class='error text-center'>Please login to admin panel.</div>";
        header('location:'.SITEURL.'office/login.php');
    }
?>