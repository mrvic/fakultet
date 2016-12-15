<!-- app/views/nerds/show.blade.php -->

@extends('fakultet.master')
@section('title', 'Details')

@section('content')
<!-- will be used to show any messages -->
@if (Session::has('message'))
	<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<h1>Showing {{ $mjesto->nazMjesto }}</h1>

	<div class="jumbotron text-center">
		<h2>{{ $mjesto->nazMjesto }}</h2>
		<p>
			<strong>Poštanski broj:</strong> {{ $mjesto->pbr }}<br>
			<strong>Naziv:</strong>          {{ $mjesto->nazMjesto }}
                        <strong>Županija:</strong>       {{ $mjesto->zupanija->nazZupanija }}
		</p>
	</div>

@endsection

