<?php
    $ogrenci=[
     "AD"=>"Emine",
     "SOYAD" =>"PALA",
     "YAS" => 20,
     "BOLUM" =>"Bilgisayar Muhendisligi"
];
    foreach($ogrenci as $anahtar=>$deger){
        echo "$anahtar: $deger <br>";
    }
?>