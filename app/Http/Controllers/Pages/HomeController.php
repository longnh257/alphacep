<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $s = @$request->s;
        $user= User::find(Auth::id());
        return view('pages.home.index' , compact('s','user'));
    }
}
