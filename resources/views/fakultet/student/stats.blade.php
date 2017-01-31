@extends('fakultet.master')
@section('title', 'Details')

@section('content')
<!-- will be used to show any messages -->
@if (Session::has('message'))
<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<div><h1>{{ $lava->Country }} 
</h1></div>

<div class="jumbotron text-center">
    <h2> Student</h2>

    <div id="pop-div"></div>

</div>
@geochart('Popularity', 'pop-div')

@endsection

