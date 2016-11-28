<!-- app/views/nerds/edit.blade.php -->
@extends('layouts.nerds')
@section('title', 'Edit a Nerd')

@section('content')
<h1>Edit {{ $nerd->name }}</h1>

<!-- will be used to show any messages -->
@if (Session::has('message'))
	<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

{{ Form::model($nerd, array('action' => array('NerdController@update', $nerd->id), 'method' => 'PUT')) }}

	<div class="form-group">
		{{ Form::label('name', 'Name') }}
		{{ Form::text('name', null, array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('email', 'Email') }}
		{{ Form::email('email', null, array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('nerd_level', 'Nerd Level') }}
		{{ Form::select('nerd_level', array('0' => 'Select a Level', '1' => 'Sees Sunlight', '2' => 'Foosball Fanatic', '3' => 'Basement Dweller'), null, array('class' => 'form-control')) }}
	</div>

	{{ Form::submit('Edit the Nerd!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

@endsection
