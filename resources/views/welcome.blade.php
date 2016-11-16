@extends('layout.app')

@section('styles')
    <style type="text/css">
        html, body {
            background-color: #f4f4f4;
            background-size:100% 100vh;
            background-repeat:no-repeat;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            width: 100% ;
            height: 100vh;
            margin: 0;
        }

        .container .header {
            position: absolute; 
            top: 0; 
            left: 0; 
            margin: 0; 
            padding: 0; 
            width: 100%; 
            height: 70px; 
            background: rgba( 10, 110, 190, 0.8 ); 
            overflow: hidden;
        }


        .container .header .image {
            background: url("../images/icon64.png") no-repeat;
            float: left;
            display: inline-block;
            width: 100%;
            height:70px;
            border:2px solid green;
        }

        .container .header .text {
            float: left;
            display: inline-block;
            vertical-align: bottom;
            font-family: sans-serif;
            font-size: x-large;
            border:2px solid blue;
        }

        .background{

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
            .navbar {
                background: url('/headerbg.jpg');
                background-size:cover;
                border-radius: 0px !important;
                border: 1px black solid;
                width:100%;
                height:90px;
            }

            .nav li a{
                color: #bbb !important;
                font-weight: 700 !important;
            }

            .navbar-header .navbar-brand {
                padding-top: 10px;
                padding-bottom: 10px;
            }

            .background{
                background-image: url("mbg.jpg");
                background-color: #f4f4f4;
            }
    </style>
@endsection

@section('header')

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
                                <img src="title.png" style="height:50px;">
                            </a>
                        </div>
                        <div id="navbar" class="navbar-collapse collapse">
                            <ul class="nav navbar-nav">
                                <li><a style="font-size: 30px" href="#">Airsoft Store </a></li>
                                <li><img src="line.png" style="height:50px;"> </li>
                                <li><a style="font-size: 30px" href="#" >Game Sites</a></li>
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                <li><a style="font-size: 30px" href="#">Post</a></li>
                                <li><a style="font-size: 30px" href="#" >Login</a></li>
                                <li><a href="{{ route('home') }}"> <img src="search.png" style="height:50px;"> </a> </li>
                            </ul>
                        </div><!--/.nav-collapse -->
                    </div><!--/.container-fluid -->
                </nav>
    </div>

@endsection

@section('body')
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
            <div class="top-right links">
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Register</a>
            </div>
        @endif

        <div class="content">
            <div class="title m-b-md">
                Laravel
            </div>

            <div class="links">
                <a href="https://laravel.com/docs">Documentation</a>
                <a href="https://laracasts.com">Laracasts</a>
                <a href="https://laravel-news.com">News</a>
                <a href="https://forge.laravel.com">Forge</a>
                <a href="https://github.com/laravel/laravel">GitHub</a>
            </div>
        </div>
    </div>
@endsection