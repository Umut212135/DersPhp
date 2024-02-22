<?php


$vki = vkiHesapla(171,81);

goster($vki);


function vkiHesapla($boy, $kilo)
{
    $vki = $kilo / (($boy*$boy)/10000);

    return round($vki,2); 
}


function goster($vki)
{
    if($vki<18.5)
        echo "<h1>Sıska</h1>";
    else if($vki<=25)
        echo "<h1>Normal</h1>";  
    else if($vki<=30)
       echo "<h1>Kilolu</h1>"; 
    else if($vki<=35)
       echo "<h1>1.Derece Obez</h1>";  
    else if($vki<=40)
       echo "<h1>2.Derece Obez</h1>";   
    else 
        echo "<h1>3.Derece Obez</h1>"; 
}

?>