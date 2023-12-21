<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        table, th, td {
        border: 1px solid black;
        }
    </style>
    <title>Document</title>
</head>
<body>
    
<table>
    <tr><th>Sütun1</th><th>Sütun2</th><th>Sütun3</th></tr>
    <tr><td>Hücer11</td><td>Hücer12</td><td>Hücer13</td></tr>
    <tr><td>Hücer21</td><td>Hücer22</td><td>Hücer23</td></tr>
    <tr><td>Hücer31</td><td>Hücer32</td><td>Hücer33</td></tr>
</table>

    </br>

<?php

echo "<table>";

for($satir = 0;$satir<8;$satir++)
{
    echo "<tr>";

    for($sutun = 0;$sutun<3;$sutun++)
    {
        if($satir==0)
        {
            echo "<th>";
            echo "Sütun".($sutun+1);
            echo "</th>";
        }
        else
        {
            echo "<td>";
            echo "Hücre".($satir).($sutun+1);
            echo "</td>";
        }
    }

    echo "</tr>";
}

echo "</table>"

?>


</body>
</html>


