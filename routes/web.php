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

route::get('/', function(){
    $text = 'hello world';
    $name = 'marco camillo belloni';
    return view('home', compact('text','name'));
});


route::get('/jobs', function(){
    $jobs = 'web designer | web developer';
    return view('jobs', compact('jobs'));
});