<?php

use Illuminate\Database\Seeder;

class CategoriasSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        factory(App\Modelos\categorias::class, 1)->create([
            'nombre' => 'Comidas',
            'restaurante_id' => 1,
        ]);
        factory(App\Modelos\categorias::class, 1)->create([
            'nombre' => 'Bebidas',
            'restaurante_id' => 1,
        ]);
        factory(App\Modelos\categorias::class, 1)->create([
            'nombre' => 'Comidas',
            'restaurante_id' => 2,
        ]);
        factory(App\Modelos\categorias::class, 1)->create([
            'nombre' => 'Bebidas',
            'restaurante_id' => 2,
        ]);
        factory(App\Modelos\categorias::class, 1)->create([
            'nombre' => 'Comidas',
            'restaurante_id' => 3,
        ]);
        factory(App\Modelos\categorias::class, 1)->create([
            'nombre' => 'Bebidas',
            'restaurante_id' => 3,
        ]);
    }

}
