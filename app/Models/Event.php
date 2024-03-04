<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Event extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable =   [
        'title'  ,
        'description',
        'date' ,
        'location',
        'image',
        'number_places' ,
        'categories_id' ,
        'status' ,
        'user_id'

    ];
}