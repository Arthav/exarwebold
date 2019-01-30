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

        <h2>Daftar Agen</h2>
        <!--Awal Padding-->

        <!--Akhir Padding-->
        </div>

        <!-- TABLE AGEN -->
        <p>
          <div class="w3-responsive" style=color:black>
            <table class="w3-table-all">
              <tr>
                <th>Nama agen</th>
                <th>Jumlah Listing</th>
                <th>Alamat</th>
                <th>NIK</th>
                <th>Jabatan</th>
              </tr>
              @foreach($agens as $agen)
              <tr>
              <td><a href="{{ route('Human.Agen.Show', ['id' => $agen->id]) }}">{{$agen->name}}</td>
              <td>{{$agen->email}}</td>
              <td>{{$agen->alamat}}</td>
              <td>{{$agen->nik}}</td>
              <td>{{$agen->mrole['nama']}}</td>
             
              
              </tr>
              @endforeach

              <tr>
                
              </tr>
            </table>
          </div>
        </p>
        <!--Akhir Table-->





        <!--Tombol Tambah AGEN-->
        <p>
        <a class="w3-btn w3-black" href="{{ route('Human.Agen.Tambah') }}">Tambah Baru</a>
        </p>





        <!--akhir container-->
      </div>
      <!--akhir section 2-->
    </div>
    <!--Akhir Page Content-->
  </div>

@endsection
