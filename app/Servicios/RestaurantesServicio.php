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
use App\Repositorios\PlatillosOpcionesRepositorio;

/**
 * Description of RestaurantesServicio
 *
 * @author master
 */
class RestaurantesServicio {

    private $RResturantes;
    private $RCategorias;
    private $RPlatillos;
    private $RPlatillosOpciones;

    /**
     * 
     * @param ResturantesRepositorio $Resturantes
     * @param CategoriasRepositorio $Categorias
     * @param PlatillosRepositorio $Platillos
     * @param PlatillosOpcionesRepositorio $PlatillosOpciones
     */
    public function __construct(ResturantesRepositorio $Resturantes, CategoriasRepositorio $Categorias, PlatillosRepositorio $Platillos, PlatillosOpcionesRepositorio $PlatillosOpciones) {
        $this->RResturantes = $Resturantes;
        $this->RCategorias = $Categorias;
        $this->RPlatillos = $Platillos;
        $this->RPlatillosOpciones = $PlatillosOpciones;
    }

    /**
     * 
     * @param type $ruta
     * @return array
     */
    public function obtener($ruta): array {
        $info = $this->RResturantes->leerRuta($ruta);
        if ($info->activo) {
            $cc = $this->obtenerCategorias($info->id);
        } else {
            $cc = [];
        }
        return [
            "paquete_id" => $info->paquete_id,
            "activo" => (boolean) $info->activo,
            "descripcion" => $info->descripcion,
            "imagen_ruta" => $info->imagen_ruta,
            "nombre" => $info->nombre,
            "categorias" => $cc,
        ];
    }

    /**
     * 
     * @param type $restaurante_id
     * @return array
     */
    private function obtenerCategorias($restaurante_id): array {
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

    /**
     * 
     * @param type $categoria_id
     * @return array
     */
    private function obtenerPlatillos($categoria_id): array {
        $datos = $this->RPlatillos->leerCategoriaId($categoria_id);
        $platillos = [];
        foreach ($datos as $row) {
            $platillos[] = [
                "descripcion" => $row->descripcion,
                "alergenos" => (boolean) $row->alergenos,
                "nombre" => $row->nombre,
                "precio" => (float) $row->precio,
                "opciones" => $this->obtenerPlatillosOpciones($row->id),
            ];
        }
        return $platillos;
    }

    /**
     * 
     * @param type $platillo_id
     * @return array
     */
    private function obtenerPlatillosOpciones($platillo_id): array {
        $datos = $this->RPlatillosOpciones->leerPlatillosId($platillo_id);
        $opciones = [];
        foreach ($datos as $row) {
            $opciones[] = [
                "opcion" => $row->opcion,
                "precio" => (float) $row->precio,
            ];
        }
        return $opciones;
    }
    
    /**
     * Lista de restaurantes
     * Segun el usuario
     * SI es admin, muestra todos
     * SI NO, muestra solo los que le pertenecen
     */
    public function listarRestaurantes($idUsuario): object
    {
        // Listado de usuarios administradores
        $usuariosAdmin = [1];
        if (array_search($idUsuario, $usuariosAdmin) === false) {
            return $this->RResturantes->leerIdUsuario($idUsuario);
        } else {
            return $this->RResturantes->leerTodos();
        }
    }

}

