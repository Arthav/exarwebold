<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Table
use App\Mpolicy;
use App\Mrole;
Use App\User;

class RoleController extends Controller
{
    Public function jabatan()
    {
        $jabats=mrole::all();
        // dd($jabats->toarray());
        return view('human.jabatan.index',compact('jabats'));
    }

    Public function tambah_jabatan()
    {
        return view('human.jabatan.tambah');
    }

    Public function ubah_jabatan()
    {
        return view('human.jabatan.ubah');
    }

    Public function hapus_jabatan()
    {
        return view('human.jabatan.ubah');
    }

}
