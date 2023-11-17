<?php

use App\Http\Controllers\EditController;
use App\Http\Controllers\ExerciseController;
use App\Http\Controllers\PlanController;
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

/*
Plan:
index:
show: Einzelner plan zeigen
create: Plan erstellen
manage: übersicht aller plans zum managen
edit: einzelner plan bearbeiten
delete:

Exercise:
index:
show: Einzelne übung zeigen
create: Übung erstellen
manage: übersicht aller übungen zum managen
edit: Einzelne übung bearbeiten
delete:


*/

Route::get('/', [PlanController::class, 'index']);
Route::get('/plans/create', [PlanController::class, 'create']);
Route::get('/plans/manage', [PlanController::class, 'manage']);
Route::get('/plans/edit/{plan}', [PlanController::class, 'edit']);
Route::put('/plans/update/{plan}', [PlanController::class, 'update']);
Route::get('/plans/{plan}', [PlanController::class, 'show']);
Route::post('/plans/store', [PlanController::class, 'store']);
Route::delete('/plans/delete/{plan}', [PlanController::class, 'delete']);

Route::get('/exercises/create/{plan}', [ExerciseController::class, 'create']);
Route::get('/exercises/manage/{plan}', [ExerciseController::class, 'manage']);
Route::get('/exercises/edit/{exercise}', [ExerciseController::class, 'edit']);
Route::get('/exercises/{exercise}', [ExerciseController::class, 'show']);
Route::put('/exercises/update/{exercise}', [ExerciseController::class, 'update']);
Route::post('/exercises/store/{plan}', [ExerciseController::class, 'store']);
Route::delete('/exercises/delete/{exercise}', [ExerciseController::class, 'delete']);

//Route::get('/edit', [EditController::class, 'index']);
//Route::get('/edit/plans/{plan}', [EditController::class, 'plan']);
//Route::get('/edit/exercises/{exercise}', [EditController::class, 'exercise']);
