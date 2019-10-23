<?php

namespace App\Http\Controllers;
use App\Moke;
use App\User;
use App\Notification;
use App\Friend;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function index(User $user)
    {
        //0が申請中、1が承認済み、3が拒否した
        //$user = Auth::user()->load('friends');
        // $user = User::get();
        // //dd($user);
        // $friends = new Friend;
        // $friends = Friend::get()->where('approver_id',Auth::user()->id)->where('status',0);
        $ids = Friend::where('approver_id', Auth::user()->id)
            ->where('status', 0)
            ->get()
            ->pluck('applicant_id')
            ->toArray();
        $friends = User::whereIn('id', $ids)->get();
        $user = $user->id;


        //dd($friends);
        // foreach ( $friends as $friend) {
        //     dd($friend->name);
        // }
        //dd($friends, $ids);

        //$notifications = Notification::get();
        //$notifications = notification::where('recipient_id', Auth::user()->id)->get();
        //$users = User::get();
        //$User = User::where('id', Auth::user()->id)->with('name')->first();
            //0のとこなんだっけ。
            //dd($notifications[0]->sender_id);
        //$notifications = notification::with('sender')->where('recipient_id', Auth::user()->id)->get();
        //$notification = $notifications[0]->sender_id;
        //dd($notification);
            //$friends = Friend::get();
        //承認する人(ログインしている人)と認証者が入っているレコードを取得 optionalでnullを防止(これでいいの？)
        //optinalにしたら送れなかった。compactで型とかあるの？
            //$friends = Friend::where('approvement_id', Auth::user()->id)->with('sender')->get();
            //$friend = optional(Friend::where('approver_id', Auth::user()->id)->first());
        //フィールドを取得
            //$friend = optional($friend->approver_id);
            
            //$friend = $friend->value;
            //dd($friend);
        //$friends = Friend::get();
        //$users->id = Auth::user()->id;
        
        //下だとエラーなぜ？compactにしたら解決
        //return view('notifications.notification', ['notifications' => $notifications],['users' => $users],['friend' => $friend]);
        
        return view('notifications.notification',compact('friends','user'));

    }

    //User $userでsenderのidを取得しているけどいいのか。
    //本来、notificationから、直接、送る方法があるのでは?
    public function store(User $user)
    {
        $loginuser = Auth::user();
        $ids = Friend::where('approver_id', Auth::user()->id)
        ->where('status', 0)
        ->get()
        ->pluck('applicant_id')
        ->first();

        $friend = Friend::where('approver_id', $loginuser->id)
            ->where('applicant_id', $ids)
            ->first();
        //sdd($friend);
        if($friend->status === 1){
            //dd(1);
             return redirect()->route('notification.index',['user' => Auth::user()->id]);
         }
        $friend->status = 1;
        //dd($friend->status);
        $friend->save();
        return redirect()->route('notification.index',['user' => Auth::user()->id]);
    }
}
