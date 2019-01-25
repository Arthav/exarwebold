<!-- DONE -->
<!-- TAMBAH KARYAWAN -->
@extends('layouts.master')

@section('title')
TAMBAH AGEN
@endsection

@section('content')
Daftar User Baru
@endsection


@section('content2')
<!-- mkasdmfkamsdkf -->



  <!-- Section 2 -->
  <div class="w3-container w3-blue w3-padding-32">
    <div class="W3-container">
      <h3>Data Pribadi</h3>

<form class="w3-container" action="{{ route('Human.Agen.Tambah') }}" method="post">
  <p>
  <label>Nama</label>
  <input class="w3-input" name="nama" type="text"></p>

  <p>
  <label>Email</label>
  <input class="w3-input" name="email" type="text"></p>


    <p>
    <label>Alamat</label>
    <input class="w3-input" name="alamat" type="text"></p>

    <p>
    <label>NIK</label>
    <input class="w3-input" name="nik" type="text"></p>

     <p>
    <label>Telepon 1</label>
    <input class="w3-input" name="telp1" type="text"></p>

    <p>
    <label>Telepon 2</label>
    <input class="w3-input" name="telp2" type="text"></p>

    <p>
    <label>Agama</label>
    <select class="w3-select w3-border" name="agama">
      <option value="" disabled selected>Agama</option>
      <option value="Islam">Islam</option>
      <option value="Kristen">Kristen</option>
      <option value="Katholik">Katholik</option>
      <option value="Hindu">Hindu</option>
      <option value="Budha">Buddha</option>
      <option value="Lainnya">Lainnya</option>
    </select>
    </p>

    <p>
    <label>Jenis kelamin</label>
    <div class="w3-row-padding">
    <div class="w3-half">
      <input class="w3-radio" type="radio" name="jenis_kelamin" value="Pria">
      <label>Pria</label>
    </div>

    <div class="w3-half">
      <input class="w3-radio" type="radio" name="jenis_kelamin" value="Wanita">
      <label>Wanita</label>
    </div>
    </div>
    </p>

    <p>
    <label>NPWP</label>
    <input class="w3-input" name="npwp" type="text"></p>

    
  <p>
  <label>Jabatan</label>
  <select class="w3-select w3-border" name="nama_jabatan">
    <option value="" disabled selected>Jabatan</option>
    @foreach ($mjabatans as $mrole)
      <option value="{{ $mrole->id }}">{{ $mrole->nama}}</option>
    @endforeach
  </select>
  </p>

    <p>
    <label>Password</label>
    <input class="w3-input" name="password" type="text"></p>



    <input type="submit" name="submit" value="Create">
    {{ csrf_field() }}
  </form>

    </div>

    <!-- Isi setiap tabs -->

  </div>

      <!--bagian warna hitam-->

  <div class="w3-blue w3-center w3-padding-24">Copyright <a href="www.google.com">Gading Murni</a> 2018</a></div>

  <!-- End page content -->
</div>


@endsection
