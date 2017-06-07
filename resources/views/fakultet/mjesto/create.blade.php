@extends('fakultet.master')
@section('title', 'Kreirajte novo Mjesto)

@section('content')
<h1>Dodaj novo mjesto</h1>

<!-- will be used to show any messages -->
@if (Session::has('message'))
	<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

{!! Form::open(array('url' => 'mjesto')) !!}


	<div class="form-group">
		{!! Form::label('pbr', 'Poštanski broj') !!}
		{!! Form::number('pbr', Input::old('pbr'), array('class' => 'form-control')) !!}
	</div>
	<div class="form-group">
		{!! Form::label('nazMjesto', 'Ime mjesta') !!}
		{!! Form::text('nazMjesto', Input::old('nazMjesto'), array('class' => 'form-control')) !!}
	</div>
	<div class="form-group">
		{!! Form::label('sifZupanija', 'Ime mjesta') !!}
		{!! Form::text('sifZupanija', Input::old('sifZupanija'), array('class' => 'form-control')) !!}
	</div>


	{!! Form::submit('Dodaj novo mjesto!', array('class' => 'btn btn-primary','id'=>'mjesto-dodaj')) !!}

{!! Form::close() !!}

@endsection
 