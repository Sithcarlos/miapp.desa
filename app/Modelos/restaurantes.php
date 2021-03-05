<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class restaurantes extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'activo', 'descripcion', 'imagen_ruta', 'nombre', 'paquete_id', 'ruta', 'usuario_id', 'updated_at',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'activo' => 'boolean',
    ];
}
