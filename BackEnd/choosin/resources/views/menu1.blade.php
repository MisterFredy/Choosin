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


    
      <div class="uk-container-center uk-width-3-4 menu-container uk-text-center">
      @foreach($data as $baris)
        <div class="menu-group">
          <div class="uk-grid">
          <input type="checkbox" name="menu[]" value="{{$baris->id_menu}}">
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
              </div>
            </div>
           
          </div>
        </div>
        <br>
        @endforeach
      </div>

    <!-- For Script -->
    <script src="{{ URL::asset('js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ URL::asset('js/uikit.min.js') }}"></script>
    <script src="{{ URL::asset('js/custom.js') }}"></script>
    </body>
</html>
