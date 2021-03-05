<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Servicios\PaquetesServicio;

class PaquetesController extends Controller
{

    private $SPaquetes;

    public function __construct(PaquetesServicio $Paquetes)
    {
        $this->SPaquetes = $Paquetes;
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
     * @param  \App\paquetes  $paquetes
     * @return \Illuminate\Http\Response
     */
    public function show(paquetes $paquetes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\paquetes  $paquetes
     * @return \Illuminate\Http\Response
     */
    public function edit(paquetes $paquetes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\paquetes  $paquetes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, paquetes $paquetes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\paquetes  $paquetes
     * @return \Illuminate\Http\Response
     */
    public function destroy(paquetes $paquetes)
    {
        //
    }
}
