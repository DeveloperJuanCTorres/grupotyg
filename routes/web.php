<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[AdminController::class, 'index'])->name('index');
Route::get('/about',[AdminController::class, 'nosotros'])->name('about');
Route::get('/service',[AdminController::class, 'servicios'])->name('service');
Route::get('/project',[AdminController::class, 'proyectos'])->name('project');
Route::get('/blog',[AdminController::class, 'posts'])->name('blog');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

 Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
