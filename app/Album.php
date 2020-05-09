<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    //  
    public function artist() 
    {
        return $this->belongsTo('App\Artist');
    }
    public function tracks()
    {
        return $this->hasMany(Track::class);
    }
    protected $fillable = ['name', 'artist_id' , 'album_type_id', 'spot_id'];
    
}
