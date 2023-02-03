<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@600&display=swap" rel="stylesheet">
<x-layout title="Listagem de Alunos" :user="$user">

    <head>
        <link rel="stylesheet" type="text/css" href="{{URL::asset('css/alunos/index.css')}}">
    </head>



    <body>

        <h2>Alunos</h2>
        <hr>
        <div class="card-group">
            @foreach ($alunos as $aluno)
            <div class="card">
                <div class="card-body">
                    <p class="name">{{$aluno->name}} </p>
                    <p>Idade: {{$aluno->age}}</p>
                    <p>CPF: {{$aluno->CPF}}</p>
                    <p>RG: {{$aluno->RG}}</p>
                    <p>Telefone: {{$aluno->phone}}</p>
                    <p>Cidade: {{$aluno->endereco->city}}</p>
                    <p>Bairro: {{$aluno->endereco->neighborhood}}</p>
                    <p>Rua: {{$aluno->endereco->street}}</p>
                    <p>Número: {{$aluno->endereco->number}}</p>
                    <p>CEP: {{$aluno->endereco->CEP}}</p>
                </div>
                <div class="card-footer">
                    <form action="{{route('alunos.edit', $aluno->id)}}" method="GET">
                        @csrf
                        <button class="button-editar" type="submit"> Editar </button>
                    </form>

                    <form action="{{route('professor.visualizeAlunoTreino', $aluno->id)}}" method="GET">
                        <button class="button-treino"> Ver Treinos </button>
                    </form>

                    <form action="{{route('alunos.destroy', $aluno->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="button-excluir" type="submit"> Excluir </button>
                    </form>
                </div>



            </div>
            @endforeach
        </div>

        <form action="{{route('alunos.create')}}" method="GET">
            <button class="button-adicionar"> Adicionar </button>
        </form>

    </body>
</x-layout>