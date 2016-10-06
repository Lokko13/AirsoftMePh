<!DOCTYPE HTML>
<html>
    <head>
        <title>Demo Calendar</title>
        <link rel="stylesheet" href="assets/css/fullcalendar.min.css">
        <link rel="stylesheet" href="assets/css/fullcalendar.print.css">
        <link rel="stylesheet" href="css/app.css">
    </head>
    <body>
        <div class="container">
            <nav class="navbar-default"></nav>
        </div>

        @yield('calendar')

        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/jquery-ui.min.js"></script>
        <script src="assets/js/moment.min.js"></script>
        <script src="assets/js/fullcalendar.min.js"></script>
        <!--<script src="assets/js/app.js"></script>-->

        <script>
            $("#calendar").fullCalendar({
                events: [
                    {
                        title: 'sample event',
                        start:'2016-10-06'
                    },
                    {
                        title:'event #2',
                        start:'2016-10-06',
                        end: '2016-10-09'
                    }
                ]
            });
        </script>
    </body>
</html>