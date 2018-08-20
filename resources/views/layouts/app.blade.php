<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Advanced Blog</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">

      <nav class="navbar is-dark" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
          <a class="navbar-item" href="{{ route('home') }}">
            <img src="https://bulma.io/images/bulma-logo.png" alt="Logo" width="112" height="28">
          </a>
        </div>

        <div class="navbar-menu">
          <div class="navbar-start">
            <a class="navbar-item" href="#"> Learn </a>
            <a class="navbar-item" href="#"> Discuss </a>
            <a class="navbar-item" href="#"> Share </a>
          </div>
          <div class="navbar-end">
            @if (Auth::guest())
              <a href="{{ route('login') }}" class="navbar-item"> Login </a>
              <a href="{{ route('register') }}" class="navbar-item"> Signup </a>
            @else
              <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link"> Hey Khoa </a>

                <div class="navbar-dropdown is-right">
                  <a class="navbar-item"> Profile </a>
                  <a class="navbar-item"> Notifications </a>
                  <a class="navbar-item"> Settings </a>
                  <hr class="navbar-divider">
                  <a class="navbar-item"> Logout </a>
                </div>
              </div>
            @endif
        </div>
    </nav>

      @yield('content')

    </div>
</body>
</html>
