<?php

namespace App\Exports;

use App\Mpolicy;
use App\User;
use App\Mtransaction;
use App\Mrole;
use App\Mlisting;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;


class OverviewExport implements WithHeadings, ShouldAutoSize,FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */

    protected $bulan;
    protected $tahun;
    public function __construct(Request $request)
    {
        $this->tahun = $request->input('tahun'); 
        $this->bulan = $request->input('bulan'); 
    }

    public function headings(): array
    {
        return [
            'ID Agen',
            'Nama Agen',
            'Jumlah Sales',
            'Total Komisi Agen',
            'Total Komisi Perusahaan'
                      
        ];
    }


    public function collection()
    {
        $now = carbon::now();
        $bulan = $request->input('bulan');
        if($bulan == null){
            $bulan = $now->month;
        }
        $tahun = $request->input('tahun');
        if($tahun == null){
            $tahun = $now->year;
        }

        return user::leftjoin('mlistings','mlistings.user_id','=','users.id')
        ->leftjoin('mtransactions','mlistings.id' ,'=', 'mlisting_id')
        ->selectRaw("users.id,`name`,count(if(sold='1',user_id,null)) as ListSold,if(sum(if(sold='1',round(close_price*final_commission/100*split_fee/100),null)) is null,'0',sum(if(sold='1',round(close_price*final_commission/100*split_fee/100),null))) as KomisiBersih,if(if(sum(if(sold='1',round(close_price*final_commission/100*split_fee/100),null)) is null,'0',sum(if(sold='1',round(close_price*final_commission/100*split_fee/100),null)))*(ppn/100) is null,0,if(sum(if(sold='1',round(close_price*final_commission/100*split_fee/100),null)) is null,'0',sum(if(sold='1',round(close_price*final_commission/100*split_fee/100),null)))*(ppn/100)) as Pajak,(if(sum(if(sold='1',round(close_price*final_commission/100*split_fee/100),null)) is null,'0',sum(if(sold='1',round(close_price*final_commission/100*split_fee/100),null))))-(if(if(sum(if(sold='1',round(close_price*final_commission/100*split_fee/100),null)) is null,'0',sum(if(sold='1',round(close_price*final_commission/100*split_fee/100),null)))*(ppn/100) is null,0,if(sum(if(sold='1',round(close_price*final_commission/100*split_fee/100),null)) is null,'0',sum(if(sold='1',round(close_price*final_commission/100*split_fee/100),null)))*(ppn/100))) as komisiakir")       
        ->where(function ($query){
            $query->where('users.delet','=','0');
        })
        ->where(function ($query){
            $query->where('mlistings.delet','=','0') 
                  ->orwherenull('mlistings.delet') ;
        })
        ->whereMonth('mtransactions.created_at','=',$this->bulan)
        ->whereYear('mtransactions.created_at','=',$this->tahun)
        ->groupBy('user_id','name','users.id','ppn')
        ->orderBy('users.id')
        ->get();
    }
}
