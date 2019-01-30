<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


//Table
use App\Mpolicy;
use App\User;
use App\Mtransaction;
use App\Mrole;
use App\Mlisting;


class ReportController extends Controller
{
    Public function penjualan_agen()
    {        
        $agens=user::where('delet','0')->get();
        $listings=mlisting::all();

        // $allview=mlisting::all()
        // ->join('users','mlistings.user_id','=','users.id')
        // ->get();

        $overview=user::leftjoin('mlistings','mlistings.user_id','=','users.id')
        ->selectRaw("`name`,if(sum(`user_id`) is null ,'0',sum(`user_id`)) as 'Jumlah'")       
        ->groupBy('user_id')
        ->get();

        dd($overview);


        return view('report.penjualanagen',compact('agens','listings'));
    }

    Public function penjualan_saya()
    {        
        $bijaks=mpolicy::where('delete','0')->get();
        return view('report',compact('bijaks'));
    }

    Public function komisi_agen()
    {        
        $bijaks=mpolicy::where('delete','0')->get();
        return view('report',compact('bijaks'));
    }

    Public function komisi_saya()
    {        
        $bijaks=mpolicy::where('delete','0')->get();
        return view('report',compact('bijaks'));
    }



}
