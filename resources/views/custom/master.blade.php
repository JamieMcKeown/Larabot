<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="{{asset('images/rubix.png')}}" />
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/styles.css')}}">
</head>
<body>
    @section('headerContent')
    @yield('headerContent')
    @show

    @section('bodyContent')
    @yield('bodyContent')
    @show

    @section('footerContent')
    @yield('footerContent')
    @show
    
<script src="{{asset('js/app.js')}}"></script>
<script src="https://code.responsivevoice.org/responsivevoice.js?key=x2iENAuV"></script>
</body>
</html>