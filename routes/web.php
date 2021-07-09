<?php

use Illuminate\Support\Facades\Route;

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




//route di tutti i fumetti;
Route::get('/comics', function () {

    $comics=config('comics');

    return view('comics.index', compact('comics'));
})-> name ('comics');

//route del singolo fumetto
Route::get('comics/{id}', function($id){
    $comics=config('comics');

    if(is_numeric($id) && $id < count($comics) && $id >= 0 ){
        $comic = $comics[$id];
        return view ('comics.show', compact('comic'));
    } else {
        abort(404);
    }
})-> name('comic');

//route di tutti i fumetti;
Route::get('/movies', function () {

   

    return view('movies');
})-> name ('movies');