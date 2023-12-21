<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    for ($i=1;$i<=5;$i++)
    {
        echo "<div style=\"float:left;margin:20px\"><img src=\"img\\resim".$i.".jpg\" width=200px height=150px></div>";
    }
    ?>
</body>
</html>