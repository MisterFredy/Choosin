<!DOCTYPE html>
<html class="uk-height-1-1">
    <head>
        <title>Register</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/uikit.min.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/custom.css')}}" />

    </head>
    <body class="uk-height-1-1">

    <div class="uk-vertical-align" style="height: 40%;">
      <div class="spash-top-container uk-text-center uk-vertical-align-middle">
        <img class="splash-top-img uk-responsive-height uk-responsive-width" src="{{ URL::asset('/img/logo.png')}}" alt="Logo">
      </div>
    </div>

	<div class="uk-container-center">
      <div class="uk-grid konfirmasi-pelurusan">
        <div class="uk-width-1-1 uk-container-center uk-text-left">
          <div class="uk-grid">
            <div class="uk-width-1-1">
				<form method="POST" action="{{ route('register') }}" class="fitur-search uk-form uk-search uk-text-center">
            {{ csrf_field() }}
          <input type="text" class="form-input-choosin uk-width-1-1" placeholder="name Lengkap"  name="name" value="{{ old('name') }}" required autofocus>
          @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
          <input type="number" class="form-input-choosin uk-width-1-1" placeholder="No HP"  name="no_hp" required>
          <div class="radio-register">

            <label class="uk-float-left">Jenis Kelamin</label>
            <label><input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-Laki</label>
            <label class="uk-float-right"><input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan</label>
          </div>

					<input type="email" class="form-input-choosin uk-width-1-1" name="email" value="{{ old('email') }}" placeholder="Email" required>
					@if ($errors->has('email'))
               <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
               </span>
          @endif
          <input type="password" class="form-input-choosin uk-width-1-1" name="password" placeholder="Password" required>
					@if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
          <submit class="form-button-choosin uk-button uk-button-primary uk-width-medium-1-4 uk-width-small-1-1" type="submit" name="submit" value="submit" type="button">Register</submit>
				</form>
			</div>
          </div>
        </div>
      </div>
	</div>



    <!-- For Script -->
    <script src="{{ URL::asset('/js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{ URL::asset('/js/uikit.min.js')}}"></script>
    <script src="{{ URL::asset('/js/custom.js')}}"></script>
    </body>
</html>
