<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pages extends Model
{
    protected $table = 'posts';
    protected $fillable = ['title' , 'subtitle', 'content'];
}

class ServiceCategory extends Model
{
    protected $table = 'servicescategories';
    protected $fillable = ['category-name', 'status'];
}
?>