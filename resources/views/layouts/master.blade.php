<!DOCTYPE html>
<html lang="en" dir="ltr">
<title>@yield('title')</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/CSS.css"> -->

<link rel="stylesheet" href="{{URL::asset('css/w3.css')}}">
<link rel="stylesheet" href="{{URL::asset('css/font_robot.css')}}">
<link rel="stylesheet" href="{{URL::asset('css/font_montserrat.css')}}">
<link rel="stylesheet" href="{{URL::asset('css/CSS.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- <link rel="stylesheet" href="{{URL::asset('css/font-awesome.min.css')}}" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"> -->

<!-- <link rel="stylesheet" href="{{URL::asset('css/font-awesome.min.css')}}" rel="{{URL::asset('stylesheet')}}" integrity="{{URL::asset('sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN')}}" crossorigin="{{URL::asset('anonymous')}}"> -->

<body class="w3-content" style="max-width:1200px">


  <!-- Sidebar/menu -->
  <nav class="w3-sidebar w3-bar-block w3-white w3-collapse w3-top" style="z-index:3;width:250px" id="mySidebar">
    <div class="w3-container w3-display-container w3-padding-16">
      <i onclick="w3_close()" class="fa fa-remove w3-hide-large w3-button w3-display-topright"></i>
      <h3 class="w3-wide"><b>Exari</b></h3>
    </div>


    <div class="w3-padding-64 w3-large w3-text-grey" style="font-weight:bold">
  <!--MENU DATA KARYAWAN-->
      <a onclick="myAccFunc1()" href="javascript:void(0)" class="w3-button w3-block w3-white w3-left-align" id="myBtn1">
        <b>Data Karyawan</b> <i class="fa fa-caret-down"></i>
      </a>
      <div id="Acc1" class="w3-bar-block w3-hide w3-padding-large w3-medium">
        <a href="/karyawan" class="w3-bar-item w3-button">Karyawan</a>
        <a href="{{ route('Listing.Show') }}" class="w3-bar-item w3-button">Test show</a>
      </div>

    <!--MENU RECRUITMENT-->
      <a onclick="myAccFunc2()" href="javascript:void(0)" class="w3-button w3-block w3-white w3-left-align" id="myBtn2">
        Recruitment <i class="fa fa-caret-down"></i>
      </a>
      <div id="Acc2" class="w3-bar-block w3-hide w3-padding-large w3-medium">
        <a href="/rekrutmen" class="w3-bar-item w3-button">Permintaan Calon</a>
        <a href="/rekrutmen/create" class="w3-bar-item w3-button">Request Calon</a>
      </div>

  <!--MENU ABSENSI-->
      <a onclick="myAccFunc3()" href="javascript:void(0)" class="w3-button w3-block w3-white w3-left-align" id="myBtn3">
        Absensi <i class="fa fa-caret-down"></i>
      </a>
      <div id="Acc3" class="w3-bar-block w3-hide w3-padding-large w3-medium">
        <a href="/cuti" class="w3-bar-item w3-button">Cuti</a>
        <a href="/terlambat" class="w3-bar-item w3-button">Terlambat</a>
        <a href="/dinasluar" class="w3-bar-item w3-button">Dinas Luar</a>
        <a href="/potongan" class="w3-bar-item w3-button">Detail Potongan Gaji</a>
      </div>

   <!--MENU PENGATURAN-->
        <a onclick="myAccFunc4()" href="javascript:void(0)" class="w3-button w3-block w3-white w3-left-align" id="myBtn4">
          Pengaturan <i class="fa fa-caret-down"></i>
        </a>
        <div id="Acc4" class="w3-bar-block w3-hide w3-padding-large w3-medium">
          <a href="/pengaturan/karyawan" class="w3-bar-item w3-button">Karyawan</a>
          <a href="/pengaturan/absensi" class="w3-bar-item w3-button">Absensi</a>
          <a href="/pengaturan/gaji" class="w3-bar-item w3-button">Gaji</a>
          <a href="/pengaturan/inventaris" class="w3-bar-item w3-button">Inventaris</a>
        </div>
    </div>
  </nav>

  <!-- Top menu on small screens -->
  <header class="w3-bar w3-top w3-hide-large w3-blue w3-xlarge">
    <div class="w3-bar-item w3-padding-24 w3-wide">GADING MURNI</div>
    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding-24 w3-right" onclick="w3_open()"><i class="fa fa-bars"></i></a>
  </header>

  <!-- Overlay effect when opening sidebar on small screens -->
  <div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

  <!-- !PAGE CONTENT! -->
  <div class="w3-main" style="margin-left:250px">

    <!-- Push down content on small screens -->
    <div class="w3-hide-large" style="margin-top:83px"></div>

    <!-- Top header -->
    <header class="w3-container w3-xlarge">
      <p class="w3-left">@yield('content')</p>
    </header>


    <!-- Section 2 -->
  @yield('content2')

    <script>
    // Accordion1
    function myAccFunc1() {
        var x = document.getElementById("Acc1");
        if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
        } else {
            x.className = x.className.replace(" w3-show", "");
        }
    }
    // Accordion2
    function myAccFunc2() {
        var y = document.getElementById("Acc2");
        if (y.className.indexOf("w3-show") == -1) {
            y.className += " w3-show";
        } else {
            y.className = y.className.replace(" w3-show", "");
        }
    }
    // Accordion4
    function myAccFunc3() {
        var z = document.getElementById("Acc3");
        if (z.className.indexOf("w3-show") == -1) {
            z.className += " w3-show";
        } else {
            z.className = z.className.replace(" w3-show", "");
        }
    }
    // Accordion3
    function myAccFunc4() {
        var z = document.getElementById("Acc4");
        if (z.className.indexOf("w3-show") == -1) {
            z.className += " w3-show";
        } else {
            z.className = z.className.replace(" w3-show", "");
        }
    }


    // Script to open and close sidebar
    function w3_open() {
        document.getElementById("mySidebar").style.display = "block";
        document.getElementById("myOverlay").style.display = "block";
    }

    function w3_close() {
        document.getElementById("mySidebar").style.display = "none";
        document.getElementById("myOverlay").style.display = "none";
    }

    </script>


  </body>
</html>
