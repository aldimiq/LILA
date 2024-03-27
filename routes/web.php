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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

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

// Route::get('/about-us', function () {
//     return view('about',['currentRouteName'=> 'about']);
// });

// Route::get('/about', 'PageController@index')->name('about');
Route::get('/about', [PageController::class, 'about'])->name('about');


require __DIR__.'/auth.php';
