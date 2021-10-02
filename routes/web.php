<?php
use App\Http\Controllers\DocenteController;
use App\Http\Controllers\MateriaController;
use App\Http\Controllers\PackController;
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
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('docentes',DocenteController::class)->names('admin.docentes');
Route::resource('materias',MateriaController::class);
Route::resource('packs',PackController::class);
route::get('/postMaterias',[MateriaController::class,'indexPost']);
route::get('/postPacks',[PackController::class,'indexPost']);
