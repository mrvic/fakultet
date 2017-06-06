@extends('fakultet.master')
@section('title', 'Kreirajte novu Organizacijsku jedinicu')

@section('content')
<h1>Dodaj novu organizacijsku jedinicu</h1>

<!-- will be used to show any messages -->
@if (Session::has('message'))
	<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

{!! Form::open(array('url' => 'orgjed')) !!}


	<div class="form-group">
		{!! Form::label('sifOrgjed', 'Šifra organizacijske jedinice') !!}
		{!! Form::number('sifOrgjed', Input::old('sifOrgjed'), array('class' => 'form-control')) !!}
	</div>
	<div class="form-group">
		{!! Form::label('nazOrgjed', 'Naziv organizacijske jedinice') !!}
		{!! Form::text('nazOrgjed', Input::old('nazOrgjed'), array('class' => 'form-control')) !!}
	</div>
        <div class="form-group">
		{!! Form::label('sifNadorgjed', 'Šifra nadorganizacijske jedinice') !!}
		{!! Form::number('sifNadorgjed', Input::old('sifNadorgjed'), array('class' => 'form-control')) !!}
	</div>

	{!! Form::submit('Dodaj novu organizacijsku jedinicu!', array('class' => 'btn btn-primary','id'=>'orgjed-dodaj')) !!}

{!! Form::close() !!}

@endsection
 