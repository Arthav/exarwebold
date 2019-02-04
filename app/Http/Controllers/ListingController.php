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
            'ml_img' => 'mimes:jpeg,jpg,png|max:10000',
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
