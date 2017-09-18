<!--

NEDOVRSENO   !!!!
Treba:
- prilagoditi tip polja podacima iz baze
- stilski posloziti formula
- validator za text
- validator duljine pbr-a 
- validator datuma rodjenja

-->

<!-- resources/views/fakultet/student/edit.blade.php -->
@extends('fakultet.master')
@section('title', 'Uredi studenta')

@section('content')
{{ print_r($errors) }}
<h1>Edit {{ $student->imeStud }}</h1>

<!-- will be used to show any messages -->
@if (Session::has('message'))
<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

{!! Form::model($student, array('action' => array('StudController@update', $student->mbrStud), 'method' => 'PUT', 'files' => true)) !!}


<div class="form-group">
    {!! Form::label('mbrStud', 'Matični broj studenta') !!}
    <!-- ne smije se staviti disabled="true" jer onda forma neće postirati to polje -->
    {!! Form::text( 'mbrStud', Input::old('mbrStud'), array('class' => 'form-control','readonly'=>'true')) !!}
 
</div>
<div class="form-group">
    {!! Form::label('imeStud', 'Ime studenta') !!}
    {!! Form::text( 'imeStud', Input::old('imeStud'), array('class' => 'form-control')) !!}
</div>
<div class="form-group">
    {!! Form::label('prezStud', 'Prezime studenta') !!}
    {!! Form::text( 'prezStud',Input::old('prezStud') , array('class' => 'form-control')) !!}
</div>
<div class="form-group">
    {!! Form::label('pbrRod', 'Mjesto rođenja') !!}
    {!! Form::text( 'pbrRod', Input::old('pbrRod'), array('class' => 'form-control')) !!}
</div>
<div class="form-group">
    {!! Form::label('pbrStan', 'Mjesto stanovanja') !!}
    {!! Form::text( 'pbrStan', Input::old('pbrStan'), array('class' => 'form-control')) !!}
</div>

<div class="form-group">
    {!! Form::label('datRodStud', 'Datum rođenja') !!}
    {!! Form::date( 'datRodStud', $student->datRodStud, array('class' => 'form-control', 'required' => 'required')) !!}   
    

</div>
<div class="form-group">
    {!! Form::label('jmbgStud', 'Matični broj studenta') !!}
    {!! Form::text( 'jmbgStud', Input::old('jmbgStud'), array('class' => 'form-control')) !!}
</div>
<div class="form-group">
    {!! Form::label('photo', 'Slika studenta') !!}
    {!! Form::file( 'photo', null, array('class' => 'form-control')) !!}
</div>
{!! Form::submit('Uredi studenta!', array('class' => 'btn btn-primary','name'=>'Uredi studenta')) !!}

{!! Form::close() !!}

@endsection
