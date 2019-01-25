<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Table
use App\Mpolicy;
use App\Mrole;
Use App\User;


class HumanController extends Controller
{

    //----------------------------------------------------------------------------------------------
    //Agen
    //----------------------------------------------------------------------------------------------

    Public function index(Request $request)
    {
        $s = $request->input('s');
        $agens=user::orderBy('id')->search($s)->paginate(10);
        // dd($s)->toarray();
        return view('human.agen.index',compact('agens'));
    }

    Public function show_agen($id)
    {
        $agen=user::find($id);
        return view('human.agen.show',compact('agen'));
    }

    Public function tambah_agen(Request $request)
    {
        //Data user
        // $user = new user;
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
        $user->password = decrypt($request->password);
        $user->save();

        return redirect()->route('human.agen.index');
    }

    Public function ubah_agen(Request $request, $id)
    {
      // $karyawan->nama_kolom = isi tabel;
      $user = user::find($id);

      //Data Pribadi
      $user->name = $request->nama ;
      $user->email = $request->tanggal_lahir ;
      $user->alamat = $request->jenis_kelamin ;
      $user->nik = $request->pendidikan ;
      $user->telp1 = $request->jumlah_anak ;
      $user->telp2 = $request->no_ktp ;
      $user->agama = $request->no_kk ;
      $user->jeniskelamin = $request->alamat ;
      $user->npwp = $request->no_tlp1 ;
      $user->mrole_id = $request->no_tlp2 ;
      $user->password = $request->agama ;
      $user->save();


      return redirect()->route('human.agen.show', ['id_karyawan' => $id]);
    }

    Public function hapus_agen()
    {
        $user->delet = '1' ;
        $user->save();
        return redirect()->route('human.agen.show');
    }

    //----------------------------------------------------------------------------------------------
    //Jabatan
    //----------------------------------------------------------------------------------------------

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

    Public function policy()
    {
        $bijaks=mpolicy::all();
        return view('human.policy.index',compact('bijaks'));
    }

    Public function tambah_policy()
    {
        return view('human.policy.tambah');
    }

    Public function ubah_policy()
    {
        return view('human.policy.ubah');
    }

}
