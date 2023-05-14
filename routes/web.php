<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'index']);

Route::get('/test', [HomeController::class, 'test']);

Route::get("/dashboard/register_student", [HomeController::class, 'registerView']);

Route::get("/dashboard/students", [HomeController::class, 'showStudents'])->name('/dashboard/students');

Route::post('/dashboard/student/store', [HomeController::class, 'store'])->name('/dashboard/student/store');

Route::get('/search', [HomeController::class, 'search']);

Route::get('/dashboard/students/update/{id}', [HomeController::class, 'update_view']);

Route::get('/dashboard/students/delete/{id}', [HomeController::class, 'delete']);

Route::post('/update/{id}', [HomeController::class, 'update']);

Route::get('/table', [HomeController::class, 'table']);
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
