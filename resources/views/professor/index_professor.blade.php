<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@600&display=swap" rel="stylesheet">
<x-layout title="Listagem de professores" :user="$user">

<head>
<link rel="stylesheet" type="text/css" href="{{URL::asset('css/professores/index.css')}}">
</head>

<h2>Professores</h2>
<hr>

<body>
    <div class="card-group">
    @foreach ($professores as $professor)
    <div class="card">

        <h4>{{$professor->name}}</h4>
        <p>Idade: {{$professor->age}}</p>
        <p>CPF: {{$professor->CPF}}</p>
        <p>RG: {{$professor->RG}}</p>
        <p>Telefone: {{$professor->phone}}</p>
        <p>Cidade: {{$professor->endereco->city}}</p>
        <p>Bairro: {{$professor->endereco->neighborhood}}</p>
        <p>Rua: {{$professor->endereco->street}}</p>
        <p>Número: {{$professor->endereco->number}}</p>
        <p>CEP: {{$professor->endereco->CEP}}</p>           
                
            
            @if($user->role == 'admin')
                    <div class="card-footer">   
                    <form action="{{route('professor.edit', $professor->id)}}" method="GET">
                        @csrf
                        <button class="button-editar" type="submit">Editar</button> 
                    </form>
              
                    <form action="{{route('professor.destroy', $professor->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="button-excluir" type="submit"> Excluir </button>
                    </form>
                   </div>
            @endif
            
                {{-- 
                    <a href="{{route('professor.visualizeAlunoTreino', $aluno->id)}}">Visualizar </a>
                 --}}
                

    </div>
    @endforeach
    </div>
        
    <form action="{{route('professor.create')}}" method= "GET">
        <button class="button-adicionar"> Adicionar </button>
    </form>

</body>
</x-layout>