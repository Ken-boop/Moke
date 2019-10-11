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
        $moke->moke_detail = $request->moke_detail;
        $moke->save(); //DBに保存
    
        return redirect()->route('moke.index'); //一覧ページにリダイレクト
    }
}
