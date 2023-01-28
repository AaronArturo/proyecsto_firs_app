<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnosController;
use App\Http\Controllers\MaestrosController;
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
/*
$masters = [
    ['name'=>'sergio panti'],
    ['name'=>'rafael yabur'],
    ['name'=>'raymundo romero'],
    ['name'=>'maria ignot'],
];*/

Route::get('/', function () {
    return view('welcome');
});
Route::view('/adios', 'adios');
Route::view('/welcome', 'welcome');
Route::view('/servicios', 'servicios');
Route::view('/index', 'index');
Route::view('/layout', 'layout');
Route::view('/hola', 'hola');
Route::view('/contacto', 'contacto');



//Route::view('/maestros', 'maestros', ['masters' => $masters])->name('master');
//Route::view('/maestros', 'maestros', compact('masters'))->name('master');


//Route::view('/alumno', 'studens', compact('studens'))->name('studen');
Route::get('/alumns', [AlumnosController::class, 'index'])->name('studen');

Route::get('/master', MaestrosController::class)->name('master');
