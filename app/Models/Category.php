<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug']; //Campos que se van a asignacion masiva:
    protected $allowIncluded = ['posts', 'posts.user']; //las posibles Querys que se pueden realizar
    protected $allowFilter = ['id', 'name', 'slug'];
    protected $allowSort = ['id', 'name', 'slug'];
    use HasFactory;

     //Relacion Uno a Muchos con post
     public function posts(){
        return $this->hasMany('App\Models\Post');
    }
}
