<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@600&display=swap" rel="stylesheet">
<x-layout title="Editar" :user="$user">
    
<head>
    <!-- <link rel="stylesheet" type="text/css" href="{{URL::asset('css/treino/edit.css')}}"> -->
</head>

<body class="body-custom" style="background-color: #f8f9fa;">

    <div >
        <div class="row ml-2">
            <div class="d-flex flex-row justify-content-between">
                <div class="display-6 ms-3">Editar Treino</div> 
            </div>
        </div>

        <hr class="col-xs-12" style="margin-bottom: 2rem;">
        <div class="row gap-3 justify-content-evenly">

    <div class="col-md-5 col-12">
        <div class="card p-4" style="background-color: #e9ecef">
            <form action="{{route('treino.update', $treino->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label class="form-label" for="init_date"> Data de início </label> 
                    <input class="form-control" type="date" value="{{$treino->init_date}}" name="init_date" id="init_date"> 
                </div>
                <div class="mb-3">
                    <label class="form-label" for="end_date"> Data de término </label> 
                    <input class="form-control" type="date" value="{{$treino->end_date}}" name="end_date" id="end_date"> 
                </div>
                <div class="mb-3">
                    <label class="form-label" for="name"> Nome </label> 
                    <input class="form-control" type="text" value="{{$treino->name}}" name="name" id="name"> 
                </div>
                <div class="mb-3">
                    <label class="form-label" for="description"> Descrição </label> 
                    <input class="form-control" type="text" value="{{$treino->description}}" name="description" id="description"> 
                </div>
                    <input type="hidden" value="{{$treino->aluno_id}}" name="aluno_id" id="aluno_id"> 
                <div class="d-flex flex-row justify-content-end" style="margin-bottom: -1rem">
                    <div>
                        <button class="btn btn-outline-primary" type="submit"> Atualizar </button>
                    </div>
                </div>
            
            </form>
        </div>
        </div>
    </div>
    </div>
</body>
</x-layout>