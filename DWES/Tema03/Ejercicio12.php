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
        .blanco{
            background-color: white;
        }
        .negro{
            background-color: black;
        }
        .seleccionada{
            background-color: purple;
        }
    </style>
</head>
<body>
<?php
    function idToCoord(string $id,$filas):array {
        $letras=preg_split("/[0-9]+/",$id,-1,PREG_SPLIT_NO_EMPTY[0]);
        $digitos=preg_split("/[a-z]+/",$id,PREG_SPLIT_NO_EMPTY)[0];
        $y=$filas - intval($digitos);
        $x=ord($letras)-ord('a');
        return [$x,$y];
    } 
    
    function coordToId(array $coor,$filas):string{
        return chr(ord('a')+ $coor[0]).strval($filas-$coor[1]);
    }
    function estaEnLinea(array $original,array $celda){
        return abs($original[0]-$celda[0])==abs($original[1]-$celda[1]);
    }
    /**
     * estaDiagonalCelda
     *
     * @param  array $original
     * @param  array $celda
     * @param  float $pendiente
     * @return bool
     */
    function estaDiagonalCelda(array $original,array $celda,$pendiente=1):bool{
        return $original[0]-$celda[0]=$pendiente*($original[1]-$celda[1]);
    }
    /**
     * dibujarTablero
     *
     * @param  int $filas
     * @param  int $cols
     * @param  string $id
     * @return void
     */
    function dibujarTablero(int $filas,int $cols,string $id=null){
        echo "<table>\n";
        
        for ($i=0; $i <$filas ; $i++) { 
            echo "<tr>";
            echo "<th>",$filas-$i,"</th>";
            for ($j=0; $j < $cols; $j++) { 
                $idCeldaActual=coordToId([$j,$i],$filas);
                echo "<td id='$idCeldaActual' onclick='recargar(this.id)'class='";
            if ($id!=null && estaEnLinea(idtoCoord($id,$filas),[$j,$i])) {
                echo "selecionada";
            }elseif(($i+$j)%2==0){
                echo "blanco";
            }else{
                echo "negro";
            }
            echo "'></td>";
            }
            echo "<tr>";
        }
        echo "<tr><th></th>";
        for($j=0;$j<$cols;$j++){
            echo"<th>",chr(ord('a')+$j),"</th>";
        }
        echo "</tr>";
        echo "</table>\n";
    }
    $filas=$cols=8;
    if ($_GET && isset($_GET['id'])) {
        dibujarTablero($filas,$cols,$_GET['id']);
    }else{
        dibujarTablero($filas,$cols);
    }
?>
<script>
    function recargar(id) {
        location.reload(id)
        location.href("http://localhost/PHP/DWES/Tema03/Ejercicio12.php")
    }
</script>
</body>
</html>
