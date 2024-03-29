<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {
        $this->call(UserSeeder::class);
        $this->call(PaquetesSeeder::class);
        $this->call(RestaurantesSeeder::class);
        $this->call(CategoriasSeeder::class);
        $this->call(PlatillosSeeder::class);
    }

}
