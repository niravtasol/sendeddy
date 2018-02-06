<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@if(Route::is('login')) @yield('title', 'The GEF Small Grants Programme - Grant Management System and Intranet') @else  SGP - @yield('title', 'Grant Management System and Intranet') @endif</title>
    <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('css/custom.css')}}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-select.min.css')}}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!--[if IE 8]>
    <link href="css/ie8.css" rel="stylesheet">
    <![endif]-->

</head>
<body>
@include('layouts/outer_header')
<section id="main">
    <div class="container">
        @yield('content')
    </div>
</section>
@include('layouts/footer')
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{ asset('js/jquery-2.2.0.min.js') }}"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/bootstrap-select.min.js') }}"></script>

<script type="text/javascript">
    jQuery(window).resize(function(event) {
        screenHeight();
    });
    jQuery(document).ready(function($) {
        screenHeight();
    });
    function screenHeight(){
        var containerHeight = jQuery(window).innerHeight()-jQuery('header').outerHeight()-jQuery('footer').outerHeight() ;
        //console.log(containerHeight);
        jQuery("section#main").css('min-height', containerHeight+"px");
    }
</script>
</body>
</html>
