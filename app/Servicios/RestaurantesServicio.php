<?php

declare(strict_types=1);
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Servicios;

use App\Repositorios\ResturantesRepositorio;
use App\Repositorios\CategoriasRepositorio;
use App\Repositorios\PlatillosRepositorio;

/**
 * Description of RestaurantesServicio
 *
 * @author master
 */
class RestaurantesServicio {

    private $RResturantes;
    private $RCategorias;
    private $RPlatillos;

    public function __construct(ResturantesRepositorio $Resturantes, CategoriasRepositorio $Categorias, PlatillosRepositorio $Platillos) {
        $this->RResturantes = $Resturantes;
        $this->RCategorias = $Categorias;
        $this->RPlatillos = $Platillos;
    }

    /**
     * 
     * @param type $ruta
     * @return type
     */
    public function obtener($ruta) {
        $info = $this->RResturantes->leerRuta($ruta);

        $datos = [
            "paquete_id" => $info->paquete_id,
            "activo" => $info->activo,
            "descripcion" => $info->descripcion,
            "imagen_ruta" => $info->imagen_ruta,
            "nombre" => $info->nombre,
            "categorias" => $this->obtenerCategorias($info->id),
        ];
        return $datos;
    }

    private function obtenerCategorias($restaurante_id) {
        $rows = $this->RCategorias->leerRestauranteId($restaurante_id);
        $categorias = [];
        foreach ($rows as $row) {
            $categorias[] = [
                "id" => $row->id,
                "descripcion" => $row->descripcion,
                "imagen_ruta" => $row->imagen_ruta,
                "nombre" => $row->nombre,
                "platillos" => $this->obtenerPlatillos($row->id),
            ];
        }
        return $categorias;
    }

    private function obtenerPlatillos($categoria_id) {
        return $this->RPlatillos->leerCategoriaId($categoria_id);
    }

}
