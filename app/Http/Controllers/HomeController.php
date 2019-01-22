<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mlisting;

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
        //$mlistings=mlisting::where('nama','Rumah wiyung')->get();
        $mlistings=mlisting::all();
        //dd($mlistings);
        return view('listing.index',compact('mlistings'));
    }

    public function testing()
    {
        $a = 5;
        dd($a);
        return view('test');
    }

   

}
