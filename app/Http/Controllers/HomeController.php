<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Servicios\RestaurantesServicio;

class HomeController extends Controller
{
    private $SRestaurantes;

    public function __construct(RestaurantesServicio $Restaurantes)
    {
        $this->SRestaurantes = $Restaurantes;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $dRestaurantes = $this->SRestaurantes->listarRestaurantes(auth()->user()->id);
        return view('v1.home', compact('dRestaurantes'));
    }
}
