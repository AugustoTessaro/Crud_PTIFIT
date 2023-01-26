<?php

namespace App\Http\Controllers;

use App\Models\Alunos;
use App\Models\Endereco;
use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class AlunosController extends Controller
{
    public function index()
    {
        $alunos = Alunos::all();
        $logged_user = Auth::user();      
     
        return view('alunos.index')
           ->with('alunos', $alunos)
           ->with('user', $logged_user);
    }

    public function create()
    {
        $logged_user = Auth::user(); 

        return view('alunos.create')
        ->with('user', $logged_user);
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
        $aluno->age = Carbon::parse($request->dateBirth)->age;
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
        $logged_user = Auth::user();
        return view('alunos.edit')
            ->with('aluno', $aluno)
            ->with('user', $logged_user);
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
