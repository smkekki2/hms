<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AdminController;

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

Route::get('/', function () {
    return view('admin.login');
});
Route::get('/admin/login',function(){
    return view('webapp.login');
});

Route::get('/admin/login' , [AdminController::class,'index'])->name('admin.login');
Route::get('/admin/register' , [AdminController::class,'register']);
Route::post('/admin/registration' , [AdminController::class,'registration'])->name('admin.register');
Route::post('/admin/dasboard' , [AdminController::class,'login'])->name('admin.dashboard');
// Route::group(['middleware' => ['web','checkAdmin']], function(){
//     Route::get('/admin/dasboard' , [AdminController::class,'login'])->name('admin.dashboard');
// });

// Route::group(['middleware' => 'admin_auth'], function(){
//     Route::get('/admin/dasboard' , [AdminController::class,'login'])->name('admin.dashboard');

// });
 

