@extends('head.headuserl')

@section('content')

<body class="uk-height-1-1" ng-app="search" ng-controller="searchCtrl">

    <div class="uk-vertical-align" style="height: 50%;">
      <div class="spash-top-container uk-text-center uk-vertical-align-middle">
        <img class="splash-img uk-responsive-height uk-responsive-width" src="{{ URL::asset('img/logo.png')}}" alt="Logo">
      </div>
    </div>
    @verbatim
    <form action="" method="POST" class="fitur-search uk-form uk-search uk-text-center" data-uk-search>
        <input class="input-search uk-search-field uk-width-1-1" type="search" placeholder="Ketik Keyword Tempat Makan" ng-model="test">
    </form>

    <div class="uk-container-center hasil-cari-container" ng-repeat="baris in tempatmakan | filter:test" ng-show="test">
        <div class="uk-grid hasil-cari-resto-group">
         <a href="http://localhost:8000/detailtempat/{{baris.id_tempatmakan}}">
          <div  class="uk-width-medium-2-3 uk-width-small-3-4 uk-container-center uk-text-left hasil-resto-content">
            <div class="uk-grid">
              <div class="uk-width-1-1">
                <div class="uk-grid">
                  <div class="uk-width-3-6">
                    <img class="" src="http://localhost:8000/storage/tempatmakan/{{baris.foto}}" alt="Gambar Resto">
                  </div>
                  <div class="uk-width-3-6 hasil-cari-detail">
                    <div class="uk-width-1-1">
                      <div class="uk-grid">
                        <div class="uk-width-3-4">
                          <h2 class="hasil-cari-nama-resto">{{baris.nama_tempatmakan}}</h2>
                        </div>
                        <div class="uk-width-1-4 uk-text-center" style="padding-left: 0px;">
                        </div>
                      </div>
                      <p class="hasil-cari-alamat">{{baris.alamat}}</p>
                      <br>
                      <span class="hasil-cari-rating">
                          <i class="uk-icon-star icon-rating"></i>
                          <i class="uk-icon-star icon-rating"></i>
                          <i class="uk-icon-star icon-rating"></i>
                          <i class="uk-icon-star icon-rating"></i>
                          <i class="uk-icon-star icon-rating"></i>
                      </span>
                      <!--<p class="hasil-cari-avg-title">Rata-rata Budget</p>
                      <p class="hasil-cari-harga-value">RP 50,000</p>-->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </a>
          </div>
        </div>
        @endverbatim

    <!-- For Script -->
    <script src="{{ URL::asset('js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{ URL::asset('js/uikit.min.js')}}"></script>
    <script src="{{ URL::asset('js/custom.js')}}"></script>
    <script src="{{ URL::asset('js/search.js')}}"></script>
    </body>
    
@endsection