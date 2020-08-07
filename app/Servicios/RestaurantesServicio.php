<?php

declare(strict_types=1);
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Servicios;

use App\Repositorios\ResturantesRepositorio;

/**
 * Description of RestaurantesServicio
 *
 * @author master
 */
class RestaurantesServicio {

    private $RResturantes;

    public function __construct(ResturantesRepositorio $Resturantes) {
        $this->RResturantes = $Resturantes;
    }

    /**
     * 
     * @param type $ruta
     * @return type
     */
    public function obtener($ruta) {
        $restaurante = $this->RResturantes->leerRuta($ruta);
        return $restaurante[0]->activo;
    }

}
