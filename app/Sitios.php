<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sitios extends Model
{
    protected $table='sites';
    protected $fillable = [
       'nameSite','address','telephone','lactitude','length','sed','horarios','horarios1','horarios2','horarios3','horarios4','horarios5','horarios6','type',
    ];
    protected $guarded=['id'];
    public $timestamps = false;
}
