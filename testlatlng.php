<?php
    include('inc/koneksi.php');
    
    //Mengatur waktu sesuai timezone
    date_default_timezone_set('Asia/Jakarta');

    //Jika sudah dihubungan gunakan ini
    //$id_user = $_SESSION['id_user'];
    //sementara pake ini
    $id_user = 1;

    //Start first poin
    //$lat0 = -6.975353;
    $lng0 = 107.629401;

    //Looping untuk memasukkan beberapa data
    for($i=0;$i<10;$i++){
        $lat[$i] = -6.975353;
        
        //Faktor pengubah
        $geser[$i] = 0.0002*$i;
        $lng[$i] = $lng0+$geser[$i];

        $created_at[$i] = date("Y-m-d H:i:s");
        $updated_at[$i] = date("Y-m-d H:i:s");

        //SQL
        $track = mysqli_multi_query($conn,"insert into lokasi values(NULL,'$lat[$i]','$lng[$i]','$created_at[$i]','$updated_at[$i]','','$id_user')");
        if($track){
            echo "Lokasi ke-" . $i . "sudah masuk";
        }else{
            echo "Error: " . $track . "<br>" . mysqli_error($conn);
        }
    }
?>