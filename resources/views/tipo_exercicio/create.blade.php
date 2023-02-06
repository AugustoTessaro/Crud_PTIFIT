<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@600&display=swap" rel="stylesheet">
<x-layout title="Criar" :user="$user">

<head>
<link rel="stylesheet" type="text/css" href="{{URL::asset('css/tipo_exercicio/create.css')}}">
</head>

<h2> Adicionar Exercicio </h2>
    <hr>

    <div class="card">
    <form action="{{route('tipo_exercicio.store')}}" method="POST">
        @csrf              
        <label for="name"> Nome </label><br>
        <input type="text" name="name" id="name" required><br>

        <label for="description"> Descrição </label><br>
        <input type="text" name="description" id="description" required><br>     

        <label for="id_equipamento"> Equipamento </label><br>
        <select name="id_equipamento" id="id_equipamento" required><br>
            @foreach ($equipamentos as $equipamento)
                <option value="{{$equipamento->id}}">{{$equipamento->name}}</option>
            @endforeach
        </select>                
        <br><br>
        <button class="button-cadastrar" type="submit"> Cadastrar </button>


    </form>
    </div>
</x-layout>