<!DOCTYPE html>
<html>
    <head>
        <title>Detail Resto</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/uikit.min.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/custom.css')}}" />

    </head>
    <body style="padding-bottom: 30px;">
@foreach($data as $baris)
    <nav class="uk-navbar navbar-trans">
        <ul class="uk-navbar-nav">
            <li><a href="http://localhost"><i class="navbar-prev uk-icon-angle-left uk-icon-large"></i></a></li>
        </ul>
        <div class="uk-navbar-content uk-navbar-center uk-navbar-brand"><img src="{{ URL::asset('img/logo.png')}}" width="100" height="43" alt="Navbar Image"></div>
    </nav>

    <div class="gambar-resto uk-width-1-1">
      <div>
        <img src="http://localhost/storage/tempatmakan/{{$baris->foto_tempat}}" alt="Foto Resto">
      </div>
    </div>

    <div class="alamat-group">
      <div class="uk-grid">
        <div class="uk-width-3-4">
          <p class="detail-resto-nama">{{$baris->nama_tempatmakan}}</p>
          <p class="alamat-resto">{{$baris->alamat}}</p>
       
        </div>
      </div>
    </div>

    <div class="uk-container rating-group">
      <div class="uk-grid">
        <div class="uk-width-2-6">
          <a href=""><img class="rating-group-icon" src="{{ URL::asset('img/icon/icon_marker.png')}}" alt="Icon"></a>
        </div>
      </div>
    </div>

    <div class="uk-container detail-button-group uk-text-center">

          <a href="/menumakan/{{$baris->id_tempatmakan}}/{{$baris->foto_tempat}}/{{$baris->nama_tempatmakan}}"><div class="detail-button uk-overlay uk-width-1-1 uk-text-left">
            <img class="" src="{{ URL::asset('img/menu_bg.jpg')}}" alt="Menu">
            <figcaption class="detail-menu-flex uk-overlay-panel uk-flex uk-flex-left uk-flex-middle">
              <span>Menu</span>
            </figcaption>
          </div></a>

          <a href="/booking/buat/{{$baris->id_tempatmakan}}/{{$baris->foto_tempat}}/{{$baris->nama_tempatmakan}}"><div class="detail-button uk-overlay uk-width-1-1 uk-text-left">
            <img class="" src="{{ URL::asset('img/booking_bg.jpg')}}" alt="Menu">
            <figcaption class="detail-menu-flex uk-overlay-panel uk-flex uk-flex-left uk-flex-middle">
              <span class="booking-button-text">Booking</span>
            </figcaption>
          </div></a>
          @endforeach

    </div>


    <!-- For Script -->
    <script src="{{ URL::asset('js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{ URL::asset('js/uikit.min.js')}}"></script>
    <script src="{{ URL::asset('js/custom.js')}}"></script>
    </body>
</html>
