<!DOCTYPE html>
<html lang="{{\Session::get('locale')}}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@if(Route::is('login')) @yield('title', 'The GEF Small Grants Programme - Grant Management System and Intranet') @else  SGP - @yield('title', 'Grant Management System and Intranet') @endif</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/AdminLTE.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-formhelpers.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-datepicker.css') }}" rel="stylesheet">
    <link href="{{ asset('css/dataTables.bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/slimmenu.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-select.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jAlert.css') }}" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{ asset('js/jquery-2.2.0.min.js') }}"></script>
    @yield('style')
</head>
<body>
@include('layouts/inner_header')
<section class="main-container">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="main-inner-wrp">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
</section>
@include('layouts/footer')

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/bootstrap-formhelpers.min.js') }}"></script>
<?php if( !\Request::is("eventcalender") && !\Request::is("eventcalender/*")) { ?>
<script src="{{ asset('js/bootstrap-datepicker.min.js') }}"></script>
<?php }?>
<script src="{{ asset('js/jquery.dataTables.js') }}"></script>
<script src="{{ asset('js/dataTables.bootstrap.js') }}"></script>
<script src="{{ asset('js/jquery.slimmenu.min.js') }}"></script>
<script src="{{ asset('js/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('js/jAlert.min.js') }}"></script>
<script src="{{ asset('js/jAlert-functions.min.js') }}"></script>
<script type="text/javascript"> /*equal height of the chart*/
    jQuery.fn.equalHeights = function(){
        var max_height = 0;
        jQuery(this).each(function(){
            max_height = Math.max(jQuery(this).height(), max_height);
        });
        jQuery(this).each(function(){
            jQuery(this).height(max_height);
        });
    };

</script>
<script type="text/javascript">
    jQuery(document).ready(function() {
        jQuery('.dashboard-wrp .panel-body').equalHeights(); /*equal height of the chart*/
        jQuery('.details-wrp .equal-height').equalHeights(); /*equal height of the chart*/
    });
    <?php if( !\Request::is("eventcalender") && !\Request::is("eventcalender/*")) { ?>
        jQuery('.dateselect .input-daterange').datepicker({
    });
    <?php }?>
        jQuery('.slimmenu').slimmenu(
    {
        resizeWidth: '800',
        collapserTitle: 'Main Menu',
        animSpeed:'medium',
        indentChildren: true,
        childrenIndenter: '&raquo;'
    });

    jQuery(window).resize(function(event) {
        screenHeight();
    });
    jQuery(document).ready(function($) {
        screenHeight();
        // Initiate Jalerts
        /*alert('For your info...', '...you rock!');
        successAlert('Success!', 'Saved your profile.');
        errorAlert('Error!', 'Could not save your profile.');
        infoAlert('Info', 'I like your shirt.');
        warningAlert('Warning', 'Your shirt is not yellow!');
        blackAlert('Warning', 'It\'s still got that new car smell.');*/
        /*$.jAlert({
            'title': 'Set It',
            'content': 'Set',
            'theme': 'green',
            'size': 'md',
            'showAnimation': 'fadeInUp',
            'hideAnimation': 'fadeOutDown'
        });*/
    });

    function screenHeight(){
        var containerHeight = jQuery(window).innerHeight()-jQuery('header').outerHeight()-jQuery('footer').outerHeight() ;
        jQuery("section.main-container").css('min-height', containerHeight+"px");
    }
</script>
@yield('script')
</body>
</html>
