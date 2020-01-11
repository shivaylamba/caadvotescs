<?php 

namespace App;
use Illuminate\Database\Eloquent\Model;
class Menu extends Model
{
    protected $table = 'servisecategories';
    public $primaryKey = 'id';
    protected $fillable = [
        'categoryname','status', 'email','phone','city'
    ];
    public $timestamps = true;
}