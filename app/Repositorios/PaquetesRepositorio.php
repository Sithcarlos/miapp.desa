<?php

declare(strict_types=1);
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Repositorios;

use Illuminate\Support\Facades\DB;
//use App\Modelos\paquetes;

/**
 * Description of PaquetesRepositorio
 *
 * @author master
 */
class PaquetesRepositorio
{

    public const TABLA = 'paquetes';

    public function leerTodos()
    {
        return DB::table(self::TABLA)->get();
    }

    public function leerId($id)
    {
        return DB::table(self::TABLA)->where('id', $id)->first();
    }
}
