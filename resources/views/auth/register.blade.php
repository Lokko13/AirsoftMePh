@extends('layout.app')

@section('styles')
    <style type="text/css">
        #content-login{
            margin-top: 175px;
        }
    </style>
@endsection

@section('body')
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
            <div class="top-right links">
                <a href="{{ url('/login') }}">Login</a>
                <a href="{{ url('/register') }}">Register</a>
            </div>
        @endif

        <div id="content-login" class="row">
            <div class="col-md-4 col-md-offset-4 well">
                <form class="form-vertical" action="{{ url('/auth/register') }}" method="post">
                    <label class="col-md-12 control-label">Welcome to AirsoftMe.ph</label>

                    <div class="form-group col-md-12">
                        <input type="text" name="username" class="form-control" placeholder="Username" />
                    </div>
                    <div class="form-group col-md-12">
                        <input type="text" name="email" class="form-control" placeholder="Email" />
                    </div>
                    <div class="form-group col-md-12">
                        <input type="password" name="password" class="form-control" placeholder="Password" />
                    </div>
                    <div class="form-group col-md-12">
                        <input type="password" name="password2" class="form-control" placeholder="Confirm Password" />
                    </div>
                    <div class="form-group col-md-12">
                        <input type="text" name="first_name" class="form-control" placeholder="First Name" />
                    </div>
                    <div class="form-group col-md-12">
                        <input type="text" name="last_name" class="form-control" placeholder="Last Name" />
                    </div>
                    <div class="form-group col-md-12">
                        <button class="btn btn-block btn-primary">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection