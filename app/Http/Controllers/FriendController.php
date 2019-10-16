<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class FriendController extends Controller
{
    public function index()
    {
        //dd($user);
        $users = User::All();
        //$id =Auth::user()->id;
        //,['user' => $users]
        //dd($user);
        return view('friend.friend_register', [
            'users' => $users,
        ]);
    }
}
