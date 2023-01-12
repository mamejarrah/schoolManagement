<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StudentController;
use App\Http\Controllers\FiliereController;

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

Route::get('/home', function () {
    return view('home');
});

Route::resource('students' , StudentController::class);

Route::resource('filieres', FiliereController::class);

Route::get('/students.info', [StudentController::class, 'indexliste0'])->name('info');

Route::get('/students.bureau', [StudentController::class, 'indexliste1'])->name('bureau');

Route::get('/students.resource', [StudentController::class, 'indexliste2'])->name('resource');

Route::get('/students.mark', [StudentController::class, 'indexliste3'])->name('mark');

Route::get('/students.dev', [StudentController::class, 'indexliste4'])->name('dev');

Route::get('/students.graph', [StudentController::class, 'indexliste5'])->name('graph');