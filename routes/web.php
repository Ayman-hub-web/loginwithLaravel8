<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\User\Profile;

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

Route::get('/home', function(Request $request){
    return view('index');
})->middleware('auth');

####### User  ########
Route::prefix('user')->middleware(['auth', 'verified'])->name('user.')->group(function(){
    Route::get('/profile', Profile::class)->name('profile');
});
####### User  ########
####### Admin ########
Route::prefix('admin')->middleware(['auth', 'auth.isAdmin', 'verified'])->name('admin.')->group(function(){
    Route::resource('/users', UserController::class);
});

####### Admin ########