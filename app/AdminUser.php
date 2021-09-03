<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
class AdminUser extends Authenticatable
{
    // @var array

    protected $fillable = [
        'name','email','password',
    ];

    // @var array
    protected $hidden =[
        'password',
    ];
}
