<?php

declare(strict_types=1);
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Servicios;

use App\Repositorios\CategoriasRepositorio;

/**
 * Description of CategoriasServicio
 *
 * @author master
 */
class CategoriasServicio
{

    private $RCategorias;

    //put your code here
    public function __construct(CategoriasRepositorio $Categorias)
    {
        $this->RCategorias = $Categorias;
    }

    /**
     * Obtiene todas las categorias de un restaurante,
     * segun el id del restaurante
     */
    public function leerCategoriaIdRestaurante($id)
    {
        return $this->RCategorias->leerRestauranteId($id);
    }
}
