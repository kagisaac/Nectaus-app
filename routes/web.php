<?php

use App\Http\Controllers\HiveController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserDashboardController;
use App\Http\Controllers\InspectionController;

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

Route::get('/index', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('landingPage');
});
Route::get('/dash', function () {
    return view('nectausDash');
});
Route::get('/home', function () {
    return view('dashPages.home');
});
Route::get('/singleHive', function () {
    return view('dashPages.singleHive');
});

Route::get('/addInspections', function () {
    return view('formModels.inspectionModel');
});
Route::get('/inspections',[InspectionController::class,'displayInspection'])->name('display.inspection');
Route::post('/addInspection',[InspectionController::class, 'createInspection'])->name('create.inspection');

Route::get('/hive/{hiveId}/singleHive', [HiveController::class, 'displaySingleHive' ])->name('display.displaySingleHive');
Route::get('/home', [HiveController::class, 'displayHivedash' ])->name('display.DashCards');
Route::get('/hive', [HiveController::class, 'displayHive' ])->name('display.Hive');
Route::get('/addHive', [HiveController::class, 'addHive' ])->name('add.MyHive');
Route::post('/addHive', [HiveController::class, 'createHive' ])->name('create.Hive');
// Route::get('/addInspection', [HiveController::class, 'addHive' ])->name('add.MyHive');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/user/dashboard/home', [UserDashboardController::class, 'home'])->name('user.dashboard.home');
    Route::get('/user/dashboard/hives', [UserDashboardController::class, 'hives'])->name('user.dashboard.hives');
    Route::get('/user/dashboard/inspection', [UserDashboardController::class, 'inspection'])->name('user.dashboard.inspection');
    // Add other routes for different pages
});

require __DIR__.'/auth.php';