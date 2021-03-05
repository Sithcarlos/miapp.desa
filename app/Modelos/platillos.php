<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class platillos extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'alergenos', 'categoria_id', 'descripcion', 'nombre', 'precio', 'restaurante_id', 'updated_at',
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
    protected $casts = [];
}
