<?php
    session_start();
    echo isset($_SESSION['login_user']);
    echo isset($_SESSION['admin_user']);
    if(isset($_SESSION['login_user']) == 0 && isset($_SESSION['admin_user']) == 0){
        header("location:./logout.php");
    } else if(isset($_SESSION['admin_user']) == 0) {
        header("location:userprofile.php");
    } else {
        header("location:../admin/adminProfile.php");
    }
?>