<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    const MATERIAL_TYPES = ['past question', 'class notes', 'assignments', "lecturer's notes"];
    
    public function related_course()
    {
        return $this->belongsTo('App\Course', 'course_id');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tag', 'material_tag');
    }


    public function uploaded_by()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function in_collections()
    {
        return $this->hasMany('App\Collection');
    }

    public function inUsersCollection(User $user)
    {
        return $this->in_collections->contains('user_id', $user->id);
    }
}
