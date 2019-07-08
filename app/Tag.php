<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = ['name'];
    
    public function materials()
    {
        return $this->belongsToMany('App\Material', 'material_tag');
    }
}
