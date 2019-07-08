<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use Notifiable, HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'school_id', 'study_program_id', 'level', 'points', 'avatar'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function study_program()
    {
        return $this->belongsTo('App\StudyProgram');
    }

    public function school()
    {
        return $this->belongsTo('App\School');
    }

    public function uploaded_materials()
    {
        return $this->hasMany('App\Material');
    }

    public function collections()
    {
        return $this->hasMany('App\Collection');
    }

    public function courses()
    {
        return $this->belongsToMany('App\Course', 'course_user');
    }

    public function questions()
    {
        return $this->hasMany('App\Question');
    }

    public function answers()
    {
        return $this->hasMany('App\Answer');
    }
}
