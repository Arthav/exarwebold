<!-- DONE -->
<!-- Agen list-->
@extends('layouts.master')

@section('title')
Exarweb: Policy
@endsection

@section('content')
Policy
@endsection


@section('content2')


    <!-- Section 2 -->
    <div class="w3-container w3-blue w3-padding-32">
      <div class="W3-container">

        <h2>Kebijakan</h2>
        <!--Awal Padding-->


        <!--Akhir Padding-->
        </div>

        <!-- TABLE AGEN -->
        <p>
          <div class="w3-responsive" style=color:black>
            <table class="w3-table-all">
              <tr>
                <th>Nama Kebijakan</th>
                <th>Pembagian komisi dengan perusahaan</th>
              </tr>
              @foreach($bijaks as $bijak)
              <tr>
              <td><a href="{{ route('Human.Policy.Show', ['id' => $bijak->id]) }}">{{$bijak->nama}}</td>
              <td>{{$bijak->split_fee}}%</td>
              
             
              
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
