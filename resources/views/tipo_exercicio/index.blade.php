<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@600&display=swap" rel="stylesheet">
<x-layout title="Listagem de Tipos de Exercicio" :user="$user">

<head>
<link rel="stylesheet" type="text/css" href="{{URL::asset('css/tipo_exercicio/index.css')}}">
</head>

<h2>Lista de Tipos de Exercicio</h2>
<hr>

            <div class="card-group">
            @foreach ($tipos_exercicio as $tipo_exercicio)
             <div class="card">     
            <p> Exercício: {{$tipo_exercicio->name}}</p>
            <p> Descrição: {{$tipo_exercicio->description}}</p>
                
            <p> Nome do equipamento: {{$tipo_exercicio->equipamento->name}}</p>
            
                    <form action="{{route('tipo_exercicio.edit', $tipo_exercicio->id)}}" method="GET">
                        @csrf
                    <button class="button-editar" type="submit"> Editar </button>
                    </form>

                    <form action="{{route('tipo_exercicio.destroy', $tipo_exercicio->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="button-excluir" type="submit"> Excluir </button>
                    </form>
             </div>
            @endforeach
            </div>        

    <form action="{{route('tipo_exercicio.create')}}" method= "GET">
        <button class="button-adicionar"> Adicionar </button>
</x-layout>