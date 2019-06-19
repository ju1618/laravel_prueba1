<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/miPrimerRuta', function () {
    return 'Creé mi primer ruta en Laravel';
});

Route::get('/resultado/{numero}/{multiplica?}', function ($numero, $multiplica=null) {
  if ($multiplica){
    $producto = $numero*$multiplica;
    return "Los numeros son $numero y $multiplica, y el resultado de su producto es $producto";
  } else{
    if ($numero%2==0){
      return "El número $numero es par";
    }else {
      return "El número $numero es impar";
    }
  }
});
