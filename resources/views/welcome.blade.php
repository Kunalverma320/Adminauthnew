<!DOCTYPE html>
<html>
  <head>
    <title>Test</title>
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
        @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
      </div>
    </div>
  </body>
</html>
