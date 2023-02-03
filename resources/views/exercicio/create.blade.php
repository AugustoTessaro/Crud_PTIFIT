<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@600&display=swap" rel="stylesheet">
<x-layout title="Criar" :user="$user">

<head>
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/exercicio/create.css')}}">
</head>



    <h2> Adicionar Exercicio </h2>
    <hr>

    <div class="card">
        <form action="{{route('exercicio.store')}}" method="POST">
            @csrf
            <label for="repetitions"> Repetições </label> <br>
            <input type="number" name="repetitions" id="repetitions" required> <br>

            <label for="sets"> Séries </label> <br>
            <input type="number" name="sets" id="sets" required> <br>

            <label for="weight"> Peso </label> <br>
            <input type="number" name="weight" id="weight" required> <br>

            <label for="tipo_exercicio_id"> Tipo de exercicio </label> <br>
            <select name="tipo_exercicio_id" id="tipo_exercicio_id" required> <br>
                @foreach ($data['tipos_exercicio'] as $tipo_exercicio)
                <option value="{{$tipo_exercicio->id}}">{{$tipo_exercicio->name}}</option>
                @endforeach
            </select>

            <input type="hidden" value="{{$data['treino']->id}}" name="treino_id" id="treino_id">

            <br><br>
            <button class="button-cadastrar" type="submit"> Cadastrar </button>


        </form>

    </div>

</x-layout>