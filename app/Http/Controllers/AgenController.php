<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Table
use App\Mpolicy;
use App\Mrole;
Use App\User;

class AgenController extends Controller
{
    Public function index(Request $request)
    {
        $s = $request->input('s');
        $agens=user::orderBy('id')->search($s)->paginate(10);
        $mroles=mrole::all();
        // dd($s)->toarray();
        return view('human.agen.index',compact('agens','mroles'));
    }

    Public function show_agen($id)
    {
        
        $agen=user::find($id);
        $mroles=mrole::all();
        // dd($agen);
        return view('human.agen.show',compact('agen','mroles'));
    }

    Public function tambah_agen()
    {
        $mroles=mrole::all();
        return view('human.agen.tambah',compact('mroles'));
    }

    Public function simpan_agen(Request $request)
    {
        //Data user
        dd($request);
        $user = new user;
        $user->name = $request->nama;
        $user->email = $request->email;
        $user->alamat = $request->alamat;
        $user->nik = $request->nik;
        $user->telp1 = $request->telp1;
        $user->telp2 = $request->telp2;
        $user->agama = $request->agama;
        $user->jeniskelamin = $request->jeniskelamin;
        $user->npwp = $request->npwp;
        $user->mrole_id = $request->jabatan;
        $user->password = $request->password;
        $user->save();

        return redirect()->route('human.agen.index');
    }

    Public function ubah_agen(Request $request, $id)
    {
      // $karyawan->nama_kolom = isi tabel;
      $user = user::find($id);
      $mroles=mrole::all();

      //Data Pribadi = 10
      $user->name = $request->nama ;
      $user->email = $request->email ;
      $user->alamat = $request->alamat ;
      $user->nik = $request->nik ;
      $user->telp1 = $request->telp1 ;
      $user->telp2 = $request->telp2 ;
      $user->agama = $request->agama ;
      $user->jeniskelamin = $request->jeniskelamin ;
      $user->npwp = $request->npwp ;
      $user->mrole_id = $request->mrole_id ;
      $user->save();


      return redirect()->route('Human.Agen.Show', ['id' => $id],compact('user','mroles'));
    }

    Public function hapus_agen()
    {
        $user->delet = '1' ;
        $user->save();
        return redirect()->route('human.agen.show');
    }
}
