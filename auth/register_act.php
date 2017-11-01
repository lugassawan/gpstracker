<?php
    include("../inc/koneksi.php");
    require_once('../functions.php');
    
    //Mengatur waktu sesuai timezone
    date_default_timezone_set('Asia/Jakarta');
    
    //Cek sudah submit form field
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        //Memasukkan nilai ke variabel
        $username = $_POST['uname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $hash = hash_password($password);
        $repass = $_POST['repass'];
        $role = 'customers';
        $created_at = date("Y-m-d H:i:s");
        $updated_at = date("Y-m-d H:i:s");

        if($password==$repass){
            //SQL ke database
            $regis = mysqli_query($conn, "insert into users values(NULL,'$username','$email','$hash','$role','$created_at','$updated_at','')");
            if ($regis) {
                header('location:../home.php');
            }else{
                echo "Error: " . $regis . "<br>" . mysqli_error($conn);
            }
            //End SQL
        }else{
            echo '<script language="javascript">alert("Maaf, gagal mendaftarkan akun");history.go(-1);</script>';
        }
    }
?>
