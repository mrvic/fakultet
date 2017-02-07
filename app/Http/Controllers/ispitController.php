<?php

namespace Fakultet\Http\Controllers;

use View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Input;
use Validator;
use Illuminate\Support\Facades\Redirect;

class ispitController extends Controller
{
    public function ispit(){
       return View::make('formaispit');
        
    }
    
    /*
     * @param  Request  $request
     * @return Response
     */
    public function rezultat(Request $request){
        
        //validacija:
                $rules = array(
            'broj' => 'required|numeric',
            'ime' => 'required');
        
        $validator = Validator::make(Input::all(), $rules);

        // Provjeri jeli popunjen broj i ime
        if ($validator->fails()) {
          
            return Redirect::to('/ispit')
                            ->withErrors($validator)
                            ->withInput(Input::except('password'));
        } else {
        
        
        $podaci= Input::get('broj')." ".Input::get('ime');
        return View::make('rezultatispit')
                        ->with('data', $podaci);
        }
    }
}
