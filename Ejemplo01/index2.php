<?php
include("funciones.php");

$usuario_nombre = $_POST['usuario_nombre'];
$usuario_clave = $_POST['usuario_clave'];

echo "El nombre del usuario es: ".
            $usuario_nombre."<br>";
echo "La clave es: ".$usuario_clave."<br>";



$mysql = conectaBBDD();   //me conecto a la base de datos

$miPrimeraConsulta = $mysql -> query("SELECT * FROM usuarios");
$numUsuarios = $miPrimeraConsulta -> num_rows; 

echo $numUsuarios;














