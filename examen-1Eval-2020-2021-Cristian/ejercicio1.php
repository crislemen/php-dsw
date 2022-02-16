<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio1</title>
</head>
<body>
    <?php if ($_POST){
        $a = $_POST['primerNumero'];
        $b = $_POST['segundoNumero'];
        $contador = 0;
        $producto = 1;
        echo "<table border='1'>
        <tr>
            <th>SUMA</th>
            <th>PRODUCTO</th>
            <th>MEDIA</th>
        </tr>
        <tr>
        <td>$media</td>
        </tr>
    </table>";
        for ($i=$a; $i < ($b +1); $i++) { 
            $suma = $suma + $i;
            $producto = $producto*$i;
            $contador++;
            echo "              <tr>
            <td>$suma</td>
            <td>$producto</td>
            
        </tr>";
        }
        $media = $suma/$contador;
        echo "<h2>El resultado del Ejercicio con los numeros $a y $b son:</h2>";

    }
    else{?>
        <form action="" method="POST" enctype="multipart/form-data">
        <span>Escribe el primer numero</span><br>
        <input type="number" name="primerNumero"><br>
        <span>Escribe el segundo numero</span><br>
        <input type="number" name="segundoNumero"><br>
        <button type="submit">Enviar</button>
    </form>
<table ></table>
    <?php
    }
    ?>
</body>
</html>
