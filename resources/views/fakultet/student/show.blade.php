@extends('fakultet.master')
@section('title', 'Details')

@section('content')
<!-- will be used to show any messages -->
@if (Session::has('message'))
<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<div><h1>{{ $student->imeStud }} 

        <a class="btn btn-small btn-info" href="{{ URL::to('studenti/' . $student->mbrStud . '/edit') }}">
            Uredi ovog studenta <span class="glyphicon glyphicon-edit"></span></a></h1></div>

<div class="jumbotron text-center">
    <h2> Student</h2>

    <p>
    <table>
        <tr><td style="text-align: right"> Ime:  </td>
            <td style="text-align: left; font-weight: bold"> {{$student->imeStud}}</td></tr>
        <tr><td style="text-align: right"> Prezime:   </td>
            <td style="text-align: left; font-weight: bold"> {{$student->prezStud}}</td></tr>
        <tr><td style="text-align: right"> Mjesto rođenja:   </td>
            <td style="text-align: left; font-weight: bold"> {{$student->mjesto_rod->nazMjesto}} </td></tr>
        <tr><td style="text-align: right"> Datum rođenja:   </td>
            <td style="text-align: left; font-weight: bold"> {{ date('d.m.Y.',strtotime($student->datRodStud)) }}</td></tr>
        <tr><td style="text-align: right"> Mjesto stanovanja:   </td>
            <td style="text-align: left; font-weight: bold"> {{$student->mjesto_stan->nazMjesto}}</td></tr>


    </table>
</p>
@if ($student->slikaStud==1)
<p>
    <img alt="Student {{$student->imeStud}} {{$student->prezStud}}" width="200" src="/slike-studenata/{{$student->mbrStud}}.jpg" title="Student {{$student->imeStud}} {{$student->prezStud}}"/>
</p>
@endif

</div>


@endsection

