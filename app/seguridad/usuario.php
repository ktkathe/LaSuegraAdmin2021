<?php

namespace App\seguridad;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


class usuario extends Authenticatable
{
    protected $remember_token=false;
    protected $table='usuarioadmin';
    protected $fillable = [
        'usuario', 'nombre', 'password',
    ];
    protected $guarded=['id'];
}
