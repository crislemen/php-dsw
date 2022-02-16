<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        td{
            width: 30px;
            height: 30px;
        }
        #blanco{
            background-color: white;
        }
        #negro{
            background-color: black;
        }
    </style>
</head>
<body>
<?php 
echo "<h1>Tablero de Ajedrez</h1>";
echo "<table border = 1>";
 
for ($a=1; $a <=4 ; $a++) {
    echo "<tr>";
    for ($i=1; $i <=4 ; $i++) { 
        echo "<td id='blanco'></td>";
        echo "<td id='negro'></td>";
    }
    echo "</tr>";
    for ($i=1; $i <=4 ; $i++) { 
        echo "<td id='negro'></td>";
        echo "<td id='blanco'></td>";
    }
}

echo "</table>";
 ?> 
</body>
</html>
