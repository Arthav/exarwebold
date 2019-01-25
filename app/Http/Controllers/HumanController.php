<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Table
use App\Mpolicy;
use App\Mrole;
Use App\User;


class HumanController extends Controller
{
    Public function index(Request $request)
    {
        $s = $request->input('s');
        $agens=user::orderBy('id')->search($s);
        // ->paginate(10);
        // dd($agens->->toarray());
        // dd($s)->toarray();
        return view('human.agen.index',compact('agens'));
    }

    Public function showagen($id)
    {
        $agen=user::find($id);
        return view('human.agen.show',compact('agen'));
    }

    Public function tambahagen()
    {
        return view('human.agen.tambah');
    }

    Public function ubahagen(Request $request, $id)
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


      $no_kk_lama = $user->no_kk;
      $no_kk_baru = $request->no_kk;


      return redirect()->route('human.agen.show', ['id_karyawan' => $id]);
    }

    Public function hapusagen()
    {
        $user->delet = '1' ;
        $user->save();
        return redirect()->route('human.agen.show');
    }

    //----------------------------------------------------------------------------------------------
    //----------------------------------------------------------------------------------------------

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
