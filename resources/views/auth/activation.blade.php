@extends('layout.app')

@section('styles')
    <style type="text/css">
        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
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

        #content-login{
            margin-top: 175px;
        }

        .btn-twitter {
            background-color: red;
            color: #fff;
        }

        .btn-facebook{
            background-color: green;
            color: #fff;
        }

        .has-error {
            border-color: red;
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

        <div id="content-login" class="row">
            <div class="col-md-4 col-md-offset-4 well">
                @if (session()->has('flash_message'))
                    <div class="alert alert-success">
                        {{ session()->get('flash_message') }}
                    </div>
                @endif

                @if (session()->has('error_message'))
                    <div class="alert alert-danger">
                        {{ session()->get('error_message') }}
                    </div>
                @endif
                
                <a href="{{ route('auth.activation.complete') . $data['param_string'] }}">{{ $data['anchor_text'] }}</a>
            </div>
        </div>
    </div>
@endsection