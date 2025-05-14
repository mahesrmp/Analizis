<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TrenSkillRoleController;

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


Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/profile', [AuthController::class, 'profile'])->name('profile');
Route::post('/login', [AuthController::class, 'proseslogin'])->name('login.post');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'processRegister'])->name('register.process');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/tren-skill-role', [TrenSkillRoleController::class, 'index'])->name('tren_skill_role');
Route::get('/course', [CourseController::class, 'index'])->name('course');
Route::get('/forum-diskusi', [CourseController::class, 'index'])->name('forum-diskusi');
Route::get('/tentang-analyzis', [CourseController::class, 'index'])->name('tentang-analyzis');
Route::get('/skill/{id}', [TrenSkillRoleController::class, 'show'])->name('tren-skill-role.detail');

Route::get('/skills/{id}', function ($id) {
    return "Detail skill dengan ID: " . $id;
})->name('skills.details');

Route::get('/promotion', function () {
    return view('promotion');
})->name('promotion');
