<?php 

namespace App;
use Illuminate\Database\Eloquent\Model;
class Menu extends Model
{
    protected $table = 'servisecategories';
    public $primaryKey = 'id';
    protected $fillable = [
        'type','name', 'email','phone','city'
    ];
    public $timestamps = true;
}