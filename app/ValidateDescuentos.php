<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ValidateDescuentos extends Model
{
    protected $table='validatedescuentos';
    protected $fillable = [
        'imgDescuento', 'idUser', 'estado', 'mensaje', 'fechaIni', 'fechaFin', 'imgLinkDescuento',
    ];
    protected $guarded=['id'];
    public $timestamps = false;
}
