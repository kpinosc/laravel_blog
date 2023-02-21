<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\PostController;


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
Route::get('/', HomeController::class);
Route::prefix('cursos')->name('cursos.')->controller(CursoController::class)->group(function(){
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::get('/{curso}', 'show')->name('show');
    Route::post('/edit/{curso}', 'edit')->name('edit');
});


Route::resource('post',PostController::class)
    ->names('posts');

Route::get('about',AboutController::class)->name('about.index');

