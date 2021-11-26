<?php 
require_once 'src/autoload.php';

include("funciones.php");

$faker = Faker\Factory::create('es_ES');
$mysql = conectaBBDD();  //eso es necesario para conectarme a la BBDD

for ($i=0; $i<100; $i++){
    $nombre = $faker->name;
    $nuevoUsuario = $mysql->query("INSERT INTO `usuarios` (`idUsuario`, `nombreUsuario`, `claveUsuario`, `ultimoLogin`) 
    VALUES (NULL, '$nombre', '1234', '2021-11-15')");


}
