<?php

use Illuminate\Database\Seeder;

class RestaurantesSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        factory(App\Modelos\restaurantes::class, 1)->create([
            'nombre' => 'Demo de paquete simple',
            'paquete_id' => 1,
            'ruta' => 'simple',
            'usuario_id' => 2,
        ]);
        factory(App\Modelos\restaurantes::class, 1)->create([
            'nombre' => 'Demo de paquete basico',
            'paquete_id' => 2,
            'ruta' => 'basico',
            'usuario_id' => 3,
        ]);
        factory(App\Modelos\restaurantes::class, 1)->create([
            'nombre' => 'Demo de paquete completo',
            'paquete_id' => 3,
            'ruta' => 'completo',
            'usuario_id' => 4,
        ]);
    }

}
