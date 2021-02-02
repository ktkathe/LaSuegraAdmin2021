<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cumpleanos extends Model
{
    protected $table='cumpleanos';
    protected $fillable = [
     'ano', 'idUser',
    ];
    protected $guarded=['id'];
    public $timestamps = false;
}
