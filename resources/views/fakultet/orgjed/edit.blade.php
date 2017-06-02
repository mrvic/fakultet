<!-- app/views/nerds/edit.blade.php -->
@extends('fakultet.master')
@section('title', 'Uredi organizacijsku jedinicu')

@section('content')
<h1>Edit {{ $orgjed->sifOrgjed }}</h1>

<!-- will be used to show any messages -->
@if (Session::has('message'))
	<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

{{ Form::model($orgjed, array('action' => array('OrgjedController@update', $orgjed->sifOrgjed), 'method' => 'PUT')) }}


    <div class="form-group">
		{{ Form::label('sifOrgjed', 'Broj organizacijske jedinice') }}
		{{ Form::number( 'sifOrgjed', Input::old('sifOrgjed'), array('class' => 'form-control')) }}
	</div>
	<div class="form-group">
		{{ Form::label('nazOrgjed', 'Ime organizacijske jedinice') }}
		{{ Form::text( 'nazOrgjed', Input::old('nazOrgjed'), array('class' => 'form-control')) }}
	</div>
    <div class="form-group">
		{{ Form::label('sifNadorgjed', 'Šifra nadorganizacijske jedinice') }}
		{{ Form::number( 'sifNadorgjed', Input::old('sifNadorgjed'), array('class' => 'form-control')) }}
    </div>

	{{ Form::submit('Uredi organizacijsku jedinicu!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

@endsection
