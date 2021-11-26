<?php 
require_once 'src/autoload.php';

$faker = Faker\Factory::create('es_ES');

for ($i=0; $i<20; $i++){
    echo $faker->name.' '.$faker->dni.' '.$faker->address.'<br>';
}
