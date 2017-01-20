<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

/**
 * Direktno sa Route -> Model -> Db
 * @todo DOhvati sve studente iz Osijeka
 */
Route::get('/studos',function(){
    $z=new \Fakultet\Zupanija;
    $os=$z->find(14)->mjesto()->find(31000)->student_rod->find(1120);
    
    echo "<h1>Samo student iz Osijeka sa matičnim br: 1120</h1>";
    echo $os->imeStud." ".$os->prezStud;
    
    $svios=$z->find(14)->mjesto()->find(31000)->student_rod->toArray();

    echo "<h1>Svi studenti iz Osijeka ARRAY</h1>";
    echo "<ol>";
    foreach ($svios as $oosj){
          echo "<li>".$oosj['imeStud']
               ." "
               .$oosj['prezStud']."</li>";         
      } 
    echo "</ol>";
      
        echo "<h1>Svi studenti iz Osijeka DIREKTNO</h1>";
        
    $svios=$z->find(14)->mjesto()->find(31000)->student_rod;
 echo "<ol>";
    foreach ($svios as $oosj){
          printf("<li>%s %s </li>", $oosj->imeStud, $oosj->prezStud);       
      }     
   echo "</ol>";    
    /*
   // TODO: DOhvati sve studente iz Osijeka
     *       
     * 
    */
     
   //return $z; 
});

Route::get('/dvorane', function () {
    $d=Fakultet\Dvorana::all();
    //$d::all(['kapacitet','oznDvorana']);
    //dd($d);
    foreach ($d as $dvorana){
        printf("%s %s <br>",$dvorana->oznDvorana,$dvorana->kapacitet);

        
        //attributes['nazZupanija'];
    }
    //return view('child');
})->name('svedvorane');


Route::get('m', 'mathController@index');

// Osnovne matematičke operacije
Route::get('m/{br1}/{br2}/{op}', 'mathController@rezultat');

Route::get('/glavni', function () {
    return view('child');
});


Route::get('/fakultet', function () {
    return view('fakultet.index');
});
Route::get('/mjesto-zupanija', function(){
    //$comments = App\Post::find(1)->comments;
/*
    foreach ($comments as $comment) {
//
}
 * */
 
    $lista_mjesta=Fakultet\Zupanija::all();
   dd($lista_mjesta);
});

Route::get('/show-key', function(){
    var_dump( $_ENV['APP_KEY']);
    echo "<br>";
    $_ENV['proba']="neki text";
    echo $_ENV['DB_USERNAME'];
    dd($_ENV);
});

// Ovako isprintamo composer.json
Route::get('/get-composer-json', function(){
    $string = file_get_contents(base_path()."/composer.json");
    $json_a = json_decode($string, true);
   

    // This will dump and die, can also print_r($json_a);
    // CTRL-CLICK za expand all
    dd($json_a);
});
    

Route::get('/', function () {
    return view('welcome');
});
Route::get('/123', function () {
    return "xxx";
});


//Fakultet aplikacija
Route::get('/mjesto-ajax', function () {
    return view('fakultet.mjesto.index');
});

Route::resource('mjesto',   'MjestoController');
Route::resource('zupanija', 'ZupanijaController');
Route::resource('studenti', 'StudController');
Route::resource('dvorana', 'DvoranaController');

Route::get('/laravel-version', function()
{
$laravel = app();
return "Your Laravel version is ".$laravel::VERSION;
});
