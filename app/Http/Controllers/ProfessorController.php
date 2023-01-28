<?php

namespace App\Http\Controllers;

use App\Models\Alunos;
use App\Models\Endereco;
use App\Models\Professor;
use App\Models\Treino;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class ProfessorController extends Controller
{  
   
    public function index()
    {
        $alunos = Alunos::all();  
        $professores = Professor::all();
                 
        $logged_user = Auth::user(); 
        $user = auth()->user();

         if($user->role != 'professor' && $user->role != 'admin'){
           abort(403);
         } 

        return view('professor.index_professor')
             ->with('professores', $professores)
             ->with('alunos', $alunos)
             ->with('user', $logged_user);
    }

    public function create(){
        $logged_user = Auth::user(); 
        return view('professor.create')
        ->with('user', $logged_user);
    }

    public function store(Request $request)
    {                  
        $user = new User();
        $user->password = $request->password;
        $user->email = $request->email;
        $user->role = 'professor';

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

        $professor = new Professor();
        $professor->name = $request->name;  
        $professor->dateBirth = $request->dateBirth;      
        $professor->CPF = $request->CPF;       
        $professor->RG = $request->RG;     
        $professor->phone = $request->phone;                
        $professor->professional_qualification = $request->professional_qualification;                
        $professor->endereco_id = $endereco->id;        
        $professor->user_id = $user->id;
        $professor->age = Carbon::parse($request->dateBirth)->age;
        $professor->save();

        return to_route('professor.index');

    }

    public function destroy(Professor $professor){

        $user_id = $professor->user_id;
        User::destroy($user_id);
        $professor->delete();

        return to_route('professor.index');
    }

    public function edit(Professor $professor)
    {
        $logged_user = Auth::user(); 
        return view('professor.edit')
            ->with('professor', $professor)
            ->with('user', $logged_user);
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
        $professor->endereco_id = $endereco->id;
        $professor->save();    

        return to_route('professor.index');
    }

    public function show(Professor $professor){
        $logged_user = Auth::user();
        $p = Professor::where('user_id', '=', $logged_user->id)->first();
        $endereco = $p->endereco;
        
        return view('professor.profile')
        ->with('user', $logged_user)
        ->with('professor', $p)
        ->with('e', $endereco);
    }

    public function visualizeAlunoTreino(Alunos $aluno){  
        $logged_user = Auth::user();              
        $treinos = Treino::all()->where('id_aluno', '=', $aluno->id);

        $data = [
            'treinos'=>$treinos,
            'aluno'=>$aluno
        ];        
        
        return view('professor.aluno')
            ->with('data', $data)
            ->with('user', $logged_user);
    }


}


