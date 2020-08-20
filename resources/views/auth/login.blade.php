<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Language</title>
    <!--google fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100&display=swap" rel="stylesheet">

    <!-- scrool reveal api-->
    <script src="https://unpkg.com/scrollreveal"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/LanguageStyle.css">

  </head>
  <body>



    <section id="showcase">
      <div class="container card" >
        <h1 class="intro">WELCOME TO AIMS SRI LANKA</h1>
        <h3 class="select">LOGIN TO PROCEED</h3>
        <div class="row">
          <div class="col-md-6 col-sm-6">
            <div class="showcase-left">
              <div class="showcase-left-left row">
                <div class="left-left col-md-3 col-sm-3">
                  <img class="emblem" src="assets/img/emblem.png" alt="">
                </div>
                <div class="left-center col-md-6 col-sm-6">
                  <h4>Department Of Agriculture</h4>
                  <h4>කෘෂිකර්ම දෙපාර්තමේන්තුව</h4>
                  <h4>வேளாண்மைத் துறை</h4>
                </div>
                <div class="left-right col-md-3 col-sm-3">
                    <img class="emblem" src="assets/img/DOA emblem.png" alt="">
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-sm-6"> 
            <div class="showcase-right">
                <form method="POST" action="{{ route('login') }}" class="form">
                            @csrf

                            <div class="form-group row">
                                <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>

                                <div class="col-md-6">
                                    <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                                    @error('username')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mx-auto">
                                <div class="col">
                                    <button type="submit" class="btn btn-outline-success">
                                        {{ __('Login') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </form>
          </div>
        </div>

      </div>
    </section>
    <!-- bootstrap CDN and jQuery CDN-->
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script type="text/javascript">

      ScrollReveal().reveal('.container', {
        duration: 2000,
        origin: 'top'
      });

      ScrollReveal().reveal('.intro', {
        duration: 2000,
        origin: 'top',
        distance: '300px'
      });

      ScrollReveal().reveal('.emblem', {
        duration: 3000,
        delay: 1000,
        origin: 'right',
        distance: '300px'
      });

      ScrollReveal().reveal('.left-center', {
        duration: 3000,
        delay: 1000,
        origin: 'right',
        distance: '300px'
      });

      ScrollReveal().reveal('.form', {
        duration: 3000,
        origin: 'bottom',
        delay: 2000,
        distance: '300px'
      });

      ScrollReveal().reveal('.select', {
        duration: 2000,
        origin: 'bottom',
        delay: 4000
      });

    </script>
  </body>
</html>
