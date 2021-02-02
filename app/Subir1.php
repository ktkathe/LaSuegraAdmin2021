<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subir1 extends Model
{
    protected $table='imagesOcios1';
    protected $fillable = [
        'link', 'name',
    ];
    protected $guarded=['id'];
    public $timestamps = false;
}
