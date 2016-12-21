<?php

namespace Fakultet\Http\Controllers;

use Illuminate\Http\Request;

class mathController extends Controller
{
    public function index(){
        return "molim te unesi dva broja i operaciju".'/$a/$b/{+}{-}{mul}{div}';
    }
    public function rezultat($br1,$br2,$op){
        
      switch($op){
          case '+': return $br1+$br2;
          case '-': return $br1-$br2;
          case 'mul': return $br1*$br2;
          case 'div': return $br1/$br2;
      }
        
        
        dd($request->input('br2'));
    }   
}
