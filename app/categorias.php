<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categorias extends Model
{
    protected $table='categorias';
    protected $fillable = [
       'nombreCategoria',
    ];
    protected $guarded=['id'];
    public $timestamps = false;
}
