<!DOCTYPE html>
<html class="uk-height-1-1">
    <head>
        <title>User</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
           
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/uikit.min.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/custom.css')}}" />

    </head>
    <body class="uk-height-1-1">
    <nav class="uk-navbar navbar-trans">
        <ul class="uk-navbar-nav">
            <li><a href=""><i class="navbar-prev uk-icon-angle-left uk-icon-large"></i></a></li>
        </ul>
        <div class="uk-navbar-content uk-navbar-center uk-navbar-brand"><img src="{{ URL::asset('img/logo.png')}}" width="100" height="43" alt="Navbar Image"></div>
    </nav>

    <div class="uk-vertical-align" style="height: 20%;padding-top: 50px; padding-bottom: 20px;">
      <div class="spash-top-container uk-text-center uk-vertical-align-middle">
        <img style="box-shadow: 0px 6px 28px #000;" class="uk-border-circle" src="{{ URL::asset('img/profile.png')}}" alt="Profile">
      </div>
    </div>

    <p class="profile-nama uk-text-center" style="margin-top: 65px;">Irfan Gustian</p>







    <footer class="navbar-bawah">
      <div class="uk-grid">
        <div class="navbar-bawah-group uk-text-center uk-width-1-5">
          <a class="navbar-bawah-link" href=""><div><i class="uk-icon-cutlery navbar-bawah-icon navbar-bawah-booking-icon"></i></div>
          <div class="navbar-bawah-subtitle navbar-bawah-booking-subtitle">Booking</div></a>
        </div>
        <div class="navbar-bawah-group uk-text-center uk-width-1-5">
          <a class="navbar-bawah-link" href=""><div><i class="uk-icon-credit-card navbar-bawah-icon navbar-bawah-payment-icon"></i></div>
          <div class="navbar-bawah-subtitle">Payment</div></a>
        </div>
        <div class="navbar-bawah-group uk-text-center uk-width-1-5">
          <a class="navbar-bawah-link" href=""><div><i class="uk-icon-home navbar-bawah-icon"></i></div>
          <div class="navbar-bawah-subtitle">Home</div></a>
        </div>
        <div class="navbar-bawah-group uk-text-center uk-width-1-5 navbar-active">
          <a class="navbar-bawah-link" href=""><div><i class="uk-icon-user navbar-bawah-icon"></i></div>
          <div class="navbar-bawah-subtitle">User</div></a>
        </div>
        <div class="navbar-bawah-group uk-text-center uk-width-1-5">
          <a class="navbar-bawah-link" href=""><div><i class="uk-icon-book navbar-bawah-icon"></i></div>
          <div class="navbar-bawah-subtitle">History</div></a>
        </div>
      </div>
    </footer>

    <!-- For Script -->
   <script src="{{ URL::asset('js/jquery-3.2.1.min.js')}}"></script>
   <script src="{{ URL::asset('js/uikit.min.js')}}"></script>
   <script src="{{ URL::asset('js/custom.js')}}"></script>
    </body>
</html>
