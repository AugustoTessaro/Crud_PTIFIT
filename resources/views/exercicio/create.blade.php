<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@600&display=swap" rel="stylesheet">
<x-layout title="Criar" :user="$user">

<head>
    <!-- <link rel="stylesheet" type="text/css" href="{{URL::asset('css/exercicio/create.css')}}"> -->
</head>

<body class="body-custom" style="background-color: #f8f9fa;">

    <div class="container-md">
        <div class="row ml-2">
            <div class="d-flex flex-row justify-content-between">
                <div class="display-6 ">Cadastrar Exercício</div> 
            </div>
        </div>

        <hr class="col-xs-12" style="margin-bottom: 2rem;">
        <div class="row gap-3 justify-content-evenly">

    <div class="col-md-5 col-12">
        <div class="card p-4" style="background-color: #e9ecef">
            <form action="{{route('exercicio.store')}}" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label" for="tipo_exercicio_id"> Tipo de exercicio </label> <br>
                    <select class="form-select" name="tipo_exercicio_id" id="tipo_exercicio_id" required> <br>
                    @foreach ($data['tipos_exercicio'] as $tipo_exercicio)
                    <option value="{{$tipo_exercicio->id}}">{{$tipo_exercicio->name}} - {{$tipo_exercicio->description}}</option>
                    @endforeach
                </select>
                </div>

                <div class="mb-3">
                    <label class="form-label" for="repetitions"> Repetições </label>
                    <input class="form-control" type="number" name="repetitions" id="repetitions" required> 
                </div>

                <div class="mb-3">
                    <label class="form-label" for="sets"> Séries </label> 
                    <input class="form-control" type="number" name="sets" id="sets" required> 
                </div>

                <div class="mb-3">
                    <label class="form-label" for="weight"> Peso </label> 
                    <input class="form-control" type="number" name="weight" id="weight" required> 
                </div>

                

                <input type="hidden" value="{{$data['treino']->id}}" name="treino_id" id="treino_id">

                <div class="d-flex flex-row justify-content-end" style="margin-bottom: -1rem;">
                    <div>
                        <button class="btn btn-outline-success " type="submit"> Cadastrar </button>
                    </div>
                </div>

            </form>
        </div>
    </div>
    </div>

</x-layout>