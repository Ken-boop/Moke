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

    public function create()
    {
        //dd("作成")
        return view('home.create');
    }

    public function store(Request $request)
    {
        $moke = new Moke();

        $moke->moke_name = $request->moke_name;
        $moke->moke_detail = $request->moke_detail;
        $moke->due_date = $request->due_date;
        $moke->end_date = $request->end_date;
        $moke->address = $request->address;
        $moke->organizer_id = Auth::user()->id;
        $moke->save();

        return redirect()->route('moke.index');
    }

    public function 

   
}
