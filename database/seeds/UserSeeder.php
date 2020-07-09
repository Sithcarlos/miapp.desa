<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Carlos',
            'email' => 'carlos@miapp.desa',
            'password' => Hash::make('password'),
            'activo' => true,
            'email_verified_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ]);
    }
}
