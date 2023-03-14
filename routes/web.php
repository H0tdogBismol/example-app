<?php

use App\Http\Controllers\PreguntaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExamenController;

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

Route::resource('/preguntas', PreguntaController::class);

Route::resource('/examen', ExamenController::class);

?>
