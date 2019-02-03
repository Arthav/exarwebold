<!-- DONE -->
<!-- Listing list-->
@extends('layouts.master')

@section('title')
Exarweb: Daftar Properti
@endsection

@section('content')
<br>
Property list
@endsection



@section('content2')


<!-- FILTER CARI -->
<br><br><br>
<form action="{{ route('Human.Agen') }}" method="get">
    <p><h5>Cari</h5></p>
    <div class="w3-row-padding">
      <div class="w3-half">
        <input class="w3-input" type="text" name="s" placeholder="cari berdasarkan nama">
      </div>
      <div class="w3-half">
        <button type="submit" class="w3-btn w3-black">Cari</button>
      </div>
    </div>
  </form>
  <br><br>
  <!-- AKHIR FILTER NAMA -->

@foreach($mlistings as $list)
<div class="grid-12">
    <div class="agenproperti-thumb">
    <div class="agenproperti-gambar"><div class="ribbon best"><span>Secondary</span></div>
        <a href="{{ route('Listing.Show', ['id' => $list->id]) }}">	<img class="lazy" src="http://rumahpantura.com/wp-content/uploads/2016/10/Foto-rumah-sederhana-tapi-elegan.jpg" alt="Dijual Rumah 2 lantai daerah Jemursari" width="124" height="83"/>
          </a></div>
        <div class="agenproperti-title"><h2><a href="" title="">{{$list->nama}}</a></h2>
    <div class="agenproperti-harga">Rp.{{$list->price}},-</div>
    <div class="agenproperti-info">{{$list->lokasi}} <br/>
    Lt/Lb : {{$list->luas_tanah}} / {{$list->luas_bangunan}}<br/></div>
    <a href="{{ route('Listing.Show', ['id' => $list->id]) }}" class="btn" >Lihat Detail &raquo;</a>
    </div>
    
    </div>
</div>

@endforeach







    {{-- <link rel='stylesheet' id='cptch_stylesheet-css'  href='http://www.agenpropertisurabaya.com/wp-content/plugins/captcha/css/style.css' type='text/css' media='all' /> --}}
<link rel='stylesheet' id='vcss-css'  href='http://www.agenpropertisurabaya.com/wp-content/themes/agenpropertisurabaya/agenpropertisurabaya/css/v-css.css' type='text/css' media='all' />
<link rel='stylesheet' id='style-css'  href='http://www.agenpropertisurabaya.com/wp-content/themes/agenpropertisurabaya/agenpropertisurabaya/style.css' type='text/css' media='all' />
{{-- <link rel='https://api.w.org/' href='http://www.agenpropertisurabaya.com/wp-json/' /> --}}
{{-- <link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://www.agenpropertisurabaya.com/xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="http://www.agenpropertisurabaya.com/wp-includes/wlwmanifest.xml" />  --}}
<script type="text/javascript">
(function(url){

	var evts = 'contextmenu dblclick drag dragend dragenter dragleave dragover dragstart drop keydown keypress keyup mousedown mousemove mouseout mouseover mouseup mousewheel scroll'.split(' ');
	var logHuman = function() {
		var wfscr = document.createElement('script');
		wfscr.type = 'text/javascript';
		wfscr.async = true;
		wfscr.src = url + '&r=' + Math.random();
		(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(wfscr);
		for (var i = 0; i < evts.length; i++) {
			removeEvent(evts[i], logHuman);
		}
	};
	for (var i = 0; i < evts.length; i++) {
		addEvent(evts[i], logHuman);
	}
})('//www.agenpropertisurabaya.com/?wordfence_logHuman=1&hid=86F5E2F4939CDF913058FEC08798F3DC');
</script><style type="text/css">
body{ margin:0px auto; padding:0px;
background:;background-color:#ffffff ;background-position:center center ;background-attachment:scroll ;}
a, h1, h2, h3, h4  {color:#2500fc;}
.vtr-menu-icon {background-color: #2500fc;}
.vtr-menu  {background-color: #2500fc;}
.vtr-menu  li.active > a,.vtr-menu  li.active,.vtr-menu  li:hover > a {	background-color: #000;}
.wp-pagenavi a:hover{color:#FFF;background-color:#2500fc;}
.current{color:#FFFFFF;background-color:#2500fc;}
#widget-form .button {background:#2500fc;}
.sidebar h4{background-color: #2500fc;}
.sidebar .box ul li a:hover{ color: #2500fc; }
.btn{ background-color: #2500fc; }
.button-widget-link{color:#2500fc;}
.vtr-title{color: #2500fc;}
.footer a{color:#2500fc;border-top-color: #2500fc;}
.vcard-name {color:#2500fc;}
.vcard-footer {	background-color: #2500fc;}
.keatas a{color:#999;}
.header-title{color: #2500fc;} 
#tophead{background-color:#2500fc;}
.agenproperti-harga{color:#2500fc;}
#catmenu a:hover {color:#2500fc;}

</style>


@endsection
