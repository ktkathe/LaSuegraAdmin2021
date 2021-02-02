<?php

namespace App\descuentos;

use Illuminate\Database\Eloquent\Model;

class Descuentos extends Model
{
    protected $table='imagesocios';
    protected $fillable = [
        'id', 'link', 'name' ,
    ];
    protected $guarded=['id'];
    public $timestamps = false;
}
