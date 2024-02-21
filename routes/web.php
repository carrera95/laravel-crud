<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;
use Faker\Guesser\Name;
use Illuminate\Database\Query\IndexHint;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
Route::post('', 'UserController@index')->name('user');
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', HomeController::class);

// Route::get('curso', [CursoController::class, 'index']);
// Route::get('curso/create', [CursoController::class, 'create']);
// Route::get('curso/{curso}', [CursoController::class, 'show']);

Route::controller(CursoController::class)->group(function(){
    Route::get('curso', 'index')->name('cursos.index');
    Route::get('curso/create', 'create')->name('cursos.create');
    Route::post('curso', 'store')->name('curso.store');
    Route::get('curso/{curso}', 'show')->name('cursos.show');
    Route::get('curso/{curso}/edit', 'edit')->name('cursos.edit');
    Route::put('cursos/{curso}', 'update')->name('cursos.update');
    Route::delete('curso/{curso}', 'destroy')->name('cursos.destroy');
});