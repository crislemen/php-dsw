<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio2</title>
</head>
<body>
    <?php
        function primitiva(){
            $res=[];
            while (count($res)<6) {
                $n=rand(1,49);
                if (!in_array($n,$res)) {
                    array_push($res,$n);
                }
            }
            sort($res);
            return $res;
        }
        $sorteo=primitiva();
        echo "\t<table cellpadding='5' border='1'>\n\t<tr>";
        foreach ($sorteo as $valor) {
            echo "<td>$valor</td>";
        }
        
    ?>
</body>
</html>