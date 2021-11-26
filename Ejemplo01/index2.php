<?php
$usuario_nombre = $_POST['usuario_nombre'];
$usuario_clave = $_POST['usuario_clave'];

echo "El nombre del usuario es: ".
            $usuario_nombre."<br>";
echo "La clave es: ".$usuario_clave."<br>";

function conectaBBDD(){
    //servidor  , usuario , contraseña,  BBDD
    $mysql = new mysqli('localhost', 'pruebas','1234','pruebasphp');
    $mysql -> query("SET NAMES utf8");  // para que salgan bien los acentos
    return $mysql;
}


$mysql = conectaBBDD();   //me conecto a la base de datos

$miPrimeraConsulta = $mysql -> query("SELECT * FROM usuarios");
$numUsuarios = $miPrimeraConsulta -> num_rows; 

echo $numUsuarios;














