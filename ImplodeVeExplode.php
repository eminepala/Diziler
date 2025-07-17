<?php
$harfler = ["A", "B", "C", "D", "E", "F"];
$birlesik = implode(",", $harfler);
echo $birlesik;
echo "<br>";
$ayri = explode(",", $birlesik);
print_r($ayri);
?>
