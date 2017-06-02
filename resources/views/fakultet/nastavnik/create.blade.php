<!-- resources/views/fakultet/nastavnik/create.blade.php -->
@extends('fakultet.master')
@section('title', 'Unesi novog nastavnika')

@section('content')
<h1>Dodaj novog nastavnika</h1>

<!-- will be used to show any messages -->
@if (Session::has('message'))
<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

{{ Form::open(array('url' => 'nastavnik', 'files' => true)) }}

 
<div class="form-group">
    {{ Form::label('imeNastavnik', 'Ime nastavnika') }}
<<<<<<< OURS
<<<<<<< HEAD
    {{ Form::text( 'imeNastavnik', Input::old('imeNastavnik'), array('class' => 'form-control','required' => 'required','maxlength' => 20)) }}
=======
    {{ Form::text( 'imeNastavnik', Input::old('imeNastavnik'), array('class' => 'form-control','required' => 'required')) }}
>>>>>>> THEIRS
</div>
<div class="form-group">
    {{ Form::label('prezNastavnik', 'Prezime nastavnika') }}
<<<<<<< OURS
    {{ Form::text( 'prezNastavnik',Input::old('prezNastavnik') , array('class' => 'form-control','required' => 'required','maxlength' => 25)) }}
=======
    {{ Form::text( 'imeNastavnik', Input::old('imeNastavnik'), array('class' => 'form-control','required' => 'required')) }}
</div>
<div class="form-group">
    {{ Form::label('prezNastavnik', 'Prezime nastavnika') }}
    {{ Form::text( 'prezNastavnik',Input::old('prezNastavnik') , array('class' => 'form-control','required' => 'required')) }}
>>>>>>> 6def43cf2b0f328ede020b54b9b076de537492ea
=======
    {{ Form::text( 'prezNastavnik',Input::old('prezNastavnik') , array('class' => 'form-control','required' => 'required')) }}
>>>>>>> THEIRS
</div>
<div class="form-group">
    {{ Form::label('pbrStan', 'Mjesto stanovanja') }}
    {{ Form::number( 'pbrStan', Input::old('pbrStan'), array('class' => 'form-control','required' => 'required')) }}
</div>

<div class="form-group">
    {{ Form::label('sifOrgjed', 'Šifra organizacijske jedinice') }}
    {{ Form::number('sifOrgjed', Input::old('sifOrgjed'), array('class' => 'form-control', 'required' => 'required')) }}     
</div>
<div class="form-group">
    {{ Form::label('koef', 'Koeficijent') }}
    {{ Form::number( 'koef', Input::old('koef'), array('class' => 'form-control','required' => 'required')) }}
</div>

{{ Form::submit('Kreiraj novog nastavnika!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

<<<<<<< HEAD
@endsection
=======
@endsection
>>>>>>> 6def43cf2b0f328ede020b54b9b076de537492ea
