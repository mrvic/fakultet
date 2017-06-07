<!-- app/views/nerds/edit.blade.php -->
@extends('fakultet.master')
@section('title', 'Uredi dvoranu')

@section('content')
<h1>Edit {{ $dvorana->oznDvorana }}</h1>

<!-- will be used to show any messages -->
@if (Session::has('message'))
	<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

{!! Form::model($dvorana, array('action' => array('DvoranaController@update', $dvorana->oznDvorana), 'method' => 'PUT')) !!}


<div class="form-group">
		{!! Form::label('oznDvorana', 'Oznaka dvorane') !!}
		{!! Form::text( 'oznDvorana', Input::old('oznDvorana'), array('class' => 'form-control')) !!}
	</div>
	<div class="form-group">
		{!! Form::label('kapacitet', 'Kapacitet dvorane') !!}
		{!! Form::text( 'kapacitet', Input::old('kapacitet'), array('class' => 'form-control')) !!}
	</div>

	{!! Form::submit('Uredi dvoranu!', array('class' => 'btn btn-primary'), redirect('index')->with('status', 'Dvorana updated!')) !!}
        
{!! Form::close() !!}

@endsection
