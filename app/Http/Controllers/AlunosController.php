<?php

namespace App\Http\Controllers;

use App\Models\Alunos;
use App\Models\Endereco;
use App\Models\User;
use App\Models\Treino;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Psy\Command\WhereamiCommand;


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

        $email_check = User::all()->where('email', '=', $request->email);

        if(sizeof($email_check)> 0 ){
             return to_route('alunos.create');
        }
       

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
        $aluno->endereco_id = $endereco->id;        
        $aluno->user_id = $user->id;
        $aluno->age = Carbon::parse($request->dateBirth)->age;
        $aluno->save();

        return to_route('alunos.index');

    }

    public function destroy(Alunos $aluno){
        $user_id = $aluno->user_id;
        User::destroy($user_id);
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
        $aluno->endereco_id = $endereco->id;        
        $aluno->save();        

        return to_route('alunos.index');
    }

    public function listTreinoFromUser(){
        $logged_user = Auth::user();

        $aluno = Alunos::where('user_id', '=', $logged_user->id)->first();
        $treinos = Treino::all()->where('id_aluno', '=', $aluno->id);

        return view('alunos.treino')
        ->with('treinos', $treinos)
        ->with('user', $logged_user);
    }

    public function show(Alunos $alunos){
        $logged_user = Auth::user();
        $aluno = Alunos::where('user_id', '=', $logged_user->id)->first();
        $endereco = $aluno->endereco;
        return view('alunos.profile')
        ->with('user', $logged_user)
        ->with('aluno', $aluno)
        ->with('e', $endereco);
      
    }
}
