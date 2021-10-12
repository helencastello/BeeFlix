<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    protected $table = 'episodes';
    public $primaryKey = 'id';
    public $timestamps = false;

    public function movie() {
        return $this->belongsTo(Movie::class);
    }

    public function movies(){
        return $this->hasOne(Movie::class);
    }
}
