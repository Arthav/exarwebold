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
              <h2>{{ $mlisting->nama }}</h2>
              <h4> id listing: {{ $mlisting->id }}</h4>
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
            <form enctype="multipart/form-data" class="w3-container" action="{{ route('Listing.Simpan.Foto') }}" method="post">
              <input hidden type="text" name="mlisting_id" value="{{ $mlisting->id }}">
              <p>
              <label>Foto Properti</label>
              <input class="w3-input" type="file" name="ml_img"></p>
              @if ($errors->has('ml_img'))
                <p> {{ $errors->first('ml_img') }} </p>
              @endif

              <input type="submit" name="submit" value="Simpan Foto" class="w3-btn w3-green"></input>
              {{ csrf_field() }}
            </form>
            <br><br>
          </div>

        </div>
        <div class="w3-half w3-padding">
          <div class="w3-card-4">
            <div class="w3-container w3-pale-green">
              <h2>Foto</h2>
            </div>
            @if ($images)
            @foreach ($images as $img)
              <p>
                <img src="{{ url('/storage/mlisting/'.$img->id.'.png') }}" alt="foto listing" style="width:100%">
              </p>
            @endforeach
          @endif
          </div>
        </div>

      </div>

      </div>

@endsection
