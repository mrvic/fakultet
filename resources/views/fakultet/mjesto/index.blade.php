@extends('fakultet.master')
@section('title', 'Dobrodošli na Algebrin fakultet')

@section('content')
    <h1>{{ $mjestos->total() }} Mjesta</h1>
    <strong> stranica {{ $mjestos->currentPage() }} od {{ $mjestos->lastPage() }}</strong><br>
    <a href="{{ URL::to('mjesto/create') }}">Kreiraj novu mjesto</a>

<!-- will be used to show any messages -->
@if (Session::has('message'))
	<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
    <thead>
            <tr>
                    <th>Poštanski broj</th>
                    <th>Naziv</th>
                    <th>Županija</th>
            </tr>
    </thead>
    <tbody>
@foreach($mjestos as $key => $value)
<tr>
    <td>{{ $value->pbr }}</td>
    <td>{{ $value->nazMjesto }}</td>
    <td>{{ $value->zupanija->nazZupanija }}</td>
    <!-- we will also add show, edit, and delete buttons -->
    <td>


{!! Form::open(array('url' => 'mjesto/' . $value->pbr, 'class' => 'pull-right')) !!}
{!! Form::hidden('_method', 'DELETE') !!}
{!! Form::submit('Obriši ovo mjesto', array('class' => 'btn btn-warning','id'=>'mjesto-del-'.$value->pbr)) !!}
{!! Form::close() !!}


<a class="btn btn-small btn-success" id="{{'mjesto-' . $value->pbr}}" href="{{ URL::to('mjesto/' . $value->pbr) }}">Pokaži ovu mjesto</a>


<a class="btn btn-small btn-info" href="{{ URL::to('mjesto/' . $value->pbr . '/edit') }}">Uredi ovu mjesto</a>

</td>
</tr>
@endforeach

    </tbody>
</table>

<!-- primjer paginate index@MjestoController -->
{{ $mjestos->links() }}

@endsection
