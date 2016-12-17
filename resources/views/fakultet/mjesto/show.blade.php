<!-- app/views/nerds/show.blade.php -->

@extends('fakultet.master')
@section('title', 'Details')

@section('content')
<!-- will be used to show any messages -->
@if (Session::has('message'))
<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif



<div class="jumbotron text-center">
    <h1>{{ $mjesto->nazMjesto }}</h1>
</div>
    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-3">
                <h2>{{ $mjesto->nazMjesto }}</h2>
                <p>
                    <strong>Poštanski broj:</strong> {{ $mjesto->pbr }}<br>
                    <strong>Naziv:</strong>          {{ $mjesto->nazMjesto }}<br>
                    <strong>Županija:</strong>       {{ $mjesto->zupanija->nazZupanija }}
                </p>
            </div>
            <div class="col-sm-9">
                <iframe
                    width="600"
                    height="450"
                    frameborder="0" style="border:0"
                    src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAWl7kwrpobWXdVJvkoZ1Z7nh3DcbUFtUs
                    &q={{ $mjesto->pbr }} {{ $mjesto->nazMjesto }},{{ $mjesto->zupanija->nazZupanija }},Croatia" allowfullscreen>
                </iframe>
            </div>
        </div>
    </div>







@endsection

