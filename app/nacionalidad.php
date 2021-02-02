<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nacionalidad extends Model
{
    protected $table='nacionalidad';
    protected $fillable = [
        'PAIS_NAC', 'PAIS_NAC', 'GENTILICIO_NAC', 'ISO_NAC',
    ];
    protected $guarded=['id'];
    public $timestamps = false;
}
