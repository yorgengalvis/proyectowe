<?php

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'categoria';
    protected $fillable = [
       'descripcion',
       'estado'
    ];

}