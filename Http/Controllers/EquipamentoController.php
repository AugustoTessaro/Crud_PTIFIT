<?php

namespace App\Http\Controllers;

use App\Models\Equipamento;
use Illuminate\Http\Request;

class EquipamentoController extends Controller
{    
    public function index(){
        $equipamentos = Equipamento::all();
        return view('equipamento.index')
        ->with("equipamentos", $equipamentos);
    }

    public function create(){        
        return view('equipamento.create');        
    }

    public function store(Request $request)
    {                                              
        $equipamento = Equipamento::create($request->all());        
        return to_route('equipamento.index');
    }

    public function destroy(Equipamento $equipamento){
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
