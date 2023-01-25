<?php

namespace App\Http\Controllers;

use App\Models\Equipamento;
use App\Models\TipoExercicio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TipoExercicioController extends Controller
{
    public function index(){
        $logged_user = Auth::user(); 
        $tipos_exericicio = TipoExercicio::all();
        return view('tipo_exercicio.index')
        ->with("tipos_exercicio", $tipos_exericicio)
        ->with("user", $logged_user);
    }

    public function create(){  
        $logged_user = Auth::user(); 
        $equipamentos = Equipamento::all();
        return view('tipo_exercicio.create')
        ->with("equipamentos", $equipamentos)       
        ->with("user", $logged_user);
    }

    public function store(Request $request)
    {                                              
        TipoExercicio::create($request->all());        
        return to_route('tipo_exercicio.index');
    }

    public function destroy(TipoExercicio $tipo_exercicio){
        $tipo_exercicio->delete();

        return to_route('tipo_exercicio.index'); 
    }

    public function edit(TipoExercicio $tipo_exercicio)
    {
        $logged_user = Auth::user(); 
        $equipamentos = Equipamento::all();

        $data = [
            "equipamentos" => $equipamentos,
            "tipo_exercicio" => $tipo_exercicio
        ];
        return view('tipo_exercicio.edit')
            ->with('data', $data)
            ->with("user", $logged_user);
    }

    public function update(Request $request, TipoExercicio $tipo_exercicio)
    {   
        $tipo_exercicio->update($request->all());
        return to_route('tipo_exercicio.index');
    }
}
