<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class PaquetesSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('paquetes')->insert([
            'nombre' => 'simple',
            'created_at' => now(),
        ]);
        DB::table('paquetes')->insert([
            'nombre' => 'basico',
            'created_at' => now(),
        ]);
        DB::table('paquetes')->insert([
            'nombre' => 'completo',
            'created_at' => now(),
        ]);
    }

}
