<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function welcome()
    {
    return view('home.welcome');
    }

    public function resister()
    {
    return view('home.resister');
    }
    public function login()
    {
    return view('home.login');
    }


}
