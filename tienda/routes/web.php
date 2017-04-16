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


Route::get("/", "HomeController@getHome");
Route::resource('producto', 'ProductoController'); //producto ProductoController

/*
Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function()
{
    return view('home');
});

Route::get('login', function()
{
    return view('auth.login');
});

Route::get('logout', function()
{
    return 'logout Usuario';
});

Route::get('producto', function()
{
    return view('producto.index');
});

Route::get('producto/show/{id}', function($id)
{
    return view('producto.show',array('id'=>$id));
});

Route::get('producto/create', function()
{
    return view('producto.create');
});

Route::get('producto/edit/{id}', function($id)
{
    return view('producto.edit',array('id'=>$id));
});
*/