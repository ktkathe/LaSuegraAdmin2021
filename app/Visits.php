<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visits extends Model
{
    protected $table='visits';
    protected $fillable = [
        'quantity', 'idUser',
    ];
    protected $guarded=['id'];
    public $timestamps = false;
}
