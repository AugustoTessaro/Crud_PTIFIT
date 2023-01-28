<?php

namespace App\Http\Controllers;

use App\Models\Exercicio;
use App\Models\TipoExercicio;
use App\Models\Treino;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExercicioController extends Controller
{
    public function createFromTreino(Treino $treino){        
        $tipos_exercicio = TipoExercicio::all();
        $logged_user = Auth::user(); 

        $data = [
            "treino" => $treino,
            'tipos_exercicio' => $tipos_exercicio
        ];

        return view('exercicio.create')
        ->with('user', $logged_user)
        ->with('data', $data);
    }
    public function store(Request $request)
    {                                              
        $exercicio = Exercicio::create($request->all());        

        return to_route('treino.show', $exercicio->treino);
    }

    public function destroy(Exercicio $exercicio){
        $treino = $exercicio->treino;
        $exercicio->delete();

        return to_route('treino.show', $treino); 
    }

    public function edit(Exercicio $exercicio)
    {
        $logged_user = Auth::user(); 
        $data = [
            "tipos_exercicio" => TipoExercicio::all(),
            "exercicio" => $exercicio
        ];

        return view('exercicio.edit')
        ->with('user', $logged_user)
            ->with('data', $data);
    }

    public function update(Request $request, Exercicio $exercicio)
    {   
        $exercicio->update($request->all());        

        return to_route('treino.show', $exercicio->treino);
    }
}
