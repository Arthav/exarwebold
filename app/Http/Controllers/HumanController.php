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
        return view('human.agen.index',compact('agens'));
    }

    Public function tambahagen()
    {
        return view('human.agen.tambah');
    }

    Public function ubahagen()
    {
        return view('human.agen.ubah');
    }

    Public function jabatan()
    {
        $jabats=mrole::all();
        // dd($jabats->toarray());
        return view('human.jabatan.index',compact('jabats'));
    }

    Public function tambahjabatan()
    {
        return view('human.jabatan.tambah');
    }

    Public function ubahjabatan()
    {
        return view('human.jabatan.ubah');
    }

    Public function policy()
    {
        $bijaks=mpolicy::all();
        return view('human.policy.index',compact('bijaks'));
    }

    Public function tambahpolicy()
    {
        return view('human.policy.tambah');
    }

    Public function ubahpolicy()
    {
        return view('human.policy.ubah');
    }

}

