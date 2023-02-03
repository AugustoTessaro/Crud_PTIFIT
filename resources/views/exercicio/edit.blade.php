<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@600&display=swap" rel="stylesheet">
<x-layout title="Criar" :user="$user">

<head>
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/exercicio/edit.css')}}">
</head>

<body>

    <div class="card">
    <form action="{{route('exercicio.update', $data['exercicio']->id)}}" method="POST">
        @csrf       
        @method('PUT')       
        <label for="repetitions"> Repetições </label><br>
        <input type="number" value="{{$data['exercicio']->repetitions}}" name="repetitions" id="repetitions"><br>

        <label for="sets"> Séries </label><br>
        <input type="number" value="{{$data['exercicio']->sets}}" name="sets" id="sets"><br>

        <label for="weight"> Peso </label><br>
        <input type="number" value="{{$data['exercicio']->weight}}" name="weight" id="weight"><br>     

        <label for="id_tipo_exercicio"> Tipo de exercicio </label><br>
        <select name="id_tipo_exercicio" id="id_tipo_exercicio"><br>
            @foreach ($data['tipos_exercicio'] as $tipo_exercicio)
                @if ($tipo_exercicio->id == $data['exercicio']->tipo_exercicio->id)
                    <option selected value="{{$tipo_exercicio->id}}">{{$tipo_exercicio->name}}</option>
                @else
                    <option value="{{$tipo_exercicio->id}}">{{$tipo_exercicio->name}}</option>
                @endif
            @endforeach
        </select>        
        
        <input type="hidden" value="{{$data['exercicio']->treino->id}}" name="id_treino" id="id_treino">
        <br><br>
        <button class="button-cadastrar" type="submit"> Atualizar </button>

    </form>

</x-layout>