<?php

namespace Fakultet\Http\Controllers;

use Request;
//use Fakultet\Http\Requests;
use Validator;    // Validacija ulaznih podataka: tip i forma
use Input;        // Ulazne varijable sa forme
use Session;      // Za ispisivanje poruke uspješno/neuspješno
use Redirect;     // Za povratak na formu u slučaju pogrešnog unosa
use View;         // Prikaz ili vraćanje pogleda (view)
use Fakultet\Orgjed;
use Fakultet\Item;
class OrgjedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
      $orgJed = Orgjed::all()->reverse();
        return View::make('fakultet.orgjed.index')
                        ->with('orgjed', $orgJed);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View::make('fakultet.orgjed.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $org = new Orgjed;
       $org->sifOrgjed=Input::get('sifOrgjed');
        $org->nazOrgjed=Input::get('nazOrgjed');
        $org->sifNadorgjed=Input::get('sifNadorgjed');
        
        //$n->sifNastavnik=999;
        $org->save();
        
        return Redirect::to('orgjed');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
           $orgJed = Orgjed::find($id);
        return View::make('fakultet.orgjed.show')
                        ->with('orgjed', $orgJed);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $org = Orgjed::find($id);
        // Pokazi formu za editiranje studenata
        return View::make('fakultet.orgjed.edit')
                        ->with('orgjed', $org);
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
            'sifOrgjed'=> 'required|numeric',
            'nazOrgjed' => 'required',
            'sifNadorgjed' => 'required|numeric',
             );
        $validator = Validator::make(Input::all(), $rules);
        // process the login
        if ($validator->fails()) {
            return Redirect::to('orgjed/' . $id . '/edit')
                            ->withErrors($validator)
                            ->withInput(Input::except('password'));
        } else {
            // store
            $org = Orgjed::find($id);
                     //----------------
            $org->sifOrgjed=Input::get('sifOrgjed');
            $org->nazOrgjed=Input::get('nazOrgjed');
            $org->sifNadorgjed=Input::get('sifNadorgjed');
            //---------
           
            $org->save();
            // redirect
            Session::flash('message', 'Uspjesno uređena organizacijska jedinica!');
            return Redirect::to('orgjed');
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
       $org = Orgjed::find($id);
       $org->delete();
        // redirect
        Session::flash('message', 'Organizacijska jedinica je uspješno obrisana!');
        return Redirect::to('orgjed');
    }
}
