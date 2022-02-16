<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio3</title>
</head>
<body>
    <?php   
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];
    $fichero = "bdUsuarios.json";
    if (file_exists($fichero)) {
        $handle=fopen($fichero,"r");
        while($linea=fgets($handle)){
            $datos = json_decode($linea,true);
            if ($datos['usuario']==$usuario) {
                echo "<p>Usuario corrrecto</p>";
            }
        }
    }
    ?>
    <form action="" method="post" enctype="multipart/form-data">
        <span>Inserte Usuario</span>
        <input type="text" name="Usuario" id="Usuario">
        <span>Inserte Contraseña</span>
        <input type="text" name="password" id="password">
        <button type="submit" name="verificar">Verificar</button>
    </form>
</body>
</html>