<?php

declare(strict_types=1);
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Servicios;

use App\Repositorios\PlatillosOpcionesRepositorio;

/**
 * Description of PlatillosOpcionesServicio
 *
 * @author master
 */
class PlatillosOpcionesServicio {

    private $RPlatillosOpciones;

    /**
     * 
     * @param PlatillosOpcionesRepositorio $PlatillosOpciones
     */
    public function __construct(PlatillosOpcionesRepositorio $PlatillosOpciones) {
        $this->RPlatillosOpciones = $PlatillosOpciones;
    }

}
