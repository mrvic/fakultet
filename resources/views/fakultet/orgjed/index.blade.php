@extends('fakultet.master')
@section('title', 'Organizacijske jedinice')

@section('content')
    <h1>Sve organizacijske jedinice</h1>
    <a href="{{ URL::to('orgjed/create') }}">Kreiraj novu organizacijsku jedinicu</a>

<!-- will be used to show any messages -->
@if (Session::has('message'))
	<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Šifra</th>
			<th>Naziv</th>
                        <th>Šifra nadorganizacijske jedinice</th>
		</tr>
	</thead>
	<tbody>
	@foreach($orgjed as $key => $value)
		<tr>
			<td>{{ $value->sifOrgjed }}</td>
			<td>{{ $value->nazOrgjed }}</td>
                        <td>{{ $value->sifNadorgjed }}</td>

			<!-- we will also add show, edit, and delete buttons -->
			<td>

				<!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
				<!-- we will add this later since its a little more complicated than the first two buttons -->
				{{ Form::open(array('url' => 'orgjed/' . $value->sifOrgjed, 'class' => 'pull-right')) }}
					{{ Form::hidden('_method', 'DELETE') }}
					{{ Form::submit('Obrisi ovu org.jedinicu'
                                            , array('class' => 'btn btn-warning',
                                            'id'=>'orgjed-del-'.$value->sifOrgjed)) }}
				{{ Form::close() }}

				<!-- show the nerd (uses the show method found at GET /nerds/{id} -->
				<a class="btn btn-small btn-success" id="{{'orgjed-' . $value->sifOrgjed}}" href="{{ URL::to('orgjed/' . $value->sifOrgjed) }}">Pokaži ovu org.jedinicu</a>

				<!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
				<a class="btn btn-small btn-info" href="{{ URL::to('orgjed/' . $value->sifOrgjed . '/edit') }}">Uredi ovu org.jedinicu</a>

			</td>
		</tr>
	@endforeach
	</tbody>
</table>
@endsection
