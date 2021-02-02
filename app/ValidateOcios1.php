<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ValidateOcios1 extends Model
{
    protected $table='validateocio1';
    protected $fillable = [
        'imgPromo', 'idUser', 'estado', 'mensaje', 'fechaIni', 'fechaFin', 'imgLinkFinal',
    ];
    protected $guarded=['id'];
    public $timestamps = false;
}