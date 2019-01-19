<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListingController extends Controller
{
    public function index()
    {
        return view('listing.index');
    }

    public function show()
    {
        return view('listing.show');
    }


}
