<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\carbon;
use App\Exports\OverviewExport;
use Maatwebsite\Excel\Facades\Excel;

//Table
use App\Mpolicy;
use App\User;
use App\Mtransaction;
use App\Mrole;
use App\Mlisting;


class ReportController extends Controller
{

    public function download_overview()
    {
      return Excel::download(new OverviewExport, 'Laporan Agen.xlsx');
    }

    Public function penjualan_agen()
    {        
        //Overview Query, Laporan Index
        //
        // select  users.id,`name`,count(if(sold='0',user_id,null)) as ListNow,count(if(sold='1',user_id,null)) as ListSold,
        // if(sum(if(sold='1',round(m.close_price*final_commission/100*split_fee/100),null)) is null,'0',sum(if(sold='1',round(m.close_price*final_commission/100*split_fee/100),null))) as KomisiBersih,
        // if(sum(if(sold='1',round(m.close_price*final_commission/100*(100-split_fee)/100),null)) is null ,'0',sum(if(sold='1',round(m.close_price*final_commission/100*(100-split_fee)/100),null)))as KomisiPerusahaan
        // from `users` left join mlistings on mlistings.user_id = users.id left join mtransactions m on mlistings.id = m.mlisting_id
        // group by user_id
        // order by ListNow Desc
        // ;

        $overview=user::leftjoin('mlistings','mlistings.user_id','=','users.id')
        ->leftjoin('mtransactions','mlistings.id' ,'=', 'mlisting_id')
        ->selectRaw("users.id,`name`,count(if(sold='0',user_id,null)) as ListNow,count(if(sold='1',user_id,null)) as ListSold,if(sum(if(sold='1',round(close_price*final_commission/100*split_fee/100),null)) is null,'0',sum(if(sold='1',round(close_price*final_commission/100*split_fee/100),null))) as KomisiBersih,if(sum(if(sold='1',round(close_price*final_commission/100*(100-split_fee)/100),null)) is null ,'0',sum(if(sold='1',round(close_price*final_commission/100*(100-split_fee)/100),null)))as KomisiPerusahaan")       
        ->groupBy('user_id','name','users.id')
        ->orderBy('ListNow','Desc')
        ->get();
        // dd($overview->toarray());

        return view('report.penjualanagen.index',compact('overview'));
    }

    Public function penjualan_agen_show($id)
    {        
        
        $agen=user::find($id);
        $allviews=mlisting::join('users', 'mlistings.user_id', '=', 'users.id')
        ->selectRaw("nama,jenis_list,price, jenis_properti,luas_bangunan,luas_tanah,lokasi,kamar_mandi,kamar_tidur,kota,listrik")
        ->where('users.id',$id)
        ->get();

        return view('report.penjualanagen.show',compact('allviews','agen'));
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
