<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class paises extends Model
{
    protected $table='paises';
    protected $fillable = [
       'nombrePais',
    ];
    protected $guarded=['id'];
    public $timestamps = false;
}
