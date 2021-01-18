<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;

/*
  |--------------------------------------------------------------------------
  | Web Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register web routes for your application. These
  | routes are loaded by the RouteServiceProvider within a group which
  | contains the "web" middleware group. Now create something great!
  |
 */
/**
  Route::get('/', function () {
  return Redirect::to('https://axti.net/menu-qr');
  });
 */
Route::get('/', 'InicioController@index')->name('raiz');

// Rutas del grupo de acceso
Auth::routes(['verify' => true, 'register' => false]);

// Pagina inicial de sesion
Route::get('/home', 'HomeController@index')->name('home')->middleware(['auth', 'verified']);

/**
 * Escribir rutas desde aqui
 */
//

/**
 * Escribir rutas antes de aqui
 * Obtiene el restaurante y lo muestra al publico
 */
Route::get('/{ruta}', 'RestaurantesController@index');
