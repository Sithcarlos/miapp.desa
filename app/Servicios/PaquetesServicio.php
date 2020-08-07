<?php

declare(strict_types=1);
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Servicios;

use App\Repositorios\PaquetesRepositorio;

/**
 * Description of PaquetesServicio
 *
 * @author master
 */
class PaquetesServicio {

    private $RPaquetes;

    //put your code here
    public function __construct(PaquetesRepositorio $Paquetes) {
        $this->RPaquetes = $Paquetes;
    }

}
