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

    public function tambah_listing()
    {
        return view('listing.tambahlisting');
    }

    public function simpan_listing(Request $request)
    {
        $this->validate($request,[
            'event_img' => 'mimes:jpeg,jpg,png|max:10000',
            'nama' => 'required'
          ]);
  
            $acara = new Acara;
            $a = Auth::user()->id;
            $acara->user_id = Auth::user()->id;
            $acara->nama = $request->nama;
            $acara->nama_tempat = $request->nama_tempat;
            $acara->kota = $request->kota;
            $acara->alamat = $request->alamat;
            $acara->deskripsi = $request->deskripsi;
            $acara->tgl_mulai = $request->tgl_mulai;
            $acara->tgl_selesai = $request->tgl_selesai;
            $acara->wkt_mulai = $request->wkt_selesai;
            $acara->wkt_selesai = $request->wkt_selesai;
            if ($request->file('event_img')) {
              $nama_gambar = time() . '.png';
              $request->file('event_img')->storeAs('public/event', $nama_gambar);
              $acara->gambar = $nama_gambar;
            }
            $acara->save();
          $next = Acara::where('user_id', Auth::user()->id)->orderby('id','ASC')->get()->last();
          return redirect()->route('Event.Ticket.Create', ['id'=>$next->id]);
    }

    public function ubah_listing()
    {
        return view('listing.ubahlisting');
    }

}
