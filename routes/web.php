<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Usercontroller;
use App\Http\Controllers\ProjectController;
use App\Models\Models\Project;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\UserController::class, 'index'])->name('home');

Route::get('/',[Usercontroller::class,'index']);
Route::get('/uploadpost',[Usercontroller::class,'uploadpost']);
Route::get('/project',[Usercontroller::class,'project'])->name('project');
Route::get('/notifications',[Usercontroller::class,'notifications']);
Route::get('/help',[Usercontroller::class,'help']);
Route::get('/profile',[Usercontroller::class,'profile']);
Route::get('/FrontPage', [UserController::class, 'FrontPage']);
Route::get('/Upgrade', [UserController::class, 'Upgrade']);
Route::get('/Cancel', [UserController::class, 'Cancel']);


Route::get('/project_register', [App\Http\Controllers\ProjectController::class, 'show'])->name('project_register');
Route::post('/project_register',  [App\Http\Controllers\ProjectController::class, 'store']);


Route::get('/project/{slug}', function ($slug) {
    $post = Project::where('slug', $slug)->first();
    return view('user/project_show', compact('post'));
});