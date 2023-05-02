<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('profile.index',[
            'auth' =>  Auth::user() 
        ]);
    }

    public function update(Request $request)
    {
        Auth()->user()->update([

        ]);
    }
}
