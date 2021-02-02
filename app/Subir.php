<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subir extends Model
{
    protected $table='imagesOcios';
    protected $fillable = [
        'link', 'name',
    ];
    protected $guarded=['id'];
    public $timestamps = false;
}
