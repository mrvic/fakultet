@extends('fakultet.master')
@section('title', 'Details')

@section('content')
<!-- will be used to show any messages -->
@if (Session::has('message'))
<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<div><h1>{{ $zupanija->nazZupanija }} županija

        <a class="btn btn-small btn-info" href="{{ URL::to('zupanija/' . $zupanija->sifZupanija . '/edit') }}">Uredi ovu županiju <span class="glyphicon glyphicon-edit"></span></a></h1></div>

<div class="jumbotron text-center">
    <h2>{{ $zupanija->nazZupanija }}  županija</h2>
    <p>
        <strong>Šifra:</strong> {{ $zupanija->sifZupanija }}<br>
        <strong>Naziv:</strong> {{ $zupanija->nazZupanija }}
    </p>

</div>

<div>
    <h4>Ovoj županiji pripadaju sljedeća mjesta (ukupno {{$zupanija->mjesto()->count()}}):</h4>
    <ol>
        @foreach ($zupanija->mjesto()->orderBy('nazMjesto')->get() as $m)

        <li><a href="{{ URL::to('mjesto')}}/{{ $m->pbr }}">{{ $m->nazMjesto }}</a></li>
        @endforeach
    </ol>   
</div>

@endsection

