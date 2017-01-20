@extends('fakultet.master')
@section('title', 'Dobrodošli na Algebrin fakultet')


@section('content')
    <h1>Sve dvorane</h1>
    <a href="{{ URL::to('dvorana/create') }}">Kreiraj novu dvoranu</a>

<!-- will be used to show any messages -->
@if (Session::has('message'))
	<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Oznaka</th>
			<th>Kapacitet</th>
		</tr>
	</thead>
	<tbody>
	@foreach($dvoranas as $key => $value)
		<tr>
			<td>{{ $value->oznDvorana }}</td>
			<td>{{ $value->kapacitet }}</td>

			<!-- we will also add show, edit, and delete buttons -->
			<td>

				<!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
				<!-- we will add this later since its a little more complicated than the first two buttons -->
				{{ Form::open(array('url' => 'dvorana/' . $value->oznDvorana, 'class' => 'pull-right')) }}
					{{ Form::hidden('_method', 'DELETE') }}
					{{ Form::submit('Obrisi ovu dvoranu', array('class' => 'btn btn-warning','id'=>'dvorana-del-'.$value->oznDvorana)) }}
				{{ Form::close() }}

				<!-- show the nerd (uses the show method found at GET /nerds/{id} -->
				<a class="btn btn-small btn-success" id="{{'dvorana-' . $value->oznDvorana}}" href="{{ URL::to('dvorana/' . $value->oznDvorana) }}">Pokaži ovu dvoranu</a>

				<!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
				<a class="btn btn-small btn-info" href="{{ URL::to('dvorana/' . $value->oznDvorana . '/edit') }}">Uredi ovu dvoranu</a>

			</td>
		</tr>
	@endforeach
	</tbody>
</table>
@endsection
