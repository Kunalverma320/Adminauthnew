<!DOCTYPE html>
<html>
  <head>
    <title>Test</title>
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <style>
      * {
        box-sizing: border-box;
      }
      body {
        margin: 0;
      }
      .nav {
        overflow: hidden;
        background-color: #939596;
      }
      .nav a {
        float: left;
        display: block;
        color: #ffffff;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        font-size: 18px;
      }
      .nav a:hover {
        background-color: #eeeeee;
        color: #000000;
      }
      .nav a.active {
        background-color: #0e002b;
        color: #ffffff;
      }
      .nav .login-container {
        float: right;
      }
      .nav input[type=text],
      .nav input[type=password] {
        padding: 6px;
        margin-top: 8px;
        font-size: 17px;
        border: none;
        width: 120px;
      }
      .nav .login-container button {
        float: right;
        padding: 6px 10px;
        margin-top: 8px;
        margin-right: 16px;
        background-color: #1c87c9;
        color: white;
        font-size: 17px;
        border: none;
        cursor: pointer;
      }
      .nav .login-container button:hover {
        background-color: #0e002b;
      }
      @media screen and (max-width: 600px) {
        .nav .login-container {
          float: none;
        }
        .nav a,
        .topnav input[type=text],
        .nav .login-container button {
          float: none;
          display: block;
          text-align: left;
          width: 100%;
          margin: 0;
          padding: 14px;
        }
        .nav input[type=text] {
          border: 1px solid #ccc;
        }
      }
    </style>
  </head>
  <body>
    <div class="nav">
      <a class="active" href="#home">Home</a>
      <a href="#about">About</a>
      <a href="#contact">Tutorials</a>
      <div class="login-container">
        <ul class="navbar-nav ms-auto">
            <!-- Authentication Links -->
            @guest
                @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                @endif

                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </ul>
      </div>
    </div>

  </body>
</html>



