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

<body onload="openDkaryawan(event, 'Penjualan');">

    <!-- Section 2 -->
    <div class="w3-container w3-blue w3-padding-32">
      <div class="W3-container">

        <h2>Overview</h2>
        <!--Awal Padding-->

        <!-- tabulasi -->
        <div class="w3-row">
            <a href="javascript:void(0)" onclick="openDkaryawan(event, 'Penjualan');">
              <div class="w3-third tablink w3-bottombar w3-hover-light-grey w3-padding">Penjualan dan komisi</div>
            </a>             
            <a href="javascript:void(0)" onclick="openDkaryawan(event, 'Listing');">
              <div class="w3-third tablink w3-bottombar w3-hover-light-grey w3-padding">Listing</div>
            </a>             
        </div>
        <!-- Akhir tabulasi -->


          
          <!-- isi tabs laporan penjualan -->
          <div id="Penjualan" class="w3-container tabsdkaryawan" style="display:none"> 

            <!-- FILTER CARI NAMA-->
                <form name="filter" id=filter action="{{ route('Report.Penjualan.Agen') }}" method="get">
                    <p><h5>Filter</h5></p>
                    <div class="w3-row-padding">
                    {{-- combobox --}}
                    <p>
                    <label>Bulan</label>
                    <select class="w3-select w3-border" name="bulan" onchange="this.form.submit()">
                      <option value=""disable selected>Bulan</option>
                      <option  @if ($bulan == "1") selected @endif value="1">Januari</option>
                      <option  @if ($bulan == "2") selected @endif value="2">Februari</option>
                      <option  @if ($bulan == "3") selected @endif value="3">Maret</option>
                      <option  @if ($bulan == "4") selected @endif value="4">April</option>
                      <option  @if ($bulan == "5") selected @endif value="5">Mei</option>
                      <option  @if ($bulan == "6") selected @endif value="6">Juni</option>
                      <option  @if ($bulan == "7") selected @endif value="7">Juli</option>
                      <option  @if ($bulan == "8") selected @endif value="8">Agustus</option>
                      <option  @if ($bulan == "9") selected @endif value="9">September</option>
                      <option  @if ($bulan == "10") selected @endif value="10">Oktober</option>
                      <option  @if ($bulan == "11") selected @endif value="11">November</option>
                      <option  @if ($bulan == "12") selected @endif value="12">Desember</option>
                    </select>
                    </p>
                    <p>
                    <label>Tahun</label>
                    <select class="w3-select w3-border" name="tahun" onchange="this.form.submit()">
                      <option value="" disabled selected>Tahun</option>  
                      <option  @if ($tahun == "2017") selected @endif value="2017">2017</option>            
                      <option  @if ($tahun == "2018") selected @endif value="2018">2018</option>
                      <option  @if ($tahun == "2019") selected @endif value="2019">2019</option>
                      <option  @if ($tahun == "2020") selected @endif value="2020">2020</option>
                      <option  @if ($tahun == "2021") selected @endif value="2021">2021</option>
                      <option  @if ($tahun == "2022") selected @endif value="2022">2022</option>
                      <option  @if ($tahun == "2023") selected @endif value="2023">2023</option>
                    </select>
                    </p>

                    </div>
                  </form>
                  <br><br>
                  <!-- AKHIR FILTER CARI NAMA -->
                <p><h5>Menampilkan data penjualan bulan: {{$bulan}} tahun: {{$tahun}}</h5></p>
                  
                <!--Akhir Padding-->

                <!-- TABLE AGEN -->
                <p>
                  <div class="w3-responsive" style=color:black>
                    <table class="w3-table-all">
                      <tr>
                        <th>Nama agen</th>
                        <th>Jumlah Penjualan</th>
                        <th>Komisi Marketing</th>
                        <th>PPH Komisi</th>
                        <th>Komisi Akhir Marketing</th>
                      </tr>
                      @foreach($overview as $over)
                      <tr>
                      <td>{{$over->name}}</td>
                      <td>{{$over->ListSold}}</td>
                      <td>Rp.{{$over->KomisiBersih}}</td>
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
                <script>
                    $(document).ready(function() {
                    $('bulan').on('change', function() {
                      document.forms[filter].submit();
                    });
                  });
            
                    $(document).ready(function() {
                    $('tahun').on('change', function() {
                      document.forms[filter].submit();
                    });
                  });
                  </script>

        {{-- Tombol Download --}}
        <a href="{{ route('Report.Overview.Download',['bulan'=>$bulan],['tahun'=>$tahun]) }}"class="w3-button w3-green w3-round-large">Export all data to excel</a></p>
      
        <!-- detail halaman -->
      <h7> {{$overview->total() }} total data</h7>
      <p><h8>In this page : ({{$overview->count()}}) </h8></p>

                
          </div>
      <!-- akhir isi tabs --> 

      




      <!-- isi tabs data listing -->
      <div id="Listing" class="w3-container tabsdkaryawan" style="display:none"> 
          <!-- TABLE -->
            <p> 
              <div class="w3-responsive" style=color:black>
                  <table class="w3-table-all">
                  <tr>
                      <th>Nama</th>
                      <th>Jumlah Listing Aktif</th>
                  </tr>
                  @foreach($listingview as $allview)
                  <tr>
                  <td><a href="{{ route('Report.Penjualan.Agen.Show', ['id' => $allview->id]) }}">{{$allview->name}} </td>    
                  <td>{{$allview->ListNow}} </td>                  
                  </tr>
                  @endforeach
        
                      
                  </table>
              </div>
            </p>
                <!--Akhir Table-->
              
             
           <!-- pagination -->
           {{ $listingview->appends(Request::input())->links() }}

           <!-- detail halaman -->
           <h7> {{$listingview->total() }} total data</h7>
           <p><h8>In this page : ({{$listingview->count()}}) </h8></p>

            </div>
            <!-- akhir isi tabs --> 



        <!--akhir container-->
      </div>
      <!--akhir section 2-->
    </div>
    <!--Akhir Page Content-->
  </div>




  <script>


//script untuk tabs
function openDkaryawan(evt, Dkaryawan) {
  var i, x, tablinks;
  x = document.getElementsByClassName("tabsdkaryawan");
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
     tablinks[i].className = tablinks[i].className.replace(" w3-border-white", "");
  }
  document.getElementById(Dkaryawan).style.display = "block";
  evt.currentTarget.firstElementChild.className += " w3-border-white";
}

function handleChange(input) {
    if (input.value < 0) input.value = 0;
    if (input.value > 100) input.value = 100;
  }

  

</script>

@endsection
