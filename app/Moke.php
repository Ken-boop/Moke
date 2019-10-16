<?php

namespace App;

use Illuminate\Database\Eloquent\Model;



class Moke extends Model
{
    // protected $primaryKey = 'moke_id';

    public function tags()
    {
        return $this->belongsToMany('App\Tag', 'mokes_tags');
    }
}
