<?php

namespace Fakultet\Http\Controllers;
//use Request;
use Fakultet\Dvorana;
use Illuminate\Http\Request;

/**
 * Controller Dvorana.
 * 
 * php artisan make:controller DvoranaController --resource
 */
class DvoranaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    // Može i ivako poziv apsolutnom putanjom do klase Dvorana
    //$d= \Fakultet\Dvorana::all();
    
    // Mi ćemo koristiti namespace (use) komandu
    $d= Dvorana::all();
    
    //$d::all(['kapacitet','oznDvorana']);
    //dd($d);
    foreach ($d as $dvorana){
        printf("%s %s <br>",$dvorana->oznDvorana,$dvorana->kapacitet);

        
        //attributes['nazZupanija'];
    }
    //return view('child');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * Route -> Controller -> Model -> Db -> return raw data
     * 
     * @example http://localhost:8000/dvorana/A101; Dvorane broj: A102,A104,A105
     * 
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //dd(Dvorana::find($id));
        return Dvorana::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
