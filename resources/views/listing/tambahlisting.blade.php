@extends('layouts.master')

@section('title')
Exarweb
@endsection

@section('content')
Tambah Listing
@endsection


@section('content2')
<div class="w3-padding">

        <div class="w3-half w3-padding">
          <div class="w3-card-4">
            <div class="w3-container w3-pale-green">
              <h2>Acara</h2>
            </div>
            @if ($errors->any())

                <div>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <p>{{ $error }}</p>
                        @endforeach
                    </ul>
                </div>

            @endif
            <form enctype="multipart/form-data" class="w3-container" action="{{ route('Listing.Simpan') }}" method="post">
              <p>
              <label>Nama Listing</label>
              <input required class="w3-input" type="text" name="nama" ></p>
              <p>
              <label>harga</label>
              <input required class="w3-input" type="number" name="price" min="10000000"></p>
              <p>
              <input type="submit" name="submit" value="Simpan Listing" class="w3-btn w3-green"></input>
              {{ csrf_field() }}
            </form>
            <br><br>
          </div>
        </div>


      </div>

      </div>

@endsection
