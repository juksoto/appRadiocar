<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1">
    <title>
      </title>
    <link href="{{ asset('css/normalize.css') }}" rel="stylesheet" type="text/css" >
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
    <link href='http://fonts.googleapis.com/css?family=Bree+Serif|Lora:400,400italic' rel='stylesheet' type='text/css'>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" >
    @yield('head')
</head>
<body class="admin">
    <section class="container-fluid">
        <section class="row top">

        </section>
    </section>
    <section class="container">
        @yield('content')
    </section>

    @include('admin.partials.scripts')
    @yield('scripts')
</body>
</html>


