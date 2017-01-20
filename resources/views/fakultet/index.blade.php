<!-- app/views/fakultet.blade.php -->

@extends('fakultet.master')
@section('title', 'Details')

@section('content')
<!-- will be used to show any messages -->
@if (Session::has('message'))
<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<h1>Dobro došli na algebrin fakultet!</h1>

<div class="jumbotron text-center">
    <h3>Sekcije</h3>
    <p>
        <a href="{{ URL::to('zupanija') }}">Županije <span class="badge">{{ Fakultet\Zupanija::all()->count()-1 }}</span></a>
        <br>
        <a href="{{ URL::to('mjesto') }}">Mjesta <span class="badge">{{ Fakultet\Mjesto::all()->count() }}</span></a>
    </p>
</div>

@endsection

