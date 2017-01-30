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
/*
Route::get('/', function () {
    return view('welcome');
});

*/
//Cambiamos el welcome
//llamo al método index del controlador WelcomeController
Route::get('/', 'WelcomeController@index');


//Aquí puede haber función anónima o un controlador
Route::get('notes', function () {
    return "Estamos en notas";
});

Route::get('notes/create', function () {
    return view('notes');
});

Route::post('notes/create', function(){
    return "Procesando la entrada del formulario";
});


//Esta ruta con variable tiene que ser la última, si la ponemos antes
// y hacemos notes/create muestra en pantalla "create" , porque lo toma como una variable id_note

//Con where filtramos lo que queremos que entre a 'note' , que son sólo número
Route::get('notes/{id_note}', function($id_note){
      return "$id_note";
})->where('id_note', '[0-9]+');


// El slug con ? es que es opcional ponerlo
// Y luego en la función le ponemos = null , para que no casque cuando no haya parámetro en slug
Route::get('notes/{id_note}/{slug?}', function( $id_note, $slug = null){

    dd($id_note, $slug);

})->where('id_note', '[0-9]+');


Route::get('/test', 'TestController@index');