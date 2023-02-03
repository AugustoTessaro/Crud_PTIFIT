<?php

namespace App\Http\Controllers;

use App\Models\Equipamento;
use App\Models\TipoExercicio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EquipamentoController extends Controller
{    
    public function index(){
        $logged_user = Auth::user(); 
        $equipamentos = Equipamento::all();
        return view('equipamento.index')
        ->with("user", $logged_user)
        ->with("equipamentos", $equipamentos);
    }

    public function create(){  
        $logged_user = Auth::user();      
        return view('equipamento.create')   
        ->with("user", $logged_user);     
    }

    public function store(Request $request)
    {                                              
        $equipamento = Equipamento::create($request->all());        
        return to_route('equipamento.index');
    }

    public function destroy(Equipamento $equipamento){

        $tipo_exercicios = TipoExercicio::all()->where('id_equipamento', '=', $equipamento->id);
        TipoExercicio::destroy($tipo_exercicios);
        $equipamento->delete();


        return to_route('equipamento.index'); 
    }

    public function edit(Equipamento $equipamento)
    {
        return view('equipamento.edit')
            ->with('equipamento', $equipamento);
    }

    public function update(Request $request, Equipamento $equipamento)
    {   
        $equipamento->update($request->all());
        return to_route('equipamento.index');
    }
}
