<!-- DONE -->
<!-- Agen list-->
@extends('layouts.master')

@section('title')
Exarweb - Laporan Penjualan
@endsection

@section('content')
Laporan Listing Properti
@endsection


@section('content2')


    <!-- Section 2 -->
    <div class="w3-container w3-blue w3-padding-32">
      <div class="W3-container">

        <h2>Overview</h2>
        <!--Awal Padding-->

        <!--Akhir Padding-->
        </div>

        <!-- TABLE AGEN -->
        <p>
          <div class="w3-responsive" style=color:black>
            <table class="w3-table-all">
              <tr>
                <th>Nama agen</th>
                <th>Jumlah Listing Aktif</th>
                <th>Jumlah Penjualan</th>
                <th>Komisi Marketing</th>
                <th>Komisi Agensi</th>
                <th>PPH Komisi</th>
                <th>Komisi Akhir Marketing</th>
              </tr>
              @foreach($overview as $over)
              <tr>
              <td><a href="{{ route('Report.Penjualan.Agen.Show', ['id' => $over->id]) }}">{{$over->name}}</td>
              <td>{{$over->ListNow}}</td>
              <td>{{$over->ListSold}}</td>
              <td>Rp.{{$over->KomisiBersih}}</td>
              <td>Rp.{{$over->KomisiPerusahaan}}</td>
              <td>Rp.{{$over->Pajak}}</td>
              <td>Rp.{{$over->komisiakir}}</td>
              
              
             
              
              </tr>
              @endforeach

              <tr>
                
              </tr>
            </table>
          </div>
        </p>
        <!--Akhir Table-->



        {{-- Tombol Download --}}
        <a href="{{ route('Report.Overview.Download') }}"class="w3-button w3-green w3-round-large">Download</a></p>







        <!--akhir container-->
      </div>
      <!--akhir section 2-->
    </div>
    <!--Akhir Page Content-->
  </div>

@endsection
