<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceCategory extends Model
{
    protected $table = 'servicescategories';
    protected $fillable = ['category-name', 'status'];
}

?>