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
                <form class="form-vertical" action="{{ route('auth.register') }}" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <label class="col-md-12 control-label">Welcome to AirsoftMe.ph</label>

                    <div class="form-group col-md-12 {{ $errors->has('username') ? ' has-error' : '' }}">
                        <input type="text" name="username" class="form-control" placeholder="Username" />
                    </div>
                    @if ($errors->has('username'))
                        <span class="help-block">
                            <strong>{{ $errors->first('username') }}</strong>
                        </span>
                    @endif

                    <div class="form-group col-md-12 {{ $errors->has('email') ? ' has-error' : '' }}">
                        <input type="text" name="email" class="form-control" placeholder="Email" />
                    </div>
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif

                    <div class="form-group col-md-12 {{ $errors->has('password') ? ' has-error' : '' }}">
                        <input type="password" name="password" class="form-control" placeholder="Password" />
                    </div>
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif

                    <div class="form-group col-md-12 {{ $errors->has('password2') ? ' has-error' : '' }}">
                        <input type="password" name="password2" class="form-control" placeholder="Confirm Password" />
                    </div>
                    @if ($errors->has('password2'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password2') }}</strong>
                        </span>
                    @endif

                    <div class="form-group col-md-12 {{ $errors->has('first_name') ? ' has-error' : '' }}">
                        <input type="text" name="first_name" class="form-control" placeholder="First Name" />
                    </div>
                    @if ($errors->has('first_name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('first_name') }}</strong>
                        </span>
                    @endif

                    <div class="form-group col-md-12 {{ $errors->has('last_name') ? ' has-error' : '' }}">
                        <input type="text" name="last_name" class="form-control" placeholder="Last Name" />
                    </div>
                    @if ($errors->has('last_name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('last_name') }}</strong>
                        </span>
                    @endif
                    
                    <div class="form-group col-md-12">
                        <button class="btn btn-block btn-primary">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection