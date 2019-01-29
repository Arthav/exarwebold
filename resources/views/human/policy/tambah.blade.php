<!-- DONE -->
<!-- TAMBAH Policy -->
@extends('layouts.master')

@section('title')
TAMBAH Policy
@endsection

@section('content')
Tambah Kebijakan Baru
@endsection


@section('content2')
<!-- mkasdmfkamsdkf -->



  <!-- Section 2 -->
  <div class="w3-container w3-blue w3-padding-32">
    <div class="W3-container">
      <h3>Tambah Policy</h3>

<form class="w3-container" action="{{ route('Human.Policy.Simpan') }}" method="post">
  <p>
  <label>Nama</label>
  <input class="w3-input" name="nama" type="text"></p>

  

    <p>
    <label>Co-Broke</label>
    <div class="w3-row-padding">
    <div class="w3-half">
      <input class="w3-radio" type="radio" name="co_broke" value="yes">
      <label>Diperbolehkan</label>
    </div>

    <div class="w3-half">
      <input class="w3-radio" type="radio" name="co_broke" value="no">
      <label>Tidak Diperbolehkan</label>
    </div>
    </div>
    </p>

    <p>
    <label>Penjualan dengan referensi</label>
    <div class="w3-row-padding">
    <div class="w3-half">
      <input class="w3-radio" type="radio" name="reference" value="yes">
      <label>Diperbolehkan</label>
    </div>

    <div class="w3-half">
      <input class="w3-radio" type="radio" name="reference" value="no">
      <label>Tidak Diperbolehkan</label>
    </div>
    </div>
    </p>
    <br>

  <p>
  <label>Minimal properti yang terjual dalam satu bulan</label>
  <input class="w3-input" name="min_sell" type="text"></p>

  <p>
  <label>Pembagian komisi penjualan dengan perusahaan (%)</label>
  <input class="w3-input" name="split_fee" type="text"></p>

  <p>
  <label>Pembagian komisi untuk penjualan dengan Co-Broking (%)</label>
  <input class="w3-input" name="co_fee" type="text"></p>

  <p>
  <label>Pembagian komisi untuk penjualan dengan referensi (%)</label>
  <input class="w3-input" name="co_fee" type="text"></p>


    


    <input type="submit" class="w3-button w3-red w3-round-large" name="submit" value="Add New Policy">
    {{ csrf_field() }}
  </form>

    </div>

    <!-- Isi setiap tabs -->

  </div>

      <!--bagian warna hitam-->

  <!-- End page content -->
</div>


@endsection
