<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mpolicy;
use App\Mrole;
Use App\User;
class HumanController extends Controller
{
    Public function index()
    {
        $agens=user::all();
        // dd($agens->->toarray());
        return view('human.agen',compact('agens'));
       
    }
}
