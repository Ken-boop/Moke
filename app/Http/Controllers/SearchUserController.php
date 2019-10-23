<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Moke;
use Illuminate\Support\Facades\Auth;

class SearchUserController extends Controller
{
    //
    public function index()
    {
        return view('home.searchUser');
    }
    
    public function search(Request $request)
    {
        $keyword=$request->keyword;

        dd($keyword);

        return redirect()->route('searchUser.index');
    }
}
