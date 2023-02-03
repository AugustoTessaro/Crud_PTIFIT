<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@600&display=swap" rel="stylesheet">
<x-layout title="Treinos" :user="$user">

<head>
<link rel="stylesheet" type="text/css" href="{{URL::asset('css/professores/aluno.css')}}">
</head>

<h2>{{$data['aluno']->name}}</h2>  
<hr>

    <div class="card-group">
    @foreach ($data['treinos'] as $treino)
    <div class="card rounded-4">
       
        <div class="card-body">
        <h3>{{$treino->name}}</h3>
        <p>Início: {{$treino->init_date}}</p>    
        <p>Fim: {{$treino->end_date}}</p>
        </div>
            <div class="card-footer">
            <form action="{{route('treino.edit', $treino->id)}}" method="GET">
            <button class="button-editar" type="submit">Editar Treino</button>
            </form>               
                    

            <form action="{{route('exercicio.createFromTreino', $treino->id)}}" method="GET">
            <button class="button-editar" type="submit">Adicionar exercício</button>
            </form>    
            
            <form action="{{route('treino.show', $treino->id)}}" method= "GET">
            <button class="button-editar" type="submit">Ver Treino</button>
            </form>
            
            <form action="{{route('treino.destroy', $treino->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <button class="button-excluir" type="submit"> Excluir </button>
            </form>
            </div> 
            </div>
            @endforeach
            </div>
    
    {{-- <form action="{{route('aluno.create')}}" method= "GET">
    <button class="criar-treino"> Criar Treino </button>
    </form> --}}
    <form action="{{route('treino.createFromAluno', $data)}}" method= "GET">
    <button class="criar-treino"> Criar Treino </button>
    </form>
</x-layout>
