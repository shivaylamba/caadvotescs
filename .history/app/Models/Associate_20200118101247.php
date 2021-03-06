<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Associate extends Model
{
    protected $guarded = ['id'];
    protected $hidden = [
     'employee_password', 'remember_token',
    ];
    public function getAuthPassword()
    {
     return $this->employee_password;
    }
}
