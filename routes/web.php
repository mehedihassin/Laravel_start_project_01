<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

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

Route::get('/welcome', function () {
    return view('welcome');
});


Route::get('/student_create', [StudentController::class, 'show'])->name('student_create');
Route::get('/login_page', [StudentController::class, 'login'])->name('login');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');
