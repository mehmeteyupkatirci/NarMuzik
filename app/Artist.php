<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    //
    protected $table = 'artist';

    public function albums()
    {
        return $this->hasMany(Album::class,'artist_id','id');
    }
}
