<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LecturController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ActivityController;
// use App\Http\Controllers\TestController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});
// Route::view('/dosen', 'dosen');
// Route::view('/pengumuman', 'pengumuman');
// Route::view('/mahasiswa', 'mahasiswa');
// Route::view('/kegiatan', 'kegiatan');

Route::resource('student', StudentController::class);
Route::resource('lectur', LecturController::class);
Route::resource('activity', ActivityController::class);
// Route::view('test', 'student.data');
// Route::get('data', [TestController::class, 'index'])->name('data');
// Route::post('image-upload', [ TestController::class, 'store' ])->name('image.upload.post');
// Route::get('/post/{id}/edit', [TestController::class, 'edit'])->name('edit');
// Route::patch('/post/{id}', [TestController::class, 'update'])->name('update');
// Route::delete('/post/{id}', [TestController::class, 'destroy'])->name('destroy');
