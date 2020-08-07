<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Servicios\RestaurantesServicio;

class RestaurantesController extends Controller {

    private $SRestaurantes;

    public function __construct(RestaurantesServicio $Restaurantes) {
        $this->SRestaurantes = $Restaurantes;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\restaurantes  $restaurantes
     * @return \Illuminate\Http\Response
     */
    public function show($ruta) {
        return $this->SRestaurantes->obtener($ruta);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\restaurantes  $restaurantes
     * @return \Illuminate\Http\Response
     */
    public function edit(restaurantes $restaurantes) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\restaurantes  $restaurantes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, restaurantes $restaurantes) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\restaurantes  $restaurantes
     * @return \Illuminate\Http\Response
     */
    public function destroy(restaurantes $restaurantes) {
        //
    }

}
