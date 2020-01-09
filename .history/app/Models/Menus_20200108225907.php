<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menus extends Model
{
    protected $table = 'menus';
    protected $fillable = ['title'];
}

class SubMenus extends Model
{
    protected $table = 'submenus';
    protected $fillable = ['title', 'mainmenu'];
}

class Pages extends Model
{
    protected $table = 'posts';
    protected $fillable = ['title' , 'subtitle', 'content'];
}

?>
