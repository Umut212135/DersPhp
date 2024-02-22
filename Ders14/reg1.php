<?php

$metin = "İzmir - Torbali Şehit Harun Şenöuzar Mesleki Teknik Anadolu Lisesi";

$aranan = "#Lise#";

preg_match_all ($aranan, $metin, $sonuc);

print_r ($sonuc);

?>