<?php

while(true)
{
    $sayi = rand(1,100);

    if ($sayi==50)
    break;

    if ($sayi==13 || $sayi==31)
    {
        echo "<span style='color:red'>".$sayi."</span>";
        continue;
    }

    echo $sayi.",";
}

echo "</br>Döngü Sona Erdi";
?>