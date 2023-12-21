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

echo "<table>";

for($i = 0;$i<9;$i++)
{
    echo "<tr>";
    for($j = 0;$j<9;$j++)
    {
        if($j==0 || $i==8)
            echo "<td class=\"hucre0\">";
        else if($j%2==0 && $i%2==1 || $j%2==1 && $i%2==0)
            echo "<td class=\"hucre1\">";
        else
            echo "<td class=\"hucre2\">";

        if($i==8 && $j>0)
            echo chr(64+$j);
        else if($j==0 && $i<8)
            echo (8-$i);
        else echo "*";
        
        echo "</td>";
    }
    echo "</tr>";
}

echo "</table>"

?>



</body>
</html>