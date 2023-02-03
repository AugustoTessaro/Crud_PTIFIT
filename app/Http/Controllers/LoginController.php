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

        $request->validate(
            [
                'email' =>  'required|email' ,
                'password' => 'required'
            ],
            [
                'email.required'  => 'Digite seu email',
                'email.email'  => 'Digite um email válido',
                'password.required' => 'Digite sua senha' 
            ]
        );

        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if(!Auth::validate($credentials)):
            return redirect()->to('login')
            ->withErrors(trans('auth.failed'));
        endif;

        $user = Auth::getProvider()->retrieveByCredentials($credentials);

        Auth::login($user);

        if($user->role == 'aluno'):
            return redirect()->to('alunos/treino');
        endif;
        return redirect()->to('alunos');
    }


}
