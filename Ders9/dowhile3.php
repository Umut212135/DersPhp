<?php
$sayac = 0;

do
{
    if ($sayac%3 == 0 && $sayac%5 == 0)
    echo "<span style=\"color:red\">".$sayac."</span>,";
    
    else if ($sayac%3 == 0 || $sayac%5 == 0)
    echo $sayac.",";

    $sayac++;
}while($sayac<=100);
?>