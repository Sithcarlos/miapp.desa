<?php

declare(strict_types=1);
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Repositorios;

use Illuminate\Support\Facades\DB;

//use App\Modelos\categorias;

/**
 * Description of CategoriasRepositorio
 *
 * @author master
 */
class CategoriasRepositorio
{

    public const TABLA = 'categorias';

    public function leerTodos()
    {
        return DB::table(self::TABLA)->get();
    }

    public function leerId($id)
    {
        return DB::table(self::TABLA)->where('id', $id)->first();
    }

    public function leerRestauranteId($restaurante_id): array
    {
        return DB::select('CALL leer_categorias(?)', [$restaurante_id,]);
    }
}
