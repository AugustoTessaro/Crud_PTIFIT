<?php

namespace App\Http\Controllers;

use App\Models\Alunos;
use App\Models\Exercicio;
use App\Models\Treino;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TreinoController extends Controller
{
   
    public function show(Treino $treino){
        $logged_user = Auth::user();
        $exercicios = Exercicio::all()->where('treino_id', '=', $treino->id);
        $data = [
            "exercicios" => $exercicios,
            "treino" => $treino
        ];
    
        return view('treino.show')
        ->with('user', $logged_user)
        ->with("data", $data);
    }

    public function createFromAluno(Alunos $aluno){   
        $logged_user = Auth::user();

        return view('treino.create')
        ->with('user', $logged_user)
        ->with('aluno', $aluno);
    }

    public function store(Request $request)
    {                                              
        $treino = Treino::create($request->all());        
        return to_route('treino.show', $treino);
    }

    public function destroy(Treino $treino){

        $aluno_id = $treino->id_aluno;
        $exercicios = Exercicio::all()->where('treino_id', '=', $treino->id);
        Exercicio::destroy($exercicios);
        $treino->delete();
        return to_route('professor.visualizeAlunoTreino', $aluno_id); 
    }

    public function edit(Treino $treino)
    {
        $logged_user = Auth::user();
        return view('treino.edit')
            ->with('user', $logged_user)
            ->with('treino', $treino);
    }

    public function update(Request $request, Treino $treino)
    {   
        $treino->name = $request->name;
        $treino->description = $request->description;
        $treino->init_date = $request->init_date;
        $treino->end_date = $request->end_date;
        
        $treino->save();

        return to_route('professor.index');
    }
}
