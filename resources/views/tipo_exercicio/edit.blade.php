<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@600&display=swap" rel="stylesheet">
<x-layout title="Atualizar" :user="$user">

<head>
<link rel="stylesheet" type="text/css" href="{{URL::asset('css/tipo_exercicio/edit.css')}}">
</head>

<h2>Editar Exercício </h2>
<hr>

    <div class="card">
    <form action="{{route('tipo_exercicio.update', $data['tipo_exercicio']->id)}}" method="POST">
        @csrf              
        @method('PUT')
        <label for="name"> Nome </label><br>
        <input type="text" value="{{$data['tipo_exercicio']->name}}" name="name" id="name"><br>

        <label for="description"> Descrição </label><br>
        <input type="text" value="{{$data['tipo_exercicio']->description}}" name="description" id="description"><br>
       

        <label for="id_equipamento"> Equipamento </label><br>
        <select name="id_equipamento" id="id_equipamento"><br>
            @foreach ($data['equipamentos'] as $equipamento)
                @if ($equipamento->id == $data['tipo_exercicio']->equipamento->id)
                    <option selected value="{{$equipamento->id}}">{{$equipamento->name}}</option>
                @else
                    <option value="{{$equipamento->id}}">{{$equipamento->name}}</option>
                @endif
            @endforeach
        </select>                

        <br><br>
        <button class="button-cadastrar" type="submit"> Cadastrar </button>
    </form>
    </div>>
</x-layout>