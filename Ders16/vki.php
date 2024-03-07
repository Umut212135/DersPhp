<?php

$vki = vkiHesapla(1.73,70);

echo "</br>İdeal Kilonuz:".IdealKilo(1.73);

function IdealKilo($boy)
{
    return 25*$boy*$boy;
}

function vkiHesapla($boy , $kilo)
{
    return$kilo/($boy*$boy);
}

function vkiSonucYaz($vki)
{
    echo "Vki:".$vki."</br>";

    if ($vki<18.5)
    echo "Zayıf";

    else if ($vki<25)
    echo "Normal";

    else if ($vki<30)
    echo "Kilolu";

    else if ($vki<35)
    echo "Obez";

    else
    echo "Aşırı Obez";

}

?>