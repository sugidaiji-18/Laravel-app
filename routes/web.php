<?php

use Illuminate\Support\Facades\Route;
//use \App\Http\Controllers\HelloController;

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


Route::get('adminlte',function(){
    return view('adminlte');
});
Route::get('/hello',function(){
    return view('hello');
});


Route::get('/', function () {
    return view('welcome');
});
Route::get('/hello','HelloController@index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
