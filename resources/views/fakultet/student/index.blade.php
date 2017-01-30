@extends('fakultet.master')
    @section('title', 'Details')

@section('content')
<!-- will be used to show any messages -->
@if (Session::has('message'))
<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<div><h1> Svi studenti </h1></div>

<div class="jumbotron text-center">
    <h2> Lista studenata</h2>
@foreach($studenti as $key => $s)
<a href="{{ URL::to('studenti/' . $s->mbrStud) }}">
{{$s->imeStud}} {{$s->prezStud}}            
</a>
@if ($s->slikaStud!=0)
<img src="/slike-studenata/thumb_{{$s->mbrStud}}.jpg" width="32">
@endif
<br/>    
@endforeach
</div>


@endsection

