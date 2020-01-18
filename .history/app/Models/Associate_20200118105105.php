<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Model;

class Associate extends Model
{
    protected $guarded = ['email'];
    protected $hidden = [
     'password', 'remember_token',
    ];
    public function getAuthPassword()
    {
     return $this->password;
    }
}
