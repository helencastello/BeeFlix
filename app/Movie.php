<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $table = 'movies';
    public $primaryKey = 'id';
    public $timestamps = false;

    public function genre() {
        return $this->hasOne(Genre::class);
    }

    public function genres() {
        return $this->belongsTo(Genre::class);
    }

    public function episode() {
        return $this->belongsTo(Episode::class);
    }

    public function episodes(){
        return $this->hasMany(Episode::class);
    }
}
