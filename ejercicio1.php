<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio1</title>
</head>
<body>
<form action="" method="POST" enctype="multipart/form-data">
        <span>Escribe el primer numero</span>
        <input type="number" name="primerNumero" id="primerNumero"><br>
        <span>Escribe el segundo numero</span>
        <input type="number" name="segundoNumero" id="segundoNumero">
        <button type="submit">Enviar</button>
    </form>
    <?php 
        $a = $_POST['primerNumero'];
        $b = $_POST['segundoNumero'];
        $arrayNumeros=[];
        echo "<select name='listaDeslegable' id='listaDesplegable'>";
            
        if ($a>$b){
                for ($i=$b; $i<=$a ; $i++) {
                    array_push($arrayNumeros,$i);
                }  
                rsort($arrayNumeros);
                foreach ($arrayNumeros as $numero) {
                    echo "<option>$numero</option>"; 

                }
            }
        else{
            for ($i=$a; $i <= $b; $i++) { 
                echo "<option>$i</option>"; 
            }

        }
        echo "</select>";
    ?>
</body>
</html>