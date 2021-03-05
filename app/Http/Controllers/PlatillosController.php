<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Servicios\PlatillosServicio;

class PlatillosController extends Controller
{

    private $SPlatillos;

    public function __construct(PlatillosServicio $Platillos)
    {
        $this->SPlatillos = $Platillos;
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
     * @param  \App\platillos  $platillos
     * @return \Illuminate\Http\Response
     */
    public function show(platillos $platillos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\platillos  $platillos
     * @return \Illuminate\Http\Response
     */
    public function edit(platillos $platillos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\platillos  $platillos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, platillos $platillos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\platillos  $platillos
     * @return \Illuminate\Http\Response
     */
    public function destroy(platillos $platillos)
    {
        //
    }
}
