<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Men</title>
</head>
<body>
    <?php
    if (isset($_SESSION['usuario'])) {
        if ($_GET) {
            $opt=$_GET['opcion'];
            if ($opt=="alta") {
                require_once("../Vista/formularioAlta.php");
            }elseif($opt=="verPerfil"){
                require_once("../Vista/formularioAlta.php");
            }elseif($opt=="modificar"){
                require_once("../Vista/formularioAlta.php");
            }
        }   else{
            if ($_SESSION['usuario']=='admin') {
                echo "<a href='?opcion=alta'>Dar de Altas</a>";
            }
            echo "<a href='?opcion=verPerfil'>Ver perfil</a>";
            echo "<a href='?opcion=modificar'>Modificar Perfil</a>";
        }
    }
    ?>
</body>
</html>