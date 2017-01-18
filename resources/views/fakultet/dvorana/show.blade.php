<!-- app/views/nerds/show.blade.php -->

@extends('fakultet.master')
@section('title', 'Details')

@section('content')
<!-- will be used to show any messages -->
@if (Session::has('message'))
<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<div><h1>{{ $dvorana->oznDvorana }} dvorana

        <a class="btn btn-small btn-info" href="{{ URL::to('dvorana/' . $dvorana->oznDvorana . '/edit') }}">Uredi ovu dvoranu <span class="glyphicon glyphicon-edit"></span></a></h1></div>

<div class="jumbotron text-center">
    <h2>{{ $dvorana->oznDvorana }}  dvorana</h2>
    <p>
        <strong>Oznaka:</strong> {{ $dvorana->oznDvorana }}<br>
        <!--<strong>Kapacitet:</strong> {{ $dvorana->kapacitet }}-->
        <a class="btn btn-small btn-success" id="{{'dvorana-' . $value->oznDvorana}}" href="{{ URL::to('dvorana/' . $value->oznDvorana) }}">Pokaži ovu dvoranu</a>

    </p>

</div>

<div>
    <ul>
        @foreach ($dvorana->oznDvorana()->orderBy('oznDvorana')->get() as $m)

        <li><a href="{{ URL::to('mjesto')}}/{{ $m->kapacitet }}">{{ $m->oznDvorana }}</a></li>
        @endforeach
    </ul>   
</div>

@endsection

