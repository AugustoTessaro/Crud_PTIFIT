<?php

namespace App\Http\Controllers;

use App\Models\Alunos;
use App\Models\Endereco;
use App\Models\User;
use Illuminate\Http\Request;

class AlunosController extends Controller
{
    public function index()
    {
        $alunos = Alunos::all();        

        $user = auth()->user();

        return view('alunos.index')
           ->with('alunos', $alunos);
    }

    public function create(){
        return view('alunos.create');
    }

    public function store(Request $request)
    {                  
        $user = new User();
        $user->password = $request->password;
        $user->email = $request->email;
        $user->role = 'aluno';

        $user->save();        

        $endereco = new Endereco();
        $endereco->city = $request->city;
        $endereco->neighborhood = $request->neighborhood;
        $endereco->CEP = $request->CEP;
        $endereco->number = $request->number;
        $endereco->street = $request->street;        
        $endereco->save();

        $aluno = new Alunos();
        $aluno->name = $request->name;
        $aluno->dateBirth = $request->dateBirth;
        $aluno->CPF = $request->CPF;
        $aluno->RG = $request->RG;
        $aluno->phone = $request->phone;                
        $aluno->id_endereco = $endereco->id;        
        $aluno->id_user = $user->id;
        $aluno->save();

        auth()->login($user);

        return to_route('alunos.index');

    }

    public function destroy(Alunos $aluno){
        $aluno->delete();

        return to_route('alunos.index');
    }

    public function edit(Alunos $aluno)
    {
        return view('alunos.edit')
            ->with('aluno', $aluno);
    }

    public function update(Request $request, Alunos $aluno)
    {
        $endereco = $aluno->endereco;
        $endereco->city = $request->city;
        $endereco->neighborhood = $request->neighborhood;
        $endereco->CEP = $request->CEP;
        $endereco->number = $request->number;
        $endereco->street = $request->street;        
        $endereco->save();
        
        $aluno->name = $request->name;
        $aluno->dateBirth = $request->dateBirth;
        $aluno->CPF = $request->CPF;
        $aluno->RG = $request->RG;
        $aluno->phone = $request->phone;        
        $aluno->id_endereco = $endereco->id;        
        $aluno->save();        

        return to_route('alunos.index');
    }
}
