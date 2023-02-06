<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@600&display=swap" rel="stylesheet">
<x-layout title="Treino" :user="$user">

<head>
<link rel="stylesheet" type="text/css" href="{{URL::asset('css/treino/show.css')}}">
</head>

<body>
    <h2>{{$data['treino']->name}}</h2>
    <hr>
    <h3>Exercícios</h3>
    <p class="descricao">{{$data['treino']->description}}</p>


        <div class="card-group">
            @foreach ($data['exercicios'] as $exercicio) 
            <div class="card">      
 
            <p>{{$exercicio->tipo_exercicio->name}}</p>
            <p>Repetições: {{$exercicio->repetitions}}</p>
            <p>Séries: {{$exercicio->sets}}</p>
            <p>Peso: {{$exercicio->weight}} Kg</p>
    
                @if($user->role != 'aluno')
                    <form action="{{route('exercicio.edit', $exercicio->id)}}" method="GET">
                    @csrf
                    <button class="button-editar" type="submit"> Editar </button>
                    </form>
            
                    <form action="{{route('exercicio.destroy', $exercicio->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="button-excluir" type="submit"> Excluir </button>
                    </form>
                @endif 
            
            </div>
            @endforeach
            </div>
    
                @if($user->role != 'aluno')
                <form action="{{route('exercicio.createFromTreino', $data['treino']->id)}}" method="GET">
                @csrf
                <button class="button-adicionar" type="submit"> Adicionar Exercício </button>
                </form>
                @endif
</body>
</x-layout>