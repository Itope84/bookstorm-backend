<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    protected $fillable = ['name'];
    public function courses()
    {
        return $this->hasMany('App\Course');
    }

    public function students()
    {
        return $this->hasMany('App\User', 'user_id');
    }
}
