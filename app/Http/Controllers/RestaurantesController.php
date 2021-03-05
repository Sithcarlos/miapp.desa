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
    public function index($ruta) {
        $dRestaurante = $this->SRestaurantes->obtener($ruta);
        $vista = '';
        switch ($dRestaurante['paquete_id']) {
            case 2:
                $vista = 'v1.paquetes.basico';
                break;
            case 3:
                $vista = 'v1.paquetes.completo';
                break;
            default:
                $vista = 'v1.paquetes.simple';
        }
        return view($vista, compact('dRestaurante'));
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
    public function show() {
        $dRestaurantes = $this->SRestaurantes->listarRestaurantes(auth()->user()->id);
        return view('v1.restaurantes.index', compact('dRestaurantes'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $info = $this->SRestaurantes->datosRestaurante($id);
        if ($info['restaurante'] == null) {
            return 'no exite';
        }
        return view('v1.restaurantes.editar', compact('id', 'info'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        return [
            $request->nombre,
            $request->descripcion,
            $request->id,
        ];
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
