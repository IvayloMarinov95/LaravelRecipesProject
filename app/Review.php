<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [
        'text', 'rating'
    ];

    public function recipe(){
        return $this->belongsTo("App\Recipe");
    }

    public function user(){
        return $this->belongsTo("App\User");
    }
}
