<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Moke;
use Illuminate\Support\Facades\Auth;

class MokeController extends Controller
{
    //
    public function index()
    {
        // テーブルのデータを全件取得
        // allメソッド：全件データを取得するメソッド
        $mokes = Moke::get();

        // dd($diaries); //var_dump +処理をここで中断
        // view('フォルダ名.ファイル名', ['受け取られるデータの名前' =>$とられるデータ,]) 
        return view('home.leaflet', compact('mokes'));
    }

    // イベント新規投稿画面
    public function create()
    {
        return view('home.create');
    }

    public function store(Request $request)
    {
        $moke = new Moke(); //Mokeモデルをインスタンス化

        $moke->organizer_id = Auth::user()->id;
        $moke->moke_name = $request->moke_name;
        $moke->address = $request->address;
        $moke->due_date = $request->due_date;
        $moke->end_date = $request->end_date;
        $moke->lat = $request->lat;
        $moke->lng = $request->lng;
        $moke->moke_detail = $request->moke_detail;
        $moke->save(); //DBに保存
    
        return redirect()->route('moke.index'); //一覧ページにリダイレクト
    }

    public function edit(int $moke)
    {
                // //ユーザーIDとクリエイターのIDが違う時に403を返す
                // if (\Auth::user()->id !== $moke->organizer_id) {
                //     abort(403);
                // }
        $moke = Moke::find($moke); 
        return view('home.edit',['moke' => $moke]);
    }

    public function update(int $moke,Request $request)
    {

        $moke->moke_name= $request->moke_name;
        $moke->moke_detail= $request->moke_detail;
        // $moke->organizer_id = Auth::user()->id;
        $moke->due_date = $request->due_date;
        $moke->end_date = $request->end_date;
        $moke->address = $request->address;
        $moke->lat = $request->lat;
        $moke->lng = $request->lng;
        $moke->save(); //DBに保存
        return redirect()->route('moke.index'); 
    } 

    public function show(int $id)
    {

        $moke = Moke::With('tags')->find($moke);


        // dd($moke->tags);

        return view('home.detail', ['moke' => $moke]);
    }
}
