@extends('fakultet.master')
@section('title', 'Kreirajte novu dvoranu')

@section('content')
<h1>Dodaj novu dvoranu</h1>

<!-- will be used to show any messages -->
@if (Session::has('message'))
	<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

{!! Form::open(array('url' => 'dvorana')) !!}


	<div class="form-group">
		{!! Form::label('oznDvorana', 'Oznaka dvorane') !!}
		{!! Form::text('oznDvorana', Input::old('oznDvorana'), array('class' => 'form-control')) !!}
	</div>
	<div class="form-group">
		{!! Form::label('kapacitet', 'Kapacitet dvorane') !!}
		{!! Form::number('kapacitet', Input::old('kapacitet'), array('class' => 'form-control')) !!}
	</div>


	{!! Form::submit('Dodaj novu dvoranu!', array('class' => 'btn btn-primary','id'=>'dvorana-dodaj')) !!}

{!! Form::close() !!}

@endsection
 