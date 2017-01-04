<!-- app/views/nerds/edit.blade.php -->
@extends('fakultet.master')
@section('title', 'Uredi županiju')

@section('content')
<h1>Edit {{ $zupanija->nazZupanija }}</h1>

<!-- will be used to show any messages -->
@if (Session::has('message'))
	<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

{{ Form::model($zupanija, array('action' => array('ZupanijaController@update', $zupanija->sifZupanija), 'method' => 'PUT')) }}


<div class="form-group">
		{{ Form::label('sifZupanija', 'Broj županije') }}
		{{ Form::text( 'sifZupanija', Input::old('sifZupanija'), array('class' => 'form-control')) }}
	</div>
	<div class="form-group">
		{{ Form::label('nazZupanija', 'Ime županije') }}
		{{ Form::text( 'nazZupanija', Input::old('nazZupanija'), array('class' => 'form-control')) }}
	</div>

	{{ Form::submit('Uredi županiju!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

@endsection
