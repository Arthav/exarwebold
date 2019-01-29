<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


//Table
use App\Mpolicy;
use App\User;
use App\Mtransaction;
use App\Mrole;
use App\Mbonu;


class ReportController extends Controller
{
    Public function index()
    {        
        $bijaks=mpolicy::where('delete','0')->get();
        return view('human.policy.index',compact('bijaks'));
    }


    
}
