<?php

use App\Http\Controllers\AutoController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\ModeloController;
use App\Http\Controllers\PersonalController;
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
    return view('home');
})->name('home');

Route::view('categoria', 'categoria')->name('about');

Route::view('personal', 'personal')->name('personal');


// ROUTE PARA MANDAR DATOS A LA VISTA
//Route::get('modelos',function()
//{
//    // ES VÁLIDO PERO SE DEBE RECORDAR QUE PARA TRAER DATOS O PROCESAR
//    // PETICIONES DE LA BDD SE UTILIZA UN CONTROLADOR
//    $autos =
//    [
//        "CHEVROLET"=>'TRACKER',
//        "MAZDA"=>'323',
//        "FORD"=>'RANGER',
//        "KIA"=>'SPORTAGE',
//        "GREAT WALL"=>'WINGLE'
//    ];
//    return view('modelos',compact('autos'));
//})->name('models');

Route::get('Comics',ModeloController::class)->name('Comics');


Route::resource('autos', AutoController::class);

//Route::view('personal','personal')->name('personal');
Route::get('personal',[PersonalController::class,'personal'])->name('personal');

