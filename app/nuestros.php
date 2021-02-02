<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nuestros extends Model
{
    protected $table='nuestrosamigos';
    protected $fillable = [
       'nombreAmigo','id_categoria','id_pais','mensaje','link','estado_compra',
    ];
    protected $guarded=['id'];
    public $timestamps = false;
}
