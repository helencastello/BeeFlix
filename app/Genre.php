<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $table = 'genres';
    public $primaryKey = 'id';
    public $timestamps = false;

    public function movie() {
        return $this->belongsTo(Movie::class);
    }

    public function movies(){
        return $this->hasMany(Movie::class);
    }
}
