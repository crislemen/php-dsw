<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio1</title>
</head>
<body>
<?php
require_once("../config.php");
function getDatabase(){
    return DATA_PATH."bdUsuarios.txt";
}
/**
 * consulta
 *
 * @param  string $usuario
 * @return mixed
 */
 function consulta(string $usuario):mixed{
$dataBase=getDatabase();
    if (file_exists($dataBase)) {
        $handle=fopen($dataBase,"r");
        while ($linea=fgets($handle)) {
            $datos=json_decode($linea,true);
            if ($datos['usuario']==$usuario) {
                return $datos;
            }
        }
        fclose($handle);
    }
    return false;
}
/**
 * insertar
 *
 * @param  array $datos
 * @return bool
 */
function insertar(array $datos):bool{
    if (consulta($datos['usuario'])) {
        return false;
    }
    $dataBase =getDatabase();
    $handle=fopen($dataBase,"a");
    if (!$handle) {
        return false;
    }
    $datos['contraseña']=password_hash($datos['contraseña'],PASSWORD_BCRYPT);
    fputs($handle,json_encode($datos,JSON_UNESCAPED_UNICODE));
    fclose($handle);
}
/**
 * procesaDatosPost
 *
 * @param  array $POST
 * @return array
 */
function procesaDatosPost(array $POST):array{
    return [
        "nombre"=>$POST['nombre'],
        "apellido1"=>$POST['apellido1'],
        "apellido2"=>$POST['apellido2'],
        "usuario"=>$POST['usuario'],
        "contraseña"=>$POST['contraseña'],
        "email"=>$POST['email']
    ];
}
if ($_POST) {
    $datos=procesaDatosPost($_POST);
    $datosJson=json_encode($datos,JSON_UNESCAPED_UNICODE);
}    
?>
</body>
</html>