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
		<h2>{{$_ENV['APP_URL']}}</h2>
		<p>
			<strong>Županije:</strong> {{ URL::to('zupanija') }}<br>
			<strong>Mjesta:</strong> {{ URL::to('mjesto') }}
		</p>
	</div>

@endsection

