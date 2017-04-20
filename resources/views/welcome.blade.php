<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Kanpani Girls Catalog</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #ffd;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
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

            .content {
                text-align: center;
                padding-top: 100px;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .nav-bar {
                background-color: #333333;
                height: 48px;
                width: 100%;
                position: absolute;
                top: 0px;
            }

            .nav-bar img {
                height: 48px;
            }

            .main-table {
                background-color: #ddddff;
                width: 800px;
                border: 1px solid black;
                border-radius: 10px;
                margin-bottom: 10px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="nav-bar links">
                <img src="{{URL::asset('logo.png')}}">

                @if (Route::has('login'))
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                @endif
            </div>

            <div class="content">
                <table class="main-table">
                    <thead>
                        <tr><th>CATALOGS</th></tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>test</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </body>
</html>
