<?php
header('Content-Type: application/json');
// check data vs DB
$nombre = filter_input(INPUT_POST, 'nombre', FILTER_SANITIZE_EMAIL);;
$password = filter_input(INPUT_POST, 'password');

# comprobación de datos contra la base de datos
($nombre == "cristian" && $password == "1234" ) ? $access = true : $access = false;

// return data to debug
echo json_encode([
    'nombre' => $nombre,
    'password' => $password
]);