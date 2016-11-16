<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', 'AirsoftMe')</title>
        <link rel='shortcut icon' href='/favicon.png' type='image/x-icon'/ >

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

        <!-- Scripts -->
        <script type="text/javascript" src="{{ elixir('js/app.js') }} "></script>
        <script type="text/javascript" src="{{ elixir('js/all.js') }}"></script>

        <!-- Styles -->
        <link href="{{ elixir('css/app.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ elixir('css/all.css') }}" rel="stylesheet" type="text/css">
        @yield('styles')

        {{-- Temp css --}}
        <style type="text/css">
            .navbar {
                background: url('/headerbg.jpg');
                border-radius: 0px !important;
                border: 1px black solid;
            }

            .nav li a{
                color: #bbb !important;
                font-weight: 700 !important;
            }

            .navbar-header .navbar-brand {
                padding-top: 10px;
                padding-bottom: 10px;
            }
        </style>
    </head>
    <body>
        <div id = "container">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="{{ route('home') }}">
                            <img src="title.png" style="height:30px;">
                        </a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li><a href="#">Airsoft Store</a></li>
                            <li><a href="#">Game Sites</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#">Post</a></li>
                            <li><a href="#">Login</a></li>
                            <li><a href="#">Search</a></li>
                        </ul>
                    </div><!--/.nav-collapse -->
                </div><!--/.container-fluid -->
            </nav>
       </div>

        @yield('body')


        @yield('footer-scripts')
    </body>
</html>
