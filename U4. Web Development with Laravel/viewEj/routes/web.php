<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::name("view.")->group(function(){
    Route::get('/', function () {
        $v="Hola, mundo";
        return view('viewVariable', compact('v'));})->name("variable");

    Route::get('/array', function () {
        $array=[1,2,3,2,3,2,3,2,3,2,3];
        return view('viewArray', compact('array'));})->name("array");

        Route::get('/viewId/{id}', function ($id) {
            // Suponiendo que tienes un array llamado $data con valores
            $data = ["a","b","c"];
        
            // Verificar si el ID existe en el array, si no, mostrar un mensaje de error
            if (array_key_exists($id, $data)) {
                $valor = $data[$id];
            } else {
                $valor = 'ID no válido';
            }
        
            // Pasar el valor a la vista y mostrarla
            return view('viewId', ['valor'=>$valor]);
        })->name("id");
});