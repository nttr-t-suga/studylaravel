<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Hello!</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #dddddd;
                color: #333333;
                font-family: 'HG行書体', fantasy;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;     
                box-shadow: 5px 5px 5px 5px rgba(0, 0, 0, 0.1);

            }

            .links > a {
                color: #ffff00;
                padding: 0 25px;
                font-size: 22px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Hello!!
                </div>

                <div class="links">
                    <a href="http://localhost/laravel/post">POST&GET</a>
                    <a href="https://readouble.com/laravel/5.5/ja/controllers.html">コントローラ</a>
                    <a href="https://readouble.com/laravel/5.5/ja/structure.html">ディレクトリ構成</a>
                    <a href="https://readouble.com/laravel/5.5/ja/middleware.html">ミドルウェア</a>
                    <a href="https://www.php.net/manual/ja/intro-whatis.php">PHPとは</a>
                </div>
            </div>
        </div>
    </body>
</html>
