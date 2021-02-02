<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ValidateDescuentos1 extends Model
{
    protected $table='validatedescuentos1';
    protected $fillable = [
        'imgDescuento', 'idUser', 'estado', 'mensaje', 'fechaIni', 'fechaFin', 'imgLinkDescuento',
    ];
    protected $guarded=['id'];
    public $timestamps = false;
}
