<!-- DONE -->
<!-- Agen list-->
@extends('layouts.master')

@section('title')
INDEX
@endsection

@section('content')
INDEX
@endsection


@section('content2')


    <!-- Section 2 -->
    <div class="w3-container w3-blue w3-padding-32">
      <div class="W3-container">

        <h2>Kebijakan</h2>
        <!--Awal Padding-->


            <!-- FILTER CARI NAMA-->

            <form action="{{ route('Human.Agen') }}" method="get">
              <p><h5>Cari</h5></p>
              <div class="w3-row-padding">
                <div class="w3-half">
                  <!-- <input class="w3-input" type="text" name="s" placeholder="cari berdasarkan nama"> -->
                </div>
                <div class="w3-half">
                  <button type="submit" class="w3-btn w3-black">Cari</button>
                </div>
              </div>
            </form>
            <!-- AKHIR FILTER CARI NAMA -->


        <!--Akhir Padding-->
        </div>

        <!-- TABLE AGEN -->
        <p>
          <div class="w3-responsive" style=color:black>
            <table class="w3-table-all">
              <tr>
                <th>Nama Kebijakan</th>
                <th>Komisi Min</th>
                <th>Komisi Max</th>
                <th>Co-Buy</th>
                <th>Co-Selling</th>
                <th>Co-Broke</th>
                <th>Referensi</th>
              </tr>
              @foreach($bijaks as $bijak)
              <tr>
              <td>{{$bijak->nama}}</td>
              <td>{{$bijak->commission_min}}%</td>
              <td>{{$bijak->commission_max}}%</td>
              <td>{{$bijak->co_buy}}</td>
              <td>{{$bijak->co_sell}}</td>
              <td>{{$bijak->out_broke}}</td>
              <td>{{$bijak->reference}}</td>
              
             
              
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
        <a class="w3-btn w3-black" href="{{ route('Human.Policy.Tambah') }}">Tambah Baru</a>
        </p>





        <!--akhir container-->
      </div>
      <!--akhir section 2-->
    </div>
    <!--Akhir Page Content-->
  </div>

    <!-- Footer Copyright -->
      <div class="w3-blue w3-center w3-padding-24">Copyright <a href="www.google.com">Exari</a> 2019</a></div>

@endsection
