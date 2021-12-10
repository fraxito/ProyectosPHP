<?php

function conectaBBDD(){ 
    include("configuracion.php");
    $mysql = new mysqli($servidor, $usuario,$clave,$BBDD);
    $mysql -> query("SET NAMES utf8");  // para que salgan bien los acentos
    return $mysql;
}

function limpiaPalabra($palabra){
    //filtro muy básico para evitar inyección SQL
    //$palabra = trim($palabra, "'");
    $palabra = str_replace("'", "", $palabra);
    $palabra = str_replace('"', "", $palabra);
    //anti xss
    $palabra = str_replace("<", "", $palabra);
    $palabra = str_replace(">", "", $palabra);
    $palabra = str_replace("/", "", $palabra);
    $palabra = str_replace("=", "", $palabra);
    $palabra = str_replace("´", "", $palabra);

    return $palabra;
}