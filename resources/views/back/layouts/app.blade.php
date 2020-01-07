<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Etiquetage Energétique</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('back/assets/img/logo.png') }}"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="{{ asset("back/assets/css/loader.css") }}" rel="stylesheet" type="text/css" />
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
    <link href="{{ asset("back/bootstrap/css/bootstrap.min.css") }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("back/assets/css/plugins.css") }}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link href="{{ asset("back/assets/css/support-chat.css") }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("back/plugins/maps/vector/jvector/jquery-jvectormap-2.0.3.css") }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("back/plugins/charts/chartist/chartist.css") }}" rel="stylesheet" type="text/css">
    <link href="{{ asset("back/assets/css/default-dashboard/style.css") }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("back/plugins/notification/toastr/toastr.min.css") }}" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->

    @yield('stylesheets')

</head>

<body class="default-sidebar" >

    @include('back.layouts.header')

    <div class="main-container" id="container">

    <div class="overlay "></div>
    <div class="cs-overlay"></div>

        @include('back.layouts.menu')

    <!--  BEGIN CONTENT PART  -->
    <div id="content" class="main-content">
        @yield('body')
    </div>
    <!--  END CONTENT PART  -->

    </div>

   @include('back.layouts.footer')



<!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
<script src="{{ asset("back/assets/js/libs/jquery-3.1.1.min.js") }}"></script>
<script src="{{ asset("back/assets/js/loader.js") }}"></script>
<script src="{{ asset("back/bootstrap/js/popper.min.js") }}"></script>
<script src="{{ asset("back/bootstrap/js/bootstrap.min.js") }}"></script>
<script src="{{ asset("back/plugins/scrollbar/jquery.mCustomScrollbar.concat.min.js") }}"></script>
<script src="{{ asset("back/assets/js/app.js") }}"></script>
<script>
    $(document).ready(function() {
        App.init();
    });
</script>
<script src="{{ asset("back/assets/js/custom.js") }}"></script>
<!-- END GLOBAL MANDATORY SCRIPTS -->

<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
<script src="{{ asset("back/plugins/charts/chartist/chartist.js") }}"></script>
<script src="{{ asset("back/plugins/maps/vector/jvector/jquery-jvectormap-2.0.3.min.js") }}"></script>
<script src="{{ asset("back/plugins/maps/vector/jvector/worldmap_script/jquery-jvectormap-world-mill-en.js") }}"></script>
<script src="{{ asset("back/plugins/calendar/pignose/moment.latest.min.js") }}"></script>
<script src="{{ asset("back/plugins/calendar/pignose/pignose.calendar.js") }}"></script>
<script src="{{ asset("back/plugins/progressbar/progressbar.min.js") }}"></script>
<script src="{{ asset("back/assets/js/default-dashboard/default-custom.js") }}"></script>
<script src="{{ asset("back/assets/js/support-chat.js") }}"></script>

<script src="{{ asset("back/plugins/notification/toastr/toastr.min.js") }}"></script>
<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->

@yield('javascripts')
</body>

</html>
