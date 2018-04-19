<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    protected $fillable = [
        'title', 'text'
    ];
    public function reviews(){
        return $this->hasMany("App\Review");
    }
    public function user(){
        return $this->belongsTo("App\User");
    }
}
