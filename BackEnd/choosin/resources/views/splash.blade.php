@extends('head.headuserl')

@section('content')
    <body class="uk-height-1-1">
    
    <div class="uk-vertical-align" style="height: 100%;">
      <div class="spash-top-container uk-text-center uk-vertical-align-middle">
        <img class="splash-img uk-responsive-height uk-responsive-width" src="{{ URL::asset('img/logo.png') }}" alt="Logo">
      </div>
    </div>

    <!-- For Script -->
    <script src="{{ URL::asset('js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ URL::asset('js/uikit.min.js') }}"></script>
    <script src="{{ URL::asset('js/custom.js') }}"></script>
    
        <script>
         window.setTimeout( function(){
                 window.location = "/home";
             }, 3000 );   
        </script>
    </body>
@endsection
