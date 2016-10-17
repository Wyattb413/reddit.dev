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

}
