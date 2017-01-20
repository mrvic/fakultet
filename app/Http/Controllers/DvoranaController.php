<?php

namespace Fakultet\Http\Controllers;
use Validator;    // Validacija ulaznih podataka: tip i forma
use Input;        // Ulazne varijable sa forme
use Session;      // Za ispisivanje poruke uspješno/neuspješno
use Redirect;     // Za povratak na formu u slučaju pogrešnog unosa
use View;  
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
        /**
         * https://laravel.com/docs/5.3/collections#method-reverse
         */
        $dvoranas=Dvorana::all()->reverse();
        //dd($dvoranas);
        return View::make('fakultet.dvorana.index')
                        ->with('dvoranas', $dvoranas);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View::make('fakultet.dvorana.create');
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
            'oznDvorana'=> 'required',
            'kapacitet' => 'required'
        );
        $validator = Validator::make(Input::all(), $rules);

        //$validator = Validator::make($request->all(), $rules)->validate();
        // process the login
        if ($validator->fails()) {
            return Redirect::to('dvorana/create')
                            ->withErrors($validator)
                            ->withInput(Input::except('password'));
        } else {
            // store
            $dvorana = new Dvorana;
            $dvorana->oznDvorana=Input::get('oznDvorana');
            $dvorana->kapacitet = Input::get('kapacitet');
            $dvorana->save();

            // redirect
            Session::flash('message', 'Uspješno si kreirao dvoranu!');
            return Redirect::to('dvorana');
        }
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
        $dvorana = Dvorana::find($id);

        // show the edit form and pass the nerd
       return View::make('fakultet.dvorana.edit')
                        ->with('dvorana', $dvorana);
        
        
         
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
         $rules = array(
            'oznDvorana' => 'required',
            'kapacitet' => 'required|numeric'
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('dvorana/' . $id . '/edit')
                            ->withErrors($validator)
                            ->withInput(Input::except('password'));
        } else {
            // store
            $dvorana = Dvorana::find($id);
            $dvorana ->oznDvorana = Input::get('oznDvorana');
            $dvorana ->kapacitet = Input::get('kapacitet');
            $dvorana->save();

            // redirect
            Session::flash('message', 'Successfully updated dvorana!');
            return Redirect::to('dvorana');
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
         $dvorana = Dvorana::find($id);
        $dvorana->delete();

        // redirect
        Session::flash('message', 'Successfully deleted dvorana!');
        return Redirect::to('dvorana');
    }
}
