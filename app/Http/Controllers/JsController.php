<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Moke;
use Illuminate\Support\Facades\Auth;

class JsController extends Controller
{
    //
    public function index(){
        // diariesテーブルのデータを全件取得
    // allメソッド：全件データを取得するメソッド
    $mokes = Moke::all();

    Javascript::put([
        'mokes' => $mokes
        ]);
        return View::make('home.index',compact('mokes'));
    }
}
