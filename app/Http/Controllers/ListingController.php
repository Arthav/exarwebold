<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mlisting;
use App\Image;
use Auth;
class ListingController extends Controller
{
    public function index()
    {
        $mlistings=mlisting::leftjoin('images','mlistings.id','=','mlisting_id')
        ->selectRaw("mlistings.id as listid,mlistings.nama,price,commission,nama_pemilik,no_pemilik,tipe_unit,total_unit,available_unit,jenis_properti,luas_bangunan,luas_tanah,tinggi,lantai,lokasi,kamar_mandi,kamar_tidur,arah_properti,spesifikasi,kota,listrik,legalitas,user_id,mdeveloper_id,mlistings.created_at, images.id as imageid,mlisting_id")
        ->groupBy("mlistings.id","mlistings.nama","mlistings.price","mlistings.commission","mlistings.nama_pemilik","mlistings.no_pemilik","mlistings.tipe_unit","mlistings.available_unit","mlistings.total_unit","mlistings.jenis_properti","mlistings.luas_bangunan","mlistings.luas_tanah","mlistings.tinggi","mlistings.lantai","mlistings.lokasi","mlistings.kamar_mandi","mlistings.kamar_tidur","mlistings.arah_properti","mlistings.spesifikasi","mlistings.kota","mlistings.listrik","mlistings.legalitas","mlistings.user_id","mlistings.mdeveloper_id","mlistings.created_at","images.id","mlisting_id")
        ->get()
        ;
        // dd($mlistings);
        return view('listing.index',compact('mlistings'));
    }

    public function show($id)
    {
        dd($id);
        $mlistings=mlisting::leftjoin('images','mlistings.id','=','mlisting_id')
        ->selectRaw("mlistings.id,mlistings.nama,price,commission,nama_pemilik,no_pemilik,tipe_unit,total_unit,available_unit,jenis_properti,luas_bangunan,luas_tanah,tinggi,lantai,lokasi,kamar_mandi,kamar_tidur,arah_properti,spesifikasi,kota,listrik,legalitas,user_id,mdeveloper_id,mlistings.created_at, images.id as imageid,mlisting_id")
        ->groupBy("mlistings.id","mlistings.nama","mlistings.price","mlistings.commission","mlistings.nama_pemilik","mlistings.no_pemilik","mlistings.tipe_unit","mlistings.available_unit","mlistings.total_unit","mlistings.jenis_properti","mlistings.luas_bangunan","mlistings.luas_tanah","mlistings.tinggi","mlistings.lantai","mlistings.lokasi","mlistings.kamar_mandi","mlistings.kamar_tidur","mlistings.arah_properti","mlistings.spesifikasi","mlistings.kota","mlistings.listrik","mlistings.legalitas","mlistings.user_id","mlistings.mdeveloper_id","mlistings.created_at","images.id","mlisting_id")
        ->where("mlistings.id","=",$id)
        ->get()
        ;
        $listing1=image::all()
        ->where("mlistings_id","=",$id)
        ->take('1')
        ->get()
        ;
        return view('listing.show',compact('mlistings','listing1'));
    }

    public function tambah_listing()
    {
        return view('listing.tambahlisting');
    }

    public function simpan_listing(Request $request)
    {
        $this->validate($request,[
            'nama' => 'required'
          ]);

            $mlisting = new Mlisting;
            $mlisting->user_id = Auth::user()->id;
            $mlisting->nama = $request->nama;
            $mlisting->price = $request->price;
            $mlisting->save();

          $next = Mlisting::where('user_id', Auth::user()->id)->orderby('id','ASC')->get()->last();
          return redirect()->route('Listing.Tambah.Foto', ['id'=>$next->id]);
    }

    public function tambah_listing_foto(Request $request)
    {
      // dd($request->id);

      $mlisting = Mlisting::find($request->id);
      $images = Image::where('mlisting_id', $mlisting->id)->orderby('id','DESC')->get();
        return view('listing.tambahlistingfoto',compact('mlisting','images'));
    }

    public function simpan_listing_foto(Request $request)
    {
        $this->validate($request,[
            'ml_img' => 'mimes:jpeg,jpg|max:10000',
          ]);


          if ($request->file('ml_img')) {
            $image = new Image;
            $image->mlisting_id = $request->mlisting_id;
            $image->save();

            $img_name = Image::where('mlisting_id',$request->mlisting_id)->orderby('id','ASC')->get()->last();

              $nama_gambar = $img_name->id . '.png';
              $request->file('ml_img')->storeAs('public/mlisting', $nama_gambar);
              // $mlisting->gambar = $nama_gambar;
            }

          $next = $request->mlisting_id;
          return redirect()->route('Listing.Tambah.Foto', ['id'=>$next]);
    }

    public function ubah_listing()
    {
        return view('listing.ubahlisting');
    }

}
