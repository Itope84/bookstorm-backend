<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = ['title', 'user_id', 'body'];
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tag', 'question_tags');
    }

    public function answers()
    {
        return $this->hasMany('App\Answer');
    }
}
