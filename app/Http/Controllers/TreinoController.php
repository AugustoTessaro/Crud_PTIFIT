<?php

namespace App\Http\Controllers;

use App\Models\Alunos;
use App\Models\Exercicio;
use App\Models\Treino;
use Illuminate\Http\Request;

class TreinoController extends Controller
{
    public function show(Treino $treino){
        $exercicios = Exercicio::all()->where('id_treino', '=', $treino->id);
        $data = [
            "exercicios" => $exercicios,
            "treino" => $treino
        ];
        return view('treino.show')
        ->with("data", $data);
    }

    public function createFromAluno(Alunos $aluno){        
        return view('treino.create')
        ->with('aluno', $aluno);
    }

    public function store(Request $request)
    {                                              
        $treino = Treino::create($request->all());        
        return to_route('treino.show', $treino);
    }

    public function destroy(Treino $treino){
        $treino->delete();

        return to_route('professor.index'); 
    }

    public function edit(Treino $treino)
    {
        return view('treino.edit')
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
