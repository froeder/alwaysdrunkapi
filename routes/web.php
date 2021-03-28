<?php

use Illuminate\Support\Facades\Route;
use Cowsayphp\Farm;


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

Route::get('/cowsay', function() {
    $cow = Farm::create(\Cowsayphp\Farm\Cow::class);
    return '<pre>'.$cow->say("Ohmg I'm a cow!").'</pre>';
});