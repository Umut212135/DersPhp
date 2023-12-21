<?php
$toplam = 0;

do
{
    $sayi = rand(0,20);
    echo $sayi." ";

    $toplam+=$sayi;
}while($sayi!=5);

echo "<br>Toplam:".$toplam;

?>