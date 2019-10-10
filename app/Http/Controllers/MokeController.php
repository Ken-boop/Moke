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
        // diariesテーブルのデータを全件取得
        // allメソッド：全件データを取得するメソッド
        $mokes = Moke::all();

        // dd($diaries); //var_dump +処理をここで中断

        // view('フォルダ名.ファイル名', ['受け取られるデータの名前' =>$とられるデータ,]) 
        return view('home.index', [
            'mokes' =>$mokes,
        ]);
    }

}
