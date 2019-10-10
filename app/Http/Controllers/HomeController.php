<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //top画面
    public function welcome()
    {
    return view('home.welcome');
    }

    // 新規登録画面
    public function resister()
    {
    return view('home.resister');
    }

    // ログイン画面
    public function login()
    {
    return view('home.login');
    }
    
}