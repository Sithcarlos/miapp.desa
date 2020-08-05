<?php

use Illuminate\Database\Seeder;

class PlatillosSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
//
        $faker = \Faker\Factory::create();
        $faker->addProvider(new \FakerRestaurant\Provider\es_PE\Restaurant($faker));
//
        $max = 6;

        for ($i = 1; $i <= $max; $i++) {
            factory(App\Modelos\platillos::class, 1)->create([
                'categoria_id' => 1,
                'nombre' => $faker->foodName(),
                'restaurante_id' => 1,
            ]);
            factory(App\Modelos\platillos::class, 1)->create([
                'categoria_id' => 2,
                'nombre' => $faker->beverageName(),
                'restaurante_id' => 1,
            ]);
        }
        //
        for ($i = 1; $i <= $max; $i++) {
            factory(App\Modelos\platillos::class, 1)->create([
                'categoria_id' => 3,
                'nombre' => $faker->foodName(),
                'restaurante_id' => 2,
            ]);
            factory(App\Modelos\platillos::class, 1)->create([
                'categoria_id' => 4,
                'nombre' => $faker->beverageName(),
                'restaurante_id' => 2,
            ]);
        }
        //
        for ($i = 1; $i <= $max; $i++) {
            factory(App\Modelos\platillos::class, 1)->create([
                'categoria_id' => 5,
                'nombre' => $faker->foodName(),
                'restaurante_id' => 3,
            ]);
            factory(App\Modelos\platillos::class, 1)->create([
                'categoria_id' => 6,
                'nombre' => $faker->beverageName(),
                'restaurante_id' => 3,
            ]);
        }
    }

}
