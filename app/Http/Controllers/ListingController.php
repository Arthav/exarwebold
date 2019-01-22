<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mlisting;
class ListingController extends Controller
{
    public function index()
    {
        //$mlistings=mlisting::where('nama','Rumah wiyung')->get();
        $mlistings=mlisting::all();
        //dd($mlistings);
        return view('listing.index',compact('mlistings'));
    }

    public function show()
    {
        return view('listing.show');
    }


}
