<?php

namespace Fakultet\Http\Controllers;

use Illuminate\Http\Request;

class mathController extends Controller
{
    public function index(){
        return "molim te unesi dva broja i operaciju".'/$a/$b/+';
    }
    public function zbroj($request){
        dd(getParameter('br1'));
        dd($request);
    }   
}
