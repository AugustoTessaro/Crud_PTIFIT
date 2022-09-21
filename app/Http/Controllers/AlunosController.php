<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use Illuminate\Http\Request;

class AlunosController extends Controller
{
    public function index()
    {
        $alunos = Aluno::all();

        return view('alunos.index')
            ->with('alunos', $alunos);
    }

    public function create(){
        return view('alunos.create');
    }

    public function store(Request $request)
    {
        $aluno = Aluno::create($request->all());

        return to_route('alunos.index');

    }

    public function destroy(Aluno $aluno){
        $aluno->delete();

        return to_route('alunos.index');
    }

    public function edit(Aluno $aluno)
    {
        return view('alunos.edit')
            ->with('aluno', $aluno);
    }

    public function update(Request $request, Aluno $aluno)
    {
        $aluno->fill($request->all());
        $aluno->save();

        return to_route('alunos.index');
    }
}
