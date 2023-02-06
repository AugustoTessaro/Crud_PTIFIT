<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {


            $validator = Validator::make($request->all(),  [
                'email' =>  'required|email' ,
                'password' => 'required'
            ],
            [
                'email.required'  => 'Digite seu email',
                'email.email'  => 'Digite um email válido',
                'password.required' => 'Digite sua senha' 
            ]);
           
      
        if($validator->fails())
        {
            return redirect()->to('login')
                ->withErrors($validator)
                ->withInput();
        }

        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if(!Auth::attempt($credentials)){

            return redirect()->to('login')->withErrors(['message' => 'Credenciais inválidas']);
          }

        $user = Auth::getProvider()->retrieveByCredentials($credentials);

        Auth::login($user);

        if($user->role == 'aluno'):
            return redirect()->to('alunos/treino');
        endif;
        return redirect()->to('alunos');
    }
}
