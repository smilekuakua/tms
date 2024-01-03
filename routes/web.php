<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TrainingController;
use App\Http\Controllers\TrainingdaysController;
use App\Http\Controllers\EvaluationController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\AnnouncementController;


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
})->name('welcome');
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {

    /*
     |Profile's routes---------------------------------------------------------------------
    */

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    /*
     |Application's routes---------------------------------------------------------------------
    */

    Route::get('/application', [ApplicationController::class, 'index'])->name('application.index');
    Route::post('/application', [ApplicationController::class, 'store'])->name('application.store');

    /*
    |Training's routes---------------------------------------------------------------------
    */

    Route::resource('/training', TrainingController::class);
    Route::get('/training/{id}/create', [TrainingController::class, 'create'])->name('training.create');
    Route::post('/trainingdays', [TrainingdaysController::class, 'store'])->name('trainingdays.save');

    /*
     |Documents's routes---------------------------------------------------------------------
    */
    Route::resource('/document', DocumentController::class);

});

Route::middleware(['auth','worker'])->group(function () {

    Route::get('/application/{id}/intern', [ApplicationController::class,'intern'])->name('application.intern');


    Route::get('/evaluation/{id}', [EvaluationController::class,'index'])->name('evaluation.index');
    Route::post('/evaluation/store', [EvaluationController::class,'store'])->name('evaluation.store');

    /*
     |announcement's routes---------------------------------------------------------------------
    */
    Route::get('/announcement', [AnnouncementController::class, 'create'])->name('announcement.create');
    Route::post('/announcement', [AnnouncementController::class, 'store'])->name('announcement.store');
    Route::get('announcement/{announcement}/edit', [AnnouncementController::class, 'edit'])->name('announcement.edit');
    Route::put('announcement/{announcement}', [AnnouncementController::class, 'update'])->name('announcement.update');
    Route::delete('announcement/{announcement}', [AnnouncementController::class, 'destroy'])->name('announcement.destroy');
    Route::get('announcement/{id}/show', [AnnouncementController::class, 'show'])->name('announcement.show');
});


require __DIR__ . '/auth.php';
