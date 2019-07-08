<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{

    protected $fillable = ['course_code', 'title', 'description', 'school_id'];

    public function materials()
    {
        return $this->hasMany('App\Material');
    }

    public function users()
    {
        return $this->belongsToMany('App\User', 'course_user');
    }
}
