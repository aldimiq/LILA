<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PageController;
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

Route::get('/', function () {
    return view('welcome',['currentRouteName'=> 'welcome']);
});

Route::get('/admin/dashboard', function () {
    return view('/admin/dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/admin/projects', function () {
    return view('/admin/projects');
})->middleware(['auth', 'verified'])->name('projects');

Route::get('/admin/team', function () {
    return view('/admin/team');
})->middleware(['auth', 'verified'])->name('team');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/environmental-and-social-assesement', function () {
    return view('esa',['currentRouteName'=> 'environmental']);
});

Route::get('/data-analytics-and-system-development', function () {
    return view('dasd',['currentRouteName'=> 'data']);
});

Route::get('/organizational-change-management', function () {
    return view('ocm',['currentRouteName'=> 'organizational']);
});

Route::get('/capacity-building-and-technical-assistance', function () {
    return view('cbta',['currentRouteName'=> 'capacity']);
});

Route::get('/projects', function () {
    return view('projects',['currentRouteName'=> 'projects']);
});

Route::get('/about', [PageController::class, 'about'])->name('about');


require __DIR__.'/auth.php';
