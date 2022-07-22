<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WorksController;
use App\Http\Controllers\WorksAddController;
use App\Http\Controllers\NewsController;

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
    return redirect()->route('home');
});

Route::get('/Home', [HomeController::class, 'view'])->name('home');

Route::get('/About', function () {
    return view('about');
})->name('about');

Route::get('/Login', function () {
    if(Auth::user()) {
        return redirect()->route('admin');
    }
    else {
        return view('login');
    }
    
})->name('login');

Route::get('/admin', [AdminController::class, 'view'])->name('admin');
Route::post('/admin/login', [AdminController::class, 'login'])->name('admin-login');

Route::get('/admin/post/create', [PostController::class, 'create'])->name('post-create');
Route::get('/admin/post/delete/{id}', [PostController::class, 'delete'])->name('post-delete');
Route::get('/admin/post/check/{id}', [PostController::class, 'check'])->name('post-check');
Route::get('/admin/post/geometry/{id}', [PostController::class, 'geometry_get'])->name('geometry-get');
Route::get('/admin/post/work/{id}', [PostController::class, 'work_get'])->name('work-get');
Route::post('/admin/post/change', [PostController::class, 'change'])->name('post-change');

Route::get('/admin/news/create', [NewsController::class, 'create'])->name('create-news');
Route::get('/admin/news/delete/{id}', [NewsController::class, 'delete'])->name('delete-news');
Route::get('/admin/news/change', [NewsController::class, 'change'])->name('change-news');

Route::post('/works/add', [WorksAddController::class, 'worksAdd'])->name('works-add');
Route::post('/works/change', [WorksAddController::class, 'work_change'])->name('works-change');
Route::get('/admin/delete/{id}', [WorksAddController::class, 'work_delete'])->name('works-delete');
Route::get('/works/{category}', [WorksController::class, 'works'])->name('works');
Route::get('/works/{category}/{id}', [WorksController::class, 'projectView'])->name('projectView');



