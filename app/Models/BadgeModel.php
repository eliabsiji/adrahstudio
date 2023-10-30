<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Models\Role;

class BadgeModel extends Role
{
    use HasFactory;

    protected $fillable = [
        'badge'
    ];


    // public function comptes()
    // {
    //     return $this->hasMany('App\Compte') ;
    // }
}
