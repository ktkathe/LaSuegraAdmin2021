<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{

    protected $table='users';
    protected $fillable = [
        'name', 'mail', 'password', 'city','cityN','birthDate', 'rolid', 'photo' ,
    ];
    protected $guarded=['id'];
    public $timestamps = false;
}
