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
    return view('welcome');
});
//string
Route::get('coba', function(){
    return "Halo";
});
//array
Route::get('coba 1', function(){
    return['petra', 'noval'];
});
//objek json
Route::get('coba 2', function(){
    return[
        'Nama' => 'Petra Sola',
        'Kelas' => 'XII RPL 5',
        'NIS' => 3103120175
    ];
});
//objek json
Route::get('coba 3', function(){
    return response()->json(
        [
            'Nama' => 'Petra Sola',
            'Kelas' => 'XII RPL 5',
            'NIS' => 3103120175
        ],201
    );
});
