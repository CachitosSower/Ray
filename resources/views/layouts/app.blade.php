<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('titulo')</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link   rel="stylesheet"
            href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
            integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
            crossorigin="anonymous">

    <!-- Optional theme -->
    <link   rel="stylesheet"
            href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
            integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp"
            crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <style>
        ul.navbar-nav li a.bar-element {
            height: 80px;
            line-height: 50px;
        }
        .navbar-default {
            margin-bottom: 0;
            background-image: none;
            border:0;
        }
        .navbar-brand {
            color: #fff !important;
            font-weight:600;
            font-size: 30px;
            line-height:50px;
            height:100px;
            margin:0 40px 0 0;
        }
        .navbar-nav li a {
            color: white !important;
        }
        .navbar-nav li.open a {
            color: black !important;
        }
    </style>
</head>
<body>
<div class="container-fluid" style="font-family: 'Lato', sans-serif;background-color:darkred;">

    <nav class="navbar navbar-default" style="height:80px;background-color:darkred;">
        <div class="container" style="background-color:darkred">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header" style="height:80px;">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ url('/') }}">GAMMA Ray</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a class="bar-element" href="{{ url('/') }}">Inicio</a></li>

                    <li class="dropdown">
                        <a href="#" class="bar-element dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Usuarios <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ route('usuarios.index') }}">Ver todos</a></li>
                            <li><a href="{{ route('usuarios.create') }}">Nuevo</a></li>
                        </ul>
                    </li>

                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</div>
<br>
<br>
<div class="container" style="min-height:calc(100% - 80px)">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    @yield('contenido')
</div>
<br><br><hr>
<div class="footer">

</div>

</body>
</html>