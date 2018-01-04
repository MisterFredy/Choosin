<!DOCTYPE html>
<html class="uk-height-1-1">
    <head>
        <title>Booking</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/uikit.min.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/custom.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/autocomplete.min.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/datepicker.min.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/datepicker.gradient.min.css')}}" />

    </head>
    <body class="uk-height-1-1">
  
    <nav class="uk-navbar navbar-trans">
        <ul class="uk-navbar-nav">
            <li><a href=""><i class="navbar-prev uk-icon-angle-left uk-icon-large"></i></a></li>
        </ul>
        <div class="uk-navbar-content uk-navbar-center uk-navbar-brand"><img src="{{ URL::asset('img/logo.png')}}" width="100" height="43" alt="Navbar Image"></div>
    </nav>

    <div class="gambar-resto uk-width-1-1">
      <div>
        <img src="http://localhost/storage/tempatmakan/{{$fotos}}" alt="Foto Resto">
      </div>
    </div>

    <p class="nama-resto uk-text-center">{{$namas}}</p>

    <form action="/booking/buatbook" method="POST" class="uk-form uk-text-center booking-form">
      {{ csrf_field() }}
      <input type="hidden" name="idtempatmakan" value="{{$ids}}">
      <input type="hidden" name="iduser" value="{{ Auth::user()->id }}">

      <div class="uk-form-row booking-group">
          <p class="booking-label uk-text-center uk-text-large">Atas Nama</p>
          <input class="booking-input uk-width-1-1 uk-form-large uk-form-width-large" name="nama" type="text" placeholder="">
        </div>
        <div class="uk-form-row booking-group">
          <p class="booking-label uk-text-center uk-text-large">Tanggal</p>
          <input class="booking-input uk-width-1-1 uk-form-large uk-form-width-large" name="tanggal" type="search" placeholder="" data-uk-datepicker="{format:'DD.MM.YYYY'}">
        </div>
        <div class="uk-form-row booking-group">
          <p class="booking-label uk-text-center uk-text-large">Waktu</p>
          <input class="booking-input uk-width-1-1 uk-form-large uk-form-width-large" name="waktu" type="search" placeholder="" data-uk-timepicker="{format:'24h'}">
        </div>
        <input class="booking-button uk-button uk-button-success" name="submit" type="submit" value="Booking"></input>
    </form>

    <!-- For Script -->
    <script src="{{ URL::asset('js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{ URL::asset('js/uikit.min.js')}}"></script>
    <script src="{{ URL::asset('js/autocomplete.min.js')}}"></script>
    <script src="{{ URL::asset('js/datepicker.min.js')}}"></script>
    <script src="{{ URL::asset('js/timepicker.min.js')}}"></script>
    <script src="{{ URL::asset('js/custom.js')}}"></script>
    
  </body>
    
</html>
