<?php
    $gunler=["Pazartesi","Sali","Carsamba","Cuma","Cumartesi","Pazar"];
    if(in_array("Persembe",$gunler)==0){
        echo "Bu Deger Dizide Yok<br>";
    }
    else{
        echo "Bu Deger Dizide Mevcut<br>";
    }
?>