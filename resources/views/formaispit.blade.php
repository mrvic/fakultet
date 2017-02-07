@extends('masterispit')
@section('title', 'Ovo je forma za ispit')

@section('content')
{{print_r($errors->all())}}

{{ Form::open(array('url' => '/ispit')) }}


<div class="form-group">
    {{ Form::label('broj', 'Broj') }}
    {{ Form::text( 'broj', Input::old('broj'), array('class' => 'form-control')) }}
</div>
 
<div class="form-group">
    {{ Form::label('ime', 'Ime') }}
    {{ Form::text( 'ime', Input::old('ime'), array('class' => 'form-control')) }}
</div>

{{ Form::submit('Pošalji') }}

{{ Form::close() }}

@endsection
