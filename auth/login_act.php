<?php
    include("../inc/koneksi.php");
    require_once('../functions.php');

    $username = $_POST['uname'];
    $password = $_POST['password'];
    $hash = hash_password($password);

    //SQL
    $query = mysqli_query($conn, "select * from users where username='$username' AND password='$hash'");
    $rquery = mysqli_fetch_array($query);
    $cquery = mysqli_num_rows($query);

    if($cquery>0){
        session_start();
        $_SESSION['id_user'] = $rquery['id_user'];
        $_SESSION['username'] = $rquery['username'];
        $_SESSION['password'] = $rquery['password'];
        $_SESSION['role'] = $rquery['role'];

        header('location:../home.php');
    }else{
        echo '<script language="javascript">alert("Login gagal");history.go(-1);</script>';
    }
?>