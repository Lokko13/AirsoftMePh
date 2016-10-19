@extends('layout.app')

@section('styles')
    <style type="text/css">
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
                <a href="{{ url('/login') }}">Login</a>
                <a href="{{ url('/register') }}">Register</a>
            </div>
        @endif

        <div id="content-login" class="row">
            <div class="col-md-4 col-md-offset-4 well">
                <form class="form-vertical" action="{{ route('auth.login') }}" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <label class="col-md-12 control-label">Welcome to AirsoftMe.ph</label>

                    <div class="form-group col-md-12 {{ $errors->has('username') ? ' has-error' : '' }}">
                        <input type="text" name="username" class="form-control" placeholder="Username" />
                    </div>
                    <div class="form-group col-md-12 {{ $errors->has('password') ? ' has-error' : '' }}">
                        <input type="password" name="password" class="form-control" placeholder="Password" />
                    </div>

                    @if ($errors->has('email'))
                        <div class="form-group col-md-12">
                            <div class="login-help-block">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li><strong>{{ $error }}</strong></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    @endif

                    <div class="form-group col-md-12">
                        <button class="btn btn-block btn-primary">Submit</button>
                    </div>
                    <div class="form-group col-md-12">
                        <a class="btn btn-block btn-info" href="{{ route('register') }}">Register</a>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12">Login via</span>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6">
                            <a class="btn btn-block btn-facebook" href="#">Facebook</a>
                        </div>
                        <div class="col-md-6">
                            <a class="btn btn-block btn-twitter" href="#">Twitter</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection