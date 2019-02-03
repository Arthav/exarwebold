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

    public function headings(): array
    {
        return [
            'ID Agen',
            'Nama Agen',
            'Jumlah Listing Aktif',
            'Jumlah Sales',
            'Total Komisi Agen',
            'Total Komisi Perusahaan'
                      
        ];
    }

    public function collection()
    {

        return user::leftjoin('mlistings','mlistings.user_id','=','users.id')
        ->leftjoin('mtransactions','mlistings.id' ,'=', 'mlisting_id')
        ->selectRaw("users.id,`name`,count(if(sold='0',user_id,null)) as ListNow,count(if(sold='1',user_id,null)) as ListSold,if(sum(if(sold='1',round(close_price*final_commission/100*split_fee/100),null)) is null,'0',sum(if(sold='1',round(close_price*final_commission/100*split_fee/100),null))) as KomisiBersih,if(sum(if(sold='1',round(close_price*final_commission/100*(100-split_fee)/100),null)) is null ,'0',sum(if(sold='1',round(close_price*final_commission/100*(100-split_fee)/100),null)))as KomisiPerusahaan,if(if(sum(if(sold='1',round(close_price*final_commission/100*split_fee/100),null)) is null,'0',sum(if(sold='1',round(close_price*final_commission/100*split_fee/100),null)))*(ppn/100) is null,0,if(sum(if(sold='1',round(close_price*final_commission/100*split_fee/100),null)) is null,'0',sum(if(sold='1',round(close_price*final_commission/100*split_fee/100),null)))*(ppn/100)) as Pajak,(if(sum(if(sold='1',round(close_price*final_commission/100*split_fee/100),null)) is null,'0',sum(if(sold='1',round(close_price*final_commission/100*split_fee/100),null))))-(if(if(sum(if(sold='1',round(close_price*final_commission/100*split_fee/100),null)) is null,'0',sum(if(sold='1',round(close_price*final_commission/100*split_fee/100),null)))*(ppn/100) is null,0,if(sum(if(sold='1',round(close_price*final_commission/100*split_fee/100),null)) is null,'0',sum(if(sold='1',round(close_price*final_commission/100*split_fee/100),null)))*(ppn/100))) as komisiakir")       
        ->groupBy('user_id','name','users.id','ppn')
        ->orderBy('id')
        ->get();
    }
}
