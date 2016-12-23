@extends('fakultet.master')
@section('title', 'Dobrodošli na Algebrin fakultet')

@section('content')
    <h1>Sve županije</h1>
    <a href="{{ URL::to('zupanija/create') }}">Kreiraj novu zupaniju</a>

<!-- will be used to show any messages -->
@if (Session::has('message'))
	<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Šifra</th>
			<th>Naziv</th>
		</tr>
	</thead>
	<tbody>
	@foreach($zupanijas as $key => $value)
		<tr>
			<td>{{ $value->sifZupanija }}</td>
			<td>{{ $value->nazZupanija }}</td>

			<!-- we will also add show, edit, and delete buttons -->
			<td>

				<!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
				<!-- we will add this later since its a little more complicated than the first two buttons -->
				{{ Form::open(array('url' => 'zupanija/' . $value->sifZupanija, 'class' => 'pull-right')) }}
					{{ Form::hidden('_method', 'DELETE') }}
					{{ Form::submit('Obrisi ovu Zupaniju', array('class' => 'btn btn-warning','id'=>'zupanija-del-'.$value->sifZupanija)) }}
				{{ Form::close() }}

				<!-- show the nerd (uses the show method found at GET /nerds/{id} -->
				<a class="btn btn-small btn-success" id="{{'zupanija-' . $value->sifZupanija}}" href="{{ URL::to('zupanija/' . $value->sifZupanija) }}">Pokaži ovu županiju</a>

				<!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
				<a class="btn btn-small btn-info" href="{{ URL::to('zupanija/' . $value->sifZupanija . '/edit') }}">Uredi ovu županiju</a>

			</td>
		</tr>
	@endforeach
	</tbody>
</table>
@endsection
