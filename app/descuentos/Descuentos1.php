<?php

namespace App\descuentos;

use Illuminate\Database\Eloquent\Model;

class Descuentos1 extends Model
{
    protected $table='imagesocios1';
    protected $fillable = [
        'id', 'link', 'name' ,
    ];
    protected $guarded=['id'];
    public $timestamps = false;
}
