<?php

namespace Fakultet\Http\Controllers;
use Request;
//use Fakultet\Http\Requests;
use Validator;    // Validacija ulaznih podataka: tip i forma
use Input;        // Ulazne varijable sa forme
use Session;      // Za ispisivanje poruke uspješno/neuspješno
use Redirect;     // Za povratak na formu u slučaju pogrešnog unosa
use View;         // Prikaz ili vraćanje pogleda (view)
use Fakultet\Zupanija;
use Fakultet\Item;


//use Illuminate\Http\Request;

class ZupanijaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $zupanijas = Zupanija::all();
       // dd($zupanijas);
        // load the view and pass the nerds
            return View::make('fakultet.zupanija.index')
                            ->with('zupanijas', $zupanijas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View::make('fakultet.zupanija.create');
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
            'sifZupanija'=>'required',
            'nazZupanija' => 'required'
        );
        $validator = Validator::make(Input::all(), $rules);

        //$validator = Validator::make($request->all(), $rules)->validate();
        // process the login
        if ($validator->fails()) {
            return Redirect::to('zupanija/create')
                            ->withErrors($validator)
                            ->withInput(Input::except('password'));
        } else {
            // store
            $zupanija = new Zupanija;
            $zupanija->sifZupanija=Input::get('sifZupanija');
            $zupanija->nazZupanija = Input::get('nazZupanija');
            $zupanija->save();

            // redirect
            Session::flash('message', 'Uspješno si kreirao županiju!');
            return Redirect::to('zupanija');
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
        // Dohvati županiju sa primarnim ključem npr:
        // http://localhost:8000/zupanija/21
        $zupanija = Zupanija::find($id);

        // show the view and pass the nerd to it
        return View::make('fakultet.zupanija.show')
                        ->with('zupanija', $zupanija);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $zupanija = Zupanija::find($id);

        // show the edit form and pass the nerd
        return View::make('fakultet.zupanija.edit')
                        ->with('zupanija', $zupanija);
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
            'sifZupanija' => 'required|numeric',
            'nazZupanija' => 'required'
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('zupanija/' . $id . '/edit')
                            ->withErrors($validator)
                            ->withInput(Input::except('password'));
        } else {
            // store
            $zupanija = Zupanija::find($id);
            $zupanija ->sifZupanija = Input::get('sifZupanija');
            $zupanija ->nazZupanija = Input::get('nazZupanija');
            $zupanija->save();

            // redirect
            Session::flash('message', 'Successfully updated zupanija!');
            return Redirect::to('zupanija');
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
        $zupanija = Zupanija::find($id);
        $zupanija->delete();

        // redirect
        Session::flash('message', 'Successfully deleted the Županija!');
        return Redirect::to('zupanija');
    }
}
