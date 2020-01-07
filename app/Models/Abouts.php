<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Abouts extends Model
{
    protected $table = 'posts';
    protected $fillable = ['title' , 'subtitle', 'description'];
}
