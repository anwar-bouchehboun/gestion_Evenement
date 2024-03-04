<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Categorie extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'name',
    ];
    public function event(){
        return $this->hasMany(Event::class, 'categories_id');

      }
}