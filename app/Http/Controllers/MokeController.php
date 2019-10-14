<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Moke;
use Illuminate\Support\Facades\Auth;

class MokeController extends Controller
{
    public function index(){
                        // diariesテーブルのデータを全件取得
        // allメソッド：全件データを取得するメソッド
        $mokes = Moke::all();

        // dd($diaries); //var_dump +処理をここで中断
        //dd($mokes);
        // view('フォルダ名.ファイル名', ['受け取られるデータの名前' =>$とられるデータ,]) 
        return view('home.index', [
            'mokes' =>$mokes,
        ]);
    }

    public function create()
    {
      
        return view('creates.create');


    }

   
    

    public function store(Request $request)
    {   
        $moke = new Moke(); 
        $moke->moke_name= $request->moke_name; //画面で入力されたタイトルを代入
        $moke->moke_detail= $request->moke_detail;
        $moke->organizer_id = Auth::user()->id;
        $moke->due_date = $request->due_date;
        $moke->end_date = $request->end_date;
        $moke->address = $request->address; //画面で入力された本文を代入
        $moke->save(); //DBに保存
        //dd("保存処理");
        return redirect()->route('moke.index'); //一覧ページにリダイレクト　これの意味確認
    }

    

    public function edit(int $moke)
    {
        $moke = Moke::find($moke); 
        return view('creates.edit',['moke' => $moke]);
    }

    public function update(int $moke,Request $request)
    {
        $moke = Moke::find($moke);
        $moke->moke_name= $request->moke_name;
        $moke->moke_detail= $request->moke_detail;
        $moke->organizer_id = Auth::user()->id;
        $moke->due_date = $request->due_date;
        $moke->end_date = $request->end_date;
        $moke->address = $request->address;
        $moke->save(); //DBに保存
        return redirect()->route('moke.index'); 
    } 
}