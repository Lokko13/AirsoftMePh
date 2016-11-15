@extends('layout.app')

@section('styles')
    <style type="text/css">
        html, body {
            background-color: #f4f4f4;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
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
            width: 65px;
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
    </style>
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