<!DOCTYPE html>
<html class="uk-height-1-1">
    <head>
        <title>Login</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/uikit.min.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/custom.css')}}" />

    </head>
    <body class="uk-height-1-1">

    <div class="uk-vertical-align" style="height: 50%;">
      <div class="spash-top-container uk-text-center uk-vertical-align-middle">
        <img class="splash-top-img uk-responsive-height uk-responsive-width" src="{{ URL::asset('img/logo.png')}}" alt="Logo">
      </div>
    </div>

	<div class="uk-container-center">
      <div class="uk-grid konfirmasi-pelurusan">
        <div class="uk-width-medium-2-3 uk-width-small-3-4 uk-container-center uk-text-left">
          <div class="uk-grid">
            <div class="uk-width-1-1">

				<form method="POST" action="{{ route('login') }}" class="fitur-search uk-form uk-search uk-text-center">
        {{ csrf_field() }}
        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
					<input class="login-input uk-width-1-1 uk-form-large" placeholder="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
          @if ($errors->has('email'))
             <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
             </span>
          @endif
          <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
          <input type="password" class="login-input uk-width-1-1 uk-form-large" placeholder="Password" name="password" required>
          @if ($errors->has('password'))
               <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
          @endif
          <div class="checkbox">
               <label style="color:white;">
                   <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
              </label>
          </div>
          <br>
          <button type="submit" class="uk-button-large uk-button uk-button-primary uk-width-medium-1-4 uk-width-small-1-1" type="submit" name="submit" value="submit" type="button">Login</button>
				</form>

        <a href="{{ route('register') }}" type="submit" class="uk-button-large uk-button uk-button-default uk-width-medium-1-4 uk-width-small-1-1" type="submit" name="submit" value="submit" type="button">register</a>
      </div>
          </div>
        </div>
      </div>
	</div>



    <!-- For Script -->
    <script src="{{ URL::asset('js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{ URL::asset('js/uikit.min.js')}}"></script>
    <script src="{{ URL::asset('js/custom.js')}}"></script>
    </body>
</html>
