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
Route::get('/service/{service}',[adminController::class,'servicioid'])->name('serviceid');
Route::get('/project',[AdminController::class, 'proyectos'])->name('project');
Route::get('/project/{project}',[adminController::class,'proyectoid'])->name('project.detail');
Route::get('/blog',[AdminController::class, 'posts'])->name('blog');
Route::get('/blog/{blog}',[adminController::class,'postid'])->name('blogid');
Route::get('/contact',[AdminController::class, 'contactanos'])->name('contact');

Route::get('/store',[AdminController::class, 'tienda'])->name('store');
// Route::get('/store', [AdminController::class, 'tienda'])->name('store');

Route::get('facturacion',[AdminController::class, 'facturacion'])->name('facturacion');


Route::post('/correo',[adminController::class,'correo'])->name('correo');
// Route::post('/contact-send', [adminController::class, 'send'])->name('contact.send');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

 Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
