<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@600&display=swap" rel="stylesheet">
<x-layout title="Criar" :user="$user">

<head>
    <!-- <link rel="stylesheet" type="text/css" href="{{URL::asset('css/exercicio/edit.css')}}"> -->
</head>

<body class="body-custom" style="background-color: #f8f9fa;">

    <div class="container-md">
        <div class="row ml-2">
            <div class="d-flex flex-row justify-content-between">
                <div class="display-6 ">Editar Exercício</div> 
            </div>
        </div>

        <hr class="col-xs-12" style="margin-bottom: 2rem;">
        <div class="row gap-3 justify-content-evenly">

    <div class="col-md-5 col-12">
        <div class="card p-4" style="background-color: #e9ecef">
        <form action="{{route('exercicio.update', $data['exercicio']->id)}}" method="POST">
            @csrf       
            @method('PUT')     
            
            <div class="mb-3">
                <label class="form-label" for="repetitions"> Repetições </label>
                <input class="form-control" type="number" value="{{$data['exercicio']->repetitions}}" name="repetitions" id="repetitions">
            </div>

            <div class="mb-3">
                <label class="form-label"for="sets"> Séries </label>
                <input class="form-control" type="number" value="{{$data['exercicio']->sets}}" name="sets" id="sets">
            </div>

            <div>
                <label class="form-label" for="weight"> Peso </label>
                <input class="form-control" type="number" value="{{$data['exercicio']->weight}}" name="weight" id="weight"> 
            </div>
            
            <input type="hidden" value="{{$data['exercicio']->treino->id}}" name="id_treino" id="id_treino">
            
            <div class="d-flex flex-row justify-content-end">
                <div>
                    <button class="btn btn-outline-primary" style="margin-bottom: -1rem" type="submit"> Editar </button>
                </div>
            </div>
        </form>
    </div>
    </div>
</body>

</x-layout>
