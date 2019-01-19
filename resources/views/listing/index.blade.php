<!-- DONE -->
<!-- DAFTAR KARYAWAN -->
@extends('layouts.master')

@section('title')
DAFTAR KARYAWAN
@endsection

@section('content')
Data Karyawan
@endsection


@section('content2')


    <!-- Section 2 -->
    <div class="w3-container w3-blue w3-padding-32">
      <div class="W3-container">

        <h2>Daftar Karyawan</h2>
        <!--Awal Padding-->


            <!-- FILTER CARI NAMA-->

            <form action="/karyawan" method="get">
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

        <!-- TABLE KARYAWAN -->
        <p>
          <div class="w3-responsive" style=color:black>
            <table class="w3-table-all">
              <tr>
                <th>NIK</th>
                <th>Nama Karyawan</th>
                <th>Departemen</th>
                <th>Posisi</th>
                <th>Jenis Kelamin</th>
                <th>Sekantor</th>
                <th>Tanggal Masuk</th>
                <th>Masa Kerja</th>
              </tr>

              <tr>
                
              </tr>
            </table>
          </div>
        </p>
        <!--Akhir Table-->





        <!--Tombol Tambah Karyawan-->
        <p>
        <a class="w3-btn w3-black" href="/karyawan/create">Tambah Baru</a>
        </p>





        <!--akhir container-->
      </div>
      <!--akhir section 2-->
    </div>
    <!--Akhir Page Content-->
  </div>

    <!-- Footer Copyright -->
      <div class="w3-blue w3-center w3-padding-24">Copyright <a href="www.google.com">Gading Murni</a> 2018</a></div>

@endsection
