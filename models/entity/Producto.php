<?php

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'producto';
    protected $fillable = [
        'referencia',
        'nombre',
        'descripcioncorta',
        'detalle',
        'valor',
        'palabrasclave',
        'estado',
        'foto',
        'categoria_id',
        'marca_id'
    ];

}