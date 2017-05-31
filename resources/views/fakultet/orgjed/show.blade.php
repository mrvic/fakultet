<!-- app/views/nerds/show.blade.php -->

@extends('fakultet.master')
@section('title', 'Details')

@section('content')
<!-- will be used to show any messages -->
@if (Session::has('message'))
<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<div><h1>Organizacijska jedinica: {{ $orgjed->nazOrgjed }} 

        <a class="btn btn-small btn-info" href="{{ URL::to('orgjed/' . $orgjed->sifOrgjed . '/edit') }}">Uredi ovu organizacijsku jedinicu <span class="glyphicon glyphicon-edit"></span></a></h1></div>

<div class="jumbotron text-center">
    <h2> Organizacijska jedinica: {{ $orgjed->nazOrgjed }} </h2>
    <p>
        <strong>Šifra:</strong> {{ $orgjed->sifOrgjed }}<br>
        <strong>Naziv:</strong> {{$orgjed->nazOrgjed }}<br>
         <strong>Šifra nadorganizacijske jedinice:</strong> {{$orgjed->sifNadorgjed }}
    </p>

</div>


@endsection

