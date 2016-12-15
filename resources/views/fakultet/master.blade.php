<!DOCTYPE html>
<html>
<head>
	<title>Fakultet: - @yield('title')</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
	<div class="navbar-header">
		<a class="navbar-brand" href="{{ URL::to('fakultet') }}">Početna</a>
	</div>
	<ul class="nav navbar-nav">
		<li><a href="{{ URL::to('show-key') }}">Pokaži app key</a></li>
		<li><a href="{{ URL::to('get-composer-json') }}">Dohvati composer.json</a>
	</ul>
</nav>
@yield('content')
</div>
</body>
</html>