<?php

use App\Http\Controllers\admin\RoleController;
use App\Http\Controllers\admin\UserController;
use Illuminate\Support\Facades\Route;

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


Route::get('/academy', function () {
    return view('authentication.login');
});



Route::prefix('/academy')->group(function () {
    Route::get('/admin', function () {
        return view('mypage.index');
    });

    // start role
    Route::prefix('role')->group(function () {
        Route::get('/', [RoleController::class, 'index'])->name('role');
        Route::get('/create', [RoleController::class, 'create'])->name('role.create');
        Route::get('/edit', [RoleController::class, 'update'])->name('role.update');
    });

    // start user
    Route::prefix('user')->group(function () {
        Route::get('/', [UserController::class, 'index'])->name('user');
        Route::get('/create', [UserController::class, 'create'])->name('user.create');
        Route::get('/edit', [UserController::class, 'update'])->name('user.update');
    });
});








// Route::get('/sing-up', function () {
//     return view('authntaction.sing-up');
// })->name('sing-up');