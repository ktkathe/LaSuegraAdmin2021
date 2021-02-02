<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ValidateOcios extends Model
{
    protected $table='validateocio';
    protected $fillable = [
        'imgPromo', 'idUser', 'estado', 'mensaje', 'fechaIni', 'fechaFin', 'imgLinkFinal',
    ];
    protected $guarded=['id'];
    public $timestamps = false;
}