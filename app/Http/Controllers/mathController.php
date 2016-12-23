<?php

namespace Fakultet\Http\Controllers;

use Illuminate\Http\Request;

class mathController extends Controller
{
    public function index(){
        return "molim unesite dva broja i operaciju".'/$a/$b/{+}{-}{mul}{div}'
                . '<br>'
                . 'npr: http://localhost:8000/m/90/3/div';
    }
    public function rezultat($br1,$br2,$op){
      print_r(func_get_args()); 
      echo "<br>rezultat:";
      switch($op){
          case '+': return $br1+$br2;
          case '-': return $br1-$br2;
          case 'mul': return $br1*$br2;
          case 'div': return $br1/$br2;
      }
        
        
        
    }   
}
