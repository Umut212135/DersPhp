<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=">
    <title>Document</title>
    <style>


    table, td, tr {border:1px solid;border-spacing:0px}

    td {width:50px;height:50px;}

    .hucre0 {
        background-color:silver;
    }

    .hucre1 {
        background-color:#7DCEA0;
    }

    .hucre2 {
        background-color:#F1948A;
    }

    </style>

</head>
<body>
    
<?php



satrancTahtasiOlustur(4,4);















function satrancTahtasiOlustur($satir=2, $sutun=2)
{
    echo "<table width=400 height=400 border=1>";
    for($i=1;$i<=$satir;$i++) //satır
    {
    echo '<tr>';
    for($j=1;$j<=$sutun;$j++) //sütun
    {
    $kutu=$i+$j;
    if($kutu%2==1)
    { echo '<td bgcolor=black></td>'; }
    else
    { echo '<td></td>';}
    }
    echo '</tr>';
    }
    echo '</table>';
}
    





?>



</body>
</html>