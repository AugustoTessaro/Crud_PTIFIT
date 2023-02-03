<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@600&display=swap" rel="stylesheet">
<x-layout title="Listagem de Equipamentos" :user="$user">

<head>
<link rel="stylesheet" type="text/css" href="{{URL::asset('css/equipamentos/index.css')}}">
<h2> Lista de Equipamentos</h2>
<hr>
</head>

        <div class = "card-group">
        @foreach ($equipamentos as $equipamento)
            <div class="card">
                <p>{{$equipamento->name}}</p>

                <form action="{{route('equipamento.destroy', $equipamento->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="button-excluir" type="submit"> Excluir </button>
                </form>
                
    </div>
    @endforeach
    </div>
    
        <form action="{{route('equipamento.create')}}" method= "GET">
        <button class="button-adicionar" > Adicionar </button>
        </form>

</x-layout>