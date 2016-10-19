<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\BaseModel;

class Post extends BaseModel
{
    public function user()
    {
        return $this->belongsTo('App\User', 'created_by', 'id');
    }

    public function votes()
    {
        return $this->hasMany(Vote::class);
    }

    public function getUpVotes()
    {
        return $this->votes()->where('vote', 1)->count();
    }

    public function getDownVotes()
    {
        return $this->votes()->where('vote', 0)->count();
    }

}
