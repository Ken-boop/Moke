<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


// userFriend
// user_friends


// モデルのクラス名の複数形のスネークケースで対応したテーブルを引っ張ってくる
class Moke extends Model
{
    public function tags()
    {
        return $this->belongsToMany('App\Tag', 'mokes_tags');
    }
}
