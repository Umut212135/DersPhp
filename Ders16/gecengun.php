<?php

$dt = mktime(0,0,0,6,22,2006);

$t = time();

$g =$t - $dt;

echo "</br> Geçen Yıl: ".round($g/(60*60*24*365));

echo "</br> Geçen Ay: ".round($g/(60*60*24*30));

echo "</br> Geçen Gün: ".round($g/(60*60*24));

echo "</br> Geçen Saat: ".round($g/(60*60));

echo "</br> Geçen Dakika: ".round($g/(60));

echo "</br> Geçen Saniye: ".round($g);

?>