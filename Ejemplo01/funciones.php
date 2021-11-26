<?php

function conectaBBDD(){ 
    include("configuracion.php");
    $mysql = new mysqli($servidor, $usuario,$clave,$BBDD);
    $mysql -> query("SET NAMES utf8");  // para que salgan bien los acentos
    return $mysql;
}