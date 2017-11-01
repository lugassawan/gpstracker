<?php
    //$lat = -6.975353*1000000;
    $lng0 = 107.629401;
    
    //Faktor pengubah
    //$gsr = 0.0002;
    for($i=0;$i<10;$i++){
        $lat[$i] = -6.975353;
        $geser[$i] = 0.0002*$i;
        $lng[$i] = $lng0+$geser[$i];
        echo "</br>==</br>";
        echo $lat[$i] . "</br>";
        echo $lng[$i] . "</br>";
        echo "</br>==</br>";
    }
?>