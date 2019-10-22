<?php

namespace App\Http\Controllers;
use App\User;
use App\Notification;
use App\Friend;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FriendController extends Controller
{
    public function index()
    {
        $users = User::get();
        return view('friends.friend_register',['users' => $users]);
    } 

    //web.phpのワイルドカードのIDのユーザーから取得
    public function store(User $user)
    {
        //dd($user);
        $notification = new Notification();
        //dd($notification);
        $notification->sender_id= Auth::user()->id;
        $notification->recipient_id= $user->id;
        //以下２行テスト
        //$notification->type= "0";
        //$notification->comment= "コメント";
        $friend = new Friend();
        //申請中(0）sに変える
        $friend->type = "0";
        //dd($friend->type);

        //テーブルを保存
        $notification->save();
        $friend->save();
        return redirect()->route('friend.index',['user' => $user]);
   }
}
