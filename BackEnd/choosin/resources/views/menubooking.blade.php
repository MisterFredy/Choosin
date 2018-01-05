<!DOCTYPE html>
<html class="uk-height-1-1">
    <head>
        <title>Menu</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/uikit.min.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/custom.css') }}" />

    </head>
    <body class="uk-height-1-1">

    <nav class="uk-navbar navbar-trans">
        <ul class="uk-navbar-nav">
            <li><a href="http://localhost/detailtempat/{{ $ids }}"><i class="navbar-prev uk-icon-angle-left uk-icon-large"></i></a></li>
        </ul>
        <div class="uk-navbar-content uk-navbar-center uk-navbar-brand"><img src="{{ URL::asset('img/logo.png') }}" width="100" height="43" alt="Navbar Image"></div>
    </nav>
  

    <p class="nama-resto uk-text-center">kode booking</p>
    <p class="nama-resto uk-text-center">{{$kodes}}</p>

    <form method="POST" action="bookingdetail/tambah">
      <input type="hidden" name="id_booking" value="{{$idbook}}">
      <div class="uk-container-center uk-width-3-4 menu-container uk-text-center">
      {{ csrf_field() }}
      @foreach($data as $baris)
        <div class="menu-group">
          <div class="uk-grid">
          <!---->
            <div class="uk-width-2-6 uk-vertical-align">
              <div class="uk-width-1-1 uk-vertical-align-middle">
                <div>
                  @if($baris->foto == null)
                  <img class="uk-thumbnail" src="http://localhost/storage/menumakan/Null.png" alt="Gambar Menu">
                  @else
                  <img class="uk-thumbnail" src="http://localhost/storage/menumakan/{{$baris->foto}}" alt="Gambar Menu">
                  @endif
                </div>
              </div>
            </div>
            <div class="uk-width-3-6 uk-vertical-align">
              <div class="uk-grid uk-vertical-align-middle">
                <div class="uk-width-1-1 nama-menu">{{$baris->nama_makanan}}</div>
                <div class="uk-width-1-1 harga-menu">Rp. {{$baris->harga}}</div>
                <input type="hidden" name="harga[]" value="{{$baris->harga}}">
              </div>
            </div>
           
            <div class="column-option uk-width-1-6 uk-cover">
                  <div class="uk-grid uk-grid-collapse uk-height-1-1">
                    <div class="uk-width-1-1 uk-height-1-3 button-opsi-padding">
                    <input type="checkbox" name="menu[]" value="{{$baris->id_menu}}">
                    </div>
                    <div class="uk-width-1-1 uk-height-1-3 button-opsi-padding">
                      <input type="text" name="jumlah[]" value="0" id="count" class="count-opsi uk-form-large uk-width-1-1 uk-text-center">
                    </div>
                  </div>
                </div>

          </div>
        </div>
        <br>
        @endforeach
        <button class="bayar-button uk-button uk-button-success" type="submit" name="submit" value="submit" type="button">Pembayaran</button>
      </div>

    <!-- For Script -->
    <script src="{{ URL::asset('js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ URL::asset('js/uikit.min.js') }}"></script>
    <script src="{{ URL::asset('js/custom.js') }}"></script>
    </body>
</html>
