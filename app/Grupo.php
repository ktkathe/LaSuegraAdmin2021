<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    protected $table='grupo';
    protected $fillable = [
        'nombre', 'id_usuario', 'id_rol',
    ];
    protected $guarded=['id'];
    public $timestamps = false;
}
