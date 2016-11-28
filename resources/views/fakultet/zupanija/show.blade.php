<!-- app/views/nerds/show.blade.php -->

@extends('fakultet.master')
@section('title', 'Details')

@section('content')
<!-- will be used to show any messages -->
@if (Session::has('message'))
	<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<h1>Showing {{ $zupanija->nazZupanija }}</h1>

	<div class="jumbotron text-center">
		<h2>{{ $zupanija->nazZupanija }}</h2>
		<p>
			<strong>Šifra:</strong> {{ $zupanija->sifZupanija }}<br>
			<strong>Naziv:</strong> {{ $zupanija->nazZupanija }}
		</p>
	</div>

@endsection

