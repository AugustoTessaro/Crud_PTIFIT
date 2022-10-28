<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlunosController;
use App\Http\Controllers\EquipamentoController;
use App\Http\Controllers\ExercicioController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ProfessorController;
use App\Http\Controllers\TipoExercicioController;
use App\Http\Controllers\TreinoController;
use App\Models\Equipamento;

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
    return redirect('/alunos');
});

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'login'])->name('login.perform');

Route::group(['middleware' => ['auth']], function() {
    Route::resource('/alunos', AlunosController::class);
    Route::get('/logout', [LogoutController::class, 'perform'])->name('logout');  

    Route::resource('/professor', ProfessorController::class);
    Route::get('/professor/visualize-aluno-treino/{aluno}', [ProfessorController::class, 'visualizeAlunoTreino'])->name('professor.visualizeAlunoTreino');

    Route::resource('/treino', TreinoController::class);
    Route::get('/treino/create/{aluno}', [TreinoController::class, 'createFromAluno'])->name('treino.createFromAluno');

    Route::resource('/exercicio', ExercicioController::class);
    Route::get('/exercicio/create/{treino}', [ExercicioController::class, 'createFromTreino'])->name('exercicio.createFromTreino');

    Route::resource("/equipamento", EquipamentoController::class);

    Route::resource("/tipo-exercicio", TipoExercicioController::class);
});
