<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TeacherController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\MajorController;

use App\Http\Controllers\SchoolClass\IndexController;
use App\Http\Controllers\SchoolClass\CreateController;
use App\Http\Controllers\SchoolClass\StoreController;
use App\Http\Controllers\SchoolClass\ShowController;
use App\Http\Controllers\SchoolClass\EditController;
use App\Http\Controllers\SchoolClass\UpdateController;
use App\Http\Controllers\SchoolClass\DestroyController;

Route::get('/', function () {
    return view('welcome');
});

// Manajemen Data Siswa (Action Controller)
Route::name('students.')->prefix('students')->group(function () {

    // Halaman Daftar Siswa
    Route::get('/', [StudentController::class, 'index'])->name('index');

    // Halaman Detail Siswa
    Route::get('/{id}', [StudentController::class, 'show'])->name('show');

    // Halaman Tambah Siswa
    Route::get('/create', [StudentController::class, 'create'])->name('create');

    // Halaman Edit Siswa
    Route::get('/{id}/edit', [StudentController::class, 'edit'])->name('edit');

    // Logika Tambah Siswa
    Route::post('/', [StudentController::class, 'store'])->name('store');

    // Logika Edit Siswa
    Route::put('/{id}', [StudentController::class, 'update'])->name('update');

    // Logika Hapus Siswa
    Route::delete('/{id}', [StudentController::class, 'destroy'])->name('destroy');
});

//Management Data Guru (Invokable)
Route::name('teachers.')->prefix('teachers')->group(function () {
    // Halaman Daftar Guru
    Route::get('/', [TeacherController::class, 'index'])->name('index');

    // Halaman Detail Guru
    Route::get('/{id}', [TeacherController::class, 'show'])->name('show');

    // Halaman Tambah Guru
    Route::get('/create', [TeacherController::class, 'create'])->name('create');

    // Halaman Edit Guru
    Route::get('/{id}/edit', [TeacherController::class, 'edit'])->name('edit');

    // Logika Tambah Guru
    Route::post('/', [TeacherController::class, 'store'])->name('store');

    // Logika Edit Guru
    Route::put('/{id}', [TeacherController::class, 'update'])->name('update');

    // Logika Hapus Guru
    Route::delete('/{id}', [TeacherController::class, 'destroy'])->name('destroy');
});

Route::prefix('classes')->name('classes.')->group(function () {

        Route::get('/', [IndexController::class])->name('index');

        Route::get('/create', [CreateController::class])->name('create');

        Route::post('/', [StoreController::class])->name('store');

        Route::get('/{id}', [ShowController::class])->name('show');

        Route::get('/{id}/edit', [EditController::class])->name('edit');

        Route::put('/{id}', UpdateController::class)->name('update');

        Route::delete('/{id}', DestroyController::class)->name('destroy');
});

Route::resource('majors', MajorController::class);