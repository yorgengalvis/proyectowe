<?php

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $table = 'empresa';
    protected $fillable = [
        'nombre',
        'quienessomos',
        'emailcontacto',
        'direccion',
        'telefonocontacto',
        'facebook',
        'twitter',
        'instagram'
    ];

}