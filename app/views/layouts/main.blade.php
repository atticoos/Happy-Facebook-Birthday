<!doctype html>
<html ng-app="facebookbirthday">
<head>
    <meta charset="UTF-8">
    <title>BodiMojo</title>
    <script>
        //document.write('<base href="' + document.location + '" />');
    </script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

    <link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.css" />
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.11/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.11/angular-route.js"></script>


    {{ HTML::script('packages/angular-ui-router/release/angular-ui-router.min.js') }}
    {{ HTML::script('js/ng/facebookbirthday.js') }}
    {{ HTML::script('js/ng/controllers/mainController.js') }}
    {{ HTML::script('js/ng/services/facebook.js') }}

    {{ HTML::style('css/bootstrap.min.css') }}

    {{ HTML::style('css/main.css') }}
</head>
<body>
<div id="fb-root"></div>
<div id="right-side" class="">
    @yield('content')
</div>

</body>
</html>