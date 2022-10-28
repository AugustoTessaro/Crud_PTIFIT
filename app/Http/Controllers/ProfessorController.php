<?php

namespace App\Http\Controllers;

use App\Models\Alunos;
use App\Models\Endereco;
use App\Models\Professor;
use App\Models\Treino;
use App\Models\User;
use Illuminate\Http\Request;

class ProfessorController extends Controller
{
    public function index()
    {
        $alunos = Alunos::all();        

        $user = auth()->user();

        if($user->role != 'professor'){
            abort(403);
        } 

        return view('professor.index')
           ->with('alunos', $alunos);
    }

    public function create(){
        return view('professor.create');
    }

    public function store(Request $request)
    {                  
        $user = new User();
        $user->password = $request->password;
        $user->email = $request->email;
        $user->role = 'professor';

        $user->save();        

        $endereco = new Endereco();
        $endereco->city = $request->city;
        $endereco->neighborhood = $request->neighborhood;
        $endereco->CEP = $request->CEP;
        $endereco->number = $request->number;
        $endereco->street = $request->street;        
        $endereco->save();

        $professor = new Professor();
        $professor->name = $request->name;        
        $professor->CPF = $request->CPF;        
        $professor->phone = $request->phone;                
        $professor->professional_qualification = $request->professional_qualification;                
        $professor->id_endereco = $endereco->id;        
        $professor->id_user = $user->id;
        $professor->save();

        auth()->login($user);

        return to_route('professor.index');

    }

    public function destroy(Professor $professor){
        $professor->delete();

        return to_route('professor.index');
    }

    public function edit(Professor $professor)
    {
        return view('professor.edit')
            ->with('professor', $professor);
    }

    public function update(Request $request, Professor $professor)
    {
        $endereco = $professor->endereco;
        $endereco->city = $request->city;
        $endereco->neighborhood = $request->neighborhood;
        $endereco->CEP = $request->CEP;
        $endereco->number = $request->number;
        $endereco->street = $request->street;        
        $endereco->save();
                
        $professor->name = $request->name;        
        $professor->CPF = $request->CPF;        
        $professor->phone = $request->phone;                
        $professor->professional_qualification = $request->professional_qualification;                
        $professor->id_endereco = $endereco->id;
        $professor->save();    

        return to_route('professor.index');
    }

    public function show(Professor $professor){
        echo "oi";
    }

    public function visualizeAlunoTreino(Alunos $aluno){                
        $treinos = Treino::all()->where('id_aluno', '=', $aluno->id);

        $data = [
            'treinos'=>$treinos,
            'aluno'=>$aluno
        ];        

        return view('professor.aluno')
            ->with('data', $data);
    }
}
