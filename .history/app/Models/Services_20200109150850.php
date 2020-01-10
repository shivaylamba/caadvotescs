<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    protected $table = 'servisecategories';
    protected $fillable = ['category-name', 'status'];
}

?>
