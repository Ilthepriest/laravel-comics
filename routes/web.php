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

Route::get('/', function () {
    $fumetti = config('db.fumetti');
    return view('home', compact('fumetti'));
})->name('home');

Route::get('/fumetto/{id}', function ($id) {
    $fumetti = config('db.fumetti');
    if($id >= 0 && is_numeric($id) && $id < count($fumetti)){
        $fumetto = $fumetti[$id];
        return view('fumetti.show', compact('fumetto'));
    }else{
        abort(404);
    }
})->name('fumetti.show');

// Route::get('/chi_siamo', function () {
//     return view('chi_siamo');
// })->name('chi_siamo');