<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TrenSkillRoleController;
use App\Http\Controllers\PromotionController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/trends', [TrendController::class, 'index'])->name('trends');
Route::get('/skills', [SkillController::class, 'index'])->name('skills');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/tren-skill-role', [TrenSkillRoleController::class, 'index'])->name('tren_skill_role');

Route::get('/skills/{id}', function ($id) {
    return "Detail skill dengan ID: " . $id;
})->name('skills.details');

Route::get('/promotion', [PromotionController::class, 'index'])->name('promotion');
