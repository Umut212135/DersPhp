<?php

$sayilarim=array(42,25,18,29,36,45,27,11,7,4,2,42);

foreach($sayilarim as $sayi)
{
    $durum=false;
    for($i=$sayi-1;$i>1;$i--)
    {
        if ($sayi%$i==0)
        {
            $durum=true;
            break;
        }
    }

    if ($durum==false)
    echo $sayi.",";
}

?>