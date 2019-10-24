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
        $friend_status = Friend::get()->where('applicant_id',Auth::user()->id)->first();
        return view('friends.friend_register',['users' => $users],['friend_status' => $friend_status]);
    } 

    //web.phpのワイルドカードのIDのユーザーから取得
    public function store(User $user)
    {
        $notification = new Notification();
        $notification->sender_id= Auth::user()->id;
        $notification->recipient_id= $user->id;
        //以下２行テスト
        //$notification->type= "0";
        //$notification->comment= "コメント";
        $friend = new Friend;
        $friend_status = Friend::get()->where('applicant_id',Auth::user()->id)->first();
        //dd($friend_status);
        // dd(1);
        //dd($friend_status->status);
        if($friend_status->status === 0){
           //dd(1);
            return redirect()->route('friend.index',['user' => $user]);
        }
        
        
        $friend->applicant_id = Auth::user()->id;
        $friend->approver_id = $user->id;
        $friend->status = 0;
        //if文使って、if入っているなら
        //テーブルを保存
        //dd($friend->status);
        $friend->save();
        
        $notification->save();
        
        return redirect()->route('friend.index',['user' => $user]);
   }
}
