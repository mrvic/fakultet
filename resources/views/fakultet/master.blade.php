<!DOCTYPE html>
<html>
    <head>
        <title>Fakultet: - @yield('title')</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
	<div class="navbar-header">
		<a class="navbar-brand" href="{{ URL::to('/') }}">Početna</a>
	</div>
	<ul class="nav navbar-nav">
   		<li><a href="{{ URL::to('fakultet') }}">App fakultet</a></li>         
		<li><a href="{{ URL::to('show-key') }}">Pokaži app key</a></li>
		<li><a href="{{ URL::to('get-composer-json') }}">Dohvati composer.json</a>
	</ul>
</nav>
@yield('content')
</div>
</body>
</html>