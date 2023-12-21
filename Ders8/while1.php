<?php
$sayac = 0;
$toplam = 0;
while($sayac <= 100)
{
    $toplam += $sayac;
    $sayac +=2;
}
echo 'Toplam '.$toplam;
?>