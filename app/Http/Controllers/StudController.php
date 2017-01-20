<?php

namespace Fakultet\Http\Controllers;

use Illuminate\Http\Request;
use View;

class StudController extends Controller
{
  public  function studloc($pbr){
    $m=new \Fakultet\Mjesto;
    $os=$m->find($pbr)->student_rod->first();
    
    echo "<h2>Prvi student iz mjesta "
     .$m->find($pbr)->nazMjesto
     ." sa matičnim br:"
     .$os->mbrStud
     . "</h2>";
    echo $os->imeStud." ".$os->prezStud;
    
    $svios=$m->find($pbr)->student_rod->toArray();

    echo "<h2>Svi studenti iz ".$m->find($pbr)->nazMjesto." ARRAY</h2>";
    echo "<ol>";
    foreach ($svios as $oosj){
          echo "<li>".$oosj['imeStud']
               ." "
               .$oosj['prezStud']."</li>";         
      } 
    echo "</ol>";
      
        echo "<h2>Svi studenti iz ".$m->find($pbr)->nazMjesto." DIREKTNO</h2>";
        
    $svios=$m->find($pbr)->student_rod;
 echo "<ol>";
    foreach ($svios as $oosj){
          printf("<li>%s %s </li>", $oosj->imeStud, $oosj->prezStud);       
      }     
   echo "</ol>";    
     
}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return \Fakultet\Stud::all();
       
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
        // Dohvati studenta sa primarnim ključem npr:
        // http://localhost:8000/studenti/1120
        $s = \Fakultet\Stud::find($id);
        //return $s->mjesto_rod->nazMjesto;
        return View::make('fakultet.student.show')
                        ->with('student', $s);
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
