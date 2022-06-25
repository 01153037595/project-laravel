<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
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
    return view('welcome');
});


Route :: get("create",[UsersController :: class,'create'])->name('use create');
Route :: get('/users/{id}', function($id){
    return "User ID: $id";
});
Route :: post("store",[UsersController :: class,'create']);
Route :: put("update",[UsersController :: class,'create']);
Route :: patch("updatce",[UsersController :: class,'create']);
Route :: delete("deleting",[UsersController :: class,'create']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
