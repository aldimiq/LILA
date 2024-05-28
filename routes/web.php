<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ProjectCategoryController;
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

// Route::get('/', function () {
//     return view('welcome',['currentRouteName'=> 'welcome']);
// });

Route::get('/admin/dashboard', function () {
    return view('/admin/dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    Route::resource('team', TeamController::class);
    Route::resource('project', ProjectController::class);
    Route::resource('project_category', ProjectCategoryController::class);
});

Route::get('/', [PageController::class, 'welcome'])->name('welcome');
Route::get('/environmental-and-social-assesment', [PageController::class, 'environmental'])->name('environmental');
Route::get('/data-analytics-and-system-development', [PageController::class, 'data_analytics'])->name('data_analytics');
Route::get('/organizational-change-management', [PageController::class, 'organizational'])->name('organizational');
Route::get('/capacity-building-and-technical-assistance', [PageController::class, 'capacity_building'])->name('capacity_building');
Route::get('/projects', [PageController::class, 'projects'])->name('projects');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/projects/{project:title}', [PageController::class, 'project_show'])->name('projects.show');
Route::post('/projects/{project}/publish', [ProjectController::class, 'publish'])->name('project.publish');
Route::post('/projects/{project}/unpublish', [ProjectController::class, 'unpublish'])->name('project.unpublish');
require __DIR__.'/auth.php';
