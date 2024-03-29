<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable =   [
        'event_id',
        'user_id',
        'accepted',
        // 'quntite'
    ];

    public function event(){
        return $this->belongsTo(Event::class,'event_id');

      }
      public function user(){
        return $this->belongsTo(User::class,'user_id');

      }
}