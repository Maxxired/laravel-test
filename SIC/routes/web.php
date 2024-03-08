<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DocentesController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StudentController1;
use App\Http\Middleware\Authenticate;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SubjectController;

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
});

Route::resource('/estudiantes', StudentController::class);

Route::get('/form-estudiantes', [StudentController::class, 'index']);
Route::post('/form-estudiantes', [StudentController::class, 'store']);

Route::get('admin', function () {
   // acceso a un usuario autenticado
})->middleware('auth');

// public function __construct()
// {
//     $this->middleware('auth')->only("create", "update");
// }

// Mostrando el formulario
//Route::get('/alumno',[studentController::class, 'index']);
//Route::post('/alumno',[studentController::class, 'store']);

/*
Route::get('/maestros', [DocentesController::class,'index']);

Route::get('/tilines/{matricula}', function ($matricula) {
    return view('estudiantes')->with('alumno',$matricula);
});*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('asignaturas', SubjectController::class);

require __DIR__.'/auth.php';
