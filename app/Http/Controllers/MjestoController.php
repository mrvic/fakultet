<?php

namespace Fakultet\Http\Controllers;

use Illuminate\Http\Request;


//use Request;
//use Fakultet\Http\Requests;
//use Validator;
//use Input;
//use Session;
//use Redirect;
//use View;
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
        $mjesto = Mjesto::all();
        return(print_r($mjesto));
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Mjesto::find($id);
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
            /*
            return Redirect::to('mjesto/' . $id . '/edit')
                            ->withErrors($validator)
                            ->withInput(Input::except('password'));
             
             */
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
        //
    }
}
