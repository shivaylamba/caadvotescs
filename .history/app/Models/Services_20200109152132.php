<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    protected $table = 'menus';
    protected $fillable = ['category-name', 'status'];
}
