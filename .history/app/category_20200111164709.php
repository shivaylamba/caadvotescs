<?php 

namespace App;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'servisecategories';
    public $primaryKey = 'id';
    public $timestamps = true;
}