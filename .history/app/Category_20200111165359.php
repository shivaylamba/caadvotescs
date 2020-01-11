<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'menus';
    public $primaryKey = 'id';
    public $timestamps = true;
}
