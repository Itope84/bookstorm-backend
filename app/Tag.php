<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function materials()
    {
        return $this->belongsToMany('App\Material', 'material_tag');
    }
}
