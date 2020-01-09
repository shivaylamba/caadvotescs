<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubMenus extends Model
{
    protected $table = 'submenus';
    protected $fillable = ['title', 'mainmenu'];
}

?>