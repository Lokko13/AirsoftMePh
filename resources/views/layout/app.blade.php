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

        

      
        
    </head>
    <body>
    <!-- Styles -->
            <div id = "container">
            <div id = "headerbg">

                <img src="/headerbg.jpg" style="width:100%;height:79px;">
                </div>
           </div>
           <div id = "headerbg">
                <img src="/navbar.png" style="width:100%;height:50px;">
           </div>

           <div id="mainbg">
                <img src="/mbg.jpg" style="width:100%;height:1050px;">
           </div>

        @yield('body')


        @yield('footer-scripts')
    </body>
</html>
