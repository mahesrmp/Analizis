<?php

use Illuminate\Support\Facades\Route;
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


Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/tren-skill-role', [TrenSkillRoleController::class, 'index'])->name('tren_skill_role');
Route::get('/skill/{id}', [TrenSkillRoleController::class, 'show'])->name('skill.detail');

Route::get('/skills/{id}', function ($id) {
    return "Detail skill dengan ID: " . $id;
})->name('skills.details');
