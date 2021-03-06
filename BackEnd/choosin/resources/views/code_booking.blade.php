<!DOCTYPE html>
<html class="uk-height-1-1">
    <head>
        <title>Code Booking</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/uikit.min.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/custom.css')}}" />

    </head>
    <body class="uk-height-1-1" style="padding-bottom: 40px;">

    <div class="uk-vertical-align" style="height: 35%;">
      <div class="spash-top-container uk-text-center uk-vertical-align-middle">
        <img class="splash-top-img uk-responsive-height uk-responsive-width" src="{{ URL::asset('img/logo.png')}}" alt="Logo">
      </div>
    </div>


    <div class="uk-container-center konfirmasi-container">
      <div class="uk-grid konfirmasi-pelurusan">
        <div class="uk-width-medium-2-3 uk-width-small-3-4 uk-container-center uk-text-left">
          <div class="uk-grid">
            <div class="uk-width-1-1">
			  <form action="" method="POST" class="fitur-search uk-form uk-search uk-text-center">
				<p class="konfirmasi-title">Code Booking Anda</p>
				<p class="konfirmasi-code">58EZAF9897</p>
				<p class="go-detail"><a href="">Lihat Detail</a></p>


				<button class="code-booking-button uk-button-large uk-button uk-button-danger uk-width-medium-1-2 uk-width-small-1-1 uk-icon-credit-card uk-icon-small" type="submit" name="submit" value="submit" type="button"> Lanjut Pembayaran</button>
			  </form>
            </div>
          </div>
        </div>
      </div>


    </div>


    <!-- For Script -->
    <script src="{ URL::asset('js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{ URL::asset('js/uikit.min.js')}}"></script>
    <script src="{{ URL::asset('js/custom.js')}}"></script>
    </body>
</html>
