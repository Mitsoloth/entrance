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
Use App\Person;

Route::get('/', function () {
    $persons = DB::table('persons')->get();

    //return $persons;	

    return view('welcome',compact('persons'));
});

