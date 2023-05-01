<?php

namespace App\Http\Controllers;

use App\Models\LicenseCard;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home', [
            'data' => LicenseCard::latest()->get(),
            'today' => Carbon::now()->format('Y-m-d')
        ]);
    }
}
