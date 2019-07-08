<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    const BOOKMARK_TYPE = 'bookmark';
    const DOWNLOAD_TYPE = 'download';

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
    public function material()
    {
        return $this->belongsTo('App\Material');
    }
}
