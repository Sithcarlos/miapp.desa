<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Servicios\PlatillosOpcionesServicio;

class PlatillosopcionesController extends Controller
{

    private $SPlatillosOpciones;

    /**
     * 
     * @param PlatillosOpcionesServicio $PlatillosOpciones
     */
    public function __construct(PlatillosOpcionesServicio $PlatillosOpciones)
    {
        $this->SPlatillosOpciones = $PlatillosOpciones;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\platillosopciones  $platillosopciones
     * @return \Illuminate\Http\Response
     */
    public function show(platillosopciones $platillosopciones)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\platillosopciones  $platillosopciones
     * @return \Illuminate\Http\Response
     */
    public function edit(platillosopciones $platillosopciones)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\platillosopciones  $platillosopciones
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, platillosopciones $platillosopciones)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\platillosopciones  $platillosopciones
     * @return \Illuminate\Http\Response
     */
    public function destroy(platillosopciones $platillosopciones)
    {
        //
    }
}
