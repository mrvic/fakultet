@extends('fakultet.master')
@section('title', 'Uredi mjesto')

@section('content')
<h1>Edit {{ $mjesto->nazMjesto }}</h1>

<!-- will be used to show any messages -->
@if (Session::has('message'))
	<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<?php            
// dohvati sva imena zupanija za popuniti select formu
/**
 * Trebamo ovakav oblik polja:
 * 
 * Array
(
    [0] => Nepoznata županija
    [1] => Zagrebačka
    [2] => Krapinsko-zagorska
    [3] => Sisačko-moslavačka
    [4] => Karlovačka
    [5] => Varaždinska
    [6] => Koprivničko-križevačka
    [7] => Bjelovarsko-bilogorska
    [8] => Primorsko-goranska
    [9] => Ličko-senjska
    [10] => Virovitičko-podravska
    [11] => Požeško-slavonska
    [12] => Brodsko-posavska
    [13] => Zadarska
    [14] => Osječko-baranjska
    [15] => Šibensko-kninska
    [16] => Vukovarsko-srijemska
    [17] => Splitsko-dalmatinska
    [18] => Istarska
    [19] => Dubrovačko-neretvanska
    [20] => Međimurska
    [21] => Grad Zagreb
)
 */


$z = \Fakultet\Zupanija::all();       
$z= json_decode($z,true);
$lista_zupanija=array();
foreach ($z as $key => $value) {
    $lista_zupanija[$value['sifZupanija']]=$value['nazZupanija'];
}
?>
{!! Form::model($mjesto, array('action' => array('MjestoController@update', $mjesto->pbr), 'method' => 'PUT')) !!}


	<div class="form-group">
		{!! Form::label('pbr', 'Poštanski broj') !!}
		{!! Form::text( 'pbr', Input::old('pbr'), array('class' => 'form-control')) !!}
	</div>
	<div class="form-group">
		{!! Form::label('nazMjesto', 'Ime mjesta') !!}
		{!! Form::text( 'nazMjesto', Input::old('nazMjesto'), array('class' => 'form-control')) !!}
	</div>
	<div class="form-group">
		{!! Form::label('sifZupanija', 'Ime županije') !!}
                {!! 
                Form::select('sifZupanija'
                , $lista_zupanija
                , Input::old('sifZupanija')
                , array('class' => 'form-control')) !!}
               	</div>


	{!! Form::submit('Uredi mjesto!', array('class' => 'btn btn-primary')) !!}

{!! Form::close() !!}


@endsection
