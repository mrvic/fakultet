<!-- app/views/fakultet.blade.php -->

@extends('fakultet.master')
@section('title', 'Details')

@section('content')
<!-- will be used to show any messages -->
@if (Session::has('message'))
	<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<h1>Dobro došli na algebrin fakultet!</h1>

	<div class="jumbotron text-center">
		<h2>Sekcije</h2>
		<p>
                    <a href="{{ URL::to('zupanija') }}">Županije</a><br>
			 <a href="{{ URL::to('mjesto') }}">Mjesta</a>
		</p>

	</div>

@endsection

