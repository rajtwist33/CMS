<?php

use Illuminate\Support\Facades\Route;
use App\Models\backend\Companysetting;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\backend\CompanysettingController;
use App\Http\Controllers\backend\usermanagement\PermissionController;
use App\Http\Controllers\backend\usermanagement\RoleController;

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

Route::get('/dashboard', function () {
    $setting = Companysetting::with('link')->first();
    return view('backend.dashboard',compact('setting'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'verified']], function () {
    Route::group(['namespace' => 'App\Http\Controllers\backend', 'as' => 'admin.'], function () {
        Route::resources(
            [
                'settings' => CompanysettingController::class,
                'permission'=>PermissionController::class,
                'roles'=>RoleController::class,
            ]
        );

    });

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
