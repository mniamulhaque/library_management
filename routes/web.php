<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\dashboardCon;
use App\Http\Controllers\bookSelfCon;
use App\Http\Controllers\excelFileUploadCon;
use App\Http\Controllers\memberCon;
use App\Http\Controllers\issueCon;
use App\Http\Controllers\renkCon;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/login');
});

Route::get('/register', function () {
    return redirect('/login');
})->name('register');


Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [dashboardCon::class, 'view'])->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

     Route::resource('/book_shelves', bookSelfCon::class);
     Route::get('/armyCretate', [bookSelfCon::class, 'armyCretate']);
     Route::get('/armyBookList', [bookSelfCon::class, 'armyBookList']);
     //excel file Upload
     Route::get('/uploadExcelCreate', [excelFileUploadCon::class, 'uploadExcelCreate']);
     Route::post('/uploadExcelPost', [excelFileUploadCon::class, 'uploadExcelPost']);

     //Member
     Route::resource('/members', memberCon::class);
     //Issue
     Route::resource('/issues', issueCon::class);
     Route::get('/returnIssue/{id}', [issueCon::class, 'returnIssue']);
     Route::post('/returnIssuePost/', [issueCon::class, 'returnIssuePost']);

     Route::resource('/rankk', renkCon::class);
     Route::post('/test', [bookSelfCon::class, 'test']);
});



require __DIR__.'/auth.php';
