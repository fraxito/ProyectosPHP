<?php
include("funciones.php");

$usuario_nombre = $_POST['usuario_nombre'];
$usuario_clave = $_POST['usuario_clave'];


$mysql = conectaBBDD();   //me conecto a la base de datos

$miPrimeraConsulta = $mysql -> 
query("SELECT * FROM usuarios 
                WHERE nombreUsuario = '$usuario_nombre' 
                AND  claveUsuario = '$usuario_clave' 
                ");
$numUsuarios = $miPrimeraConsulta -> num_rows; 

if ($numUsuarios > 0){
    echo'<div class="alert alert-success" role="alert">
            USUARIO Y CONTRASEÑA CORRECTOS
        </div>';     
}
else{
    echo'<div class="alert alert-danger" role="alert">
            error no existe ese usuario o la contraseña es incorrecta
        </div>';  
}















