<?php
include("funciones.php");



$usuario_nombre = limpiaPalabra($_POST['usuario_nombre']);
$usuario_clave  = limpiaPalabra($_POST['usuario_clave']);



$mysql = conectaBBDD();   //me conecto a la base de datos

//Consulta bien hecha

$consultaUsuario = $mysql -> prepare("SELECT * FROM usuarios
                                      WHERE nombreUsuario = ? 
                                      AND userPass = ?  ");
$consultaUsuario -> bind_param("ss", $usuario_nombre, $usuario_clave); 
$consultaUsuario -> execute();
//guarda el resultado de la query
$consultaUsuario -> store_result();  
//lee el dato de la BBDD y lo guarda en $id1, $usuario1 y $clave1
$consultaUsuario ->bind_result($id1, $usuario1, $clave1);  

$consultaUsuario -> fetch();                              
$numUsuarios = $consultaUsuario -> num_rows; 

//consulta MAL hecha: (si entregas esto suspendes)
// $miPrimeraConsulta = $mysql -> 
//                         query("SELECT * FROM usuarios 
//                                         WHERE nombreUsuario = '$usuario_nombre' 
//                                         AND  userPass = '$usuario_clave' 
//                                         ");
// $numUsuarios = $miPrimeraConsulta -> num_rows; 

if ($numUsuarios > 0){
    echo'<div class="alert alert-success" role="alert">
            USUARIO Y CONTRASEÑA CORRECTOS. EL ID ES '.$id1.'
        </div>';     
}
else{
    echo'<div class="alert alert-danger" role="alert">
            error no existe ese usuario o la contraseña es incorrecta
        </div>';  
}















