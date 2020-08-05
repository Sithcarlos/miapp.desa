<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Modelos\platillos;
use Faker\Generator as Faker;

$factory->define(platillos::class, function (Faker $faker) {
    $faker->addProvider(new \FakerRestaurant\Provider\es_PE\Restaurant($faker));
    return [
        'categoria_id' => 1,
        'descripcion' => 'Descripcion hasta 180 caracteres',
        'nombre' => $faker->foodName(),
        'precio' => $faker->randomFloat(2, 1, 99.99),
        'restaurante_id' => 1,
    ];
});
