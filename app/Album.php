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
    public function track()
    {
        return $this->hasMany('App\Track');
    }
    
    
}
