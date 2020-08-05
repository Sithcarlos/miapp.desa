<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Modelos\categorias;
use Faker\Generator as Faker;

$factory->define(categorias::class, function (Faker $faker) {

    return [
        'descripcion' => '~~~',
        'imagen_ruta' => 'assets/data/cloud/otro.png',
        'nombre' => 'Categoria',
        'restaurante_id' => 1,
    ];
});
