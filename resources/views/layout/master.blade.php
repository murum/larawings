<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Johnells integrations hub</title>

    <link href="{{ elixir('css/app.css') }}" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
@include('layout.partials.nav')

<div class="container-fluid">
    @yield('content')
</div>

<footer class="footer navbar-fixed-bottom">
    <div class="container">
        <p class="text-muted">Copyright &copy;
            2015 {!! (Carbon\Carbon::now()->year == "2015") ? "" : "- ".Carbon\Carbon::now()->year !!} </p>
    </div>
</footer>

<!-- Scripts -->
<script src="{{ elixir('js/vendor.js') }}"></script>
<script src="{{ elixir('js/app.js') }}"></script>
</body>
</html>