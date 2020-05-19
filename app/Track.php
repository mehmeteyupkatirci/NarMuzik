<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Track extends Model
{
    //
    public function album()
    {
        return $this->belongsTo('App\Album');
    }
    protected $fillable = ['name', 'album_id', 'popularity', 'spot_id', 'disc_number', 'duration_ms', 'preview_url',];
}
