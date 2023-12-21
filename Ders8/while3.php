<?php
$s1 = 10;
$s2 = 100;

$toplam = 0;
$adet = 0;

echo "<h1>".$s1." ; ".$s2." arasındaki sayıların:</h1>";
while ($s1<=$s2)
{
    $toplam += $s1;
    $s1++;
    $adet++;
}
    

$ort = $toplam / $adet;

echo "<h2>";

echo "Toplam : ". $toplam."<br/>";

echo "adet :  ". $toplam."<br/>";

echo "Ortalama". $ort."<br/>";

echo "</h2>"



?>