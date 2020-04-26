<?php

namespace App\Http\Controllers;

use App\Artist;
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
        $artists = Artist::orderBy('popularity','desc')->limit(3)->get();
        return view('homepage',compact('artists'));
    }
}
