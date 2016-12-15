<?php

namespace Fakultet\Http\Controllers;

use Illuminate\Http\Request;




/**
 * 
 * 
 * 
 * 
 *              NE RADI NIŠTA KREIRAJ OD POČETKA 
 * 
 *              http://thingsaker.com/blog/ajax-laravel-controller-method's
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 */







//use Request;
//use Fakultet\Http\Requests;
use Validator;
//use Input;
//use Session;
//use Redirect;
use View;
use Fakultet\Mjesto;
use Fakultet\Item;



class MjestoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mjestos = Mjesto::paginate(10);
        //$mjestos = Mjesto::all();
            return View::make('fakultet.mjesto.index')
                            ->with('mjestos', $mjestos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View::make('fakultet.mjesto.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
                // validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'pbr'=>'required',
            'nazMjesto' => 'required',
            'sifZupanija' => 'required'
        );
        $validator = Validator::make(Input::all(), $rules);

        //$validator = Validator::make($request->all(), $rules)->validate();
        // process the login
        if ($validator->fails()) {
            return Redirect::to('mjesto/create')
                            ->withErrors($validator)
                            ->withInput(Input::except('password'));
        } else {
            // store
            $mjesto = new Mjesto;
            $mjesto->pbr = Input::get('pbr');
            $mjesto->nazMjesto = Input::get('nazMjesto');
            $mjesto->sifZupanija=Input::get('sifZupanija');
            
            $mjesto->save();

            // redirect
            Session::flash('message', 'Uspješno dodao novo mjesto!');
            return Redirect::to('mjesto');
    }
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // get the nerd
        $mjesto = Mjesto::find($id);

        // show the view and pass the nerd to it
        return View::make('fakultet.mjesto.show')
                        ->with('mjesto', $mjesto);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
           $mjesto = Mjesto::find($id);

        // show the edit form and pass the nerd
        return View::make('fakultet.mjesto.edit')
                        ->with('mjesto', $mjesto);
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
        // validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'pbr'         => 'required|numeric',
            'nazMjesto'   => 'required',
            'sifZupanija' => 'required|numeric'
        );
        $validator = Validator::make($request::all(), $rules);

        // process the login
        if ($validator->fails()) {
           return Redirect::to('mjesto/' . $id . '/edit')
                            ->withErrors($validator)
                            ->withInput(Input::except('password'));
        } else {
            // store
            $mjesto = Mjesto::find($id);
            $mjesto->pbr         = $request::get('pbr');
            $mjesto->nazMjesto   = $request::get('nazMjesto');
            $mjesto->sifZupanija = $request::get('sifZupanija');
            $mjesto->save();

            // redirect
            Session::flash('message', 'Successfully updated mjesto!');
            return Redirect::to('mjesto');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
            // delete
        $mjesto = Mjesto::find($id);
        $mjesto->delete();

        // redirect
        Session::flash('message', 'Uspješno obrisao mjesto!');
        return Redirect::to('mjesto');
    }
}
