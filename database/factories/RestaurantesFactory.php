<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Modelos\restaurantes;
use Faker\Generator as Faker;

$factory->define(restaurantes::class, function (Faker $faker) {
    return [
        'descripcion' => 'Demostración del menú digital',
        'imagen_ruta' => 'assets/img/logo.png',
        'nombre' => 'nombre',
        'ruta' => 'ruta',
    ];
});
