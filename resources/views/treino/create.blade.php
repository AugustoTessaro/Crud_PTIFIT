<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@600&display=swap" rel="stylesheet">
<x-layout title="Criar" :user="$user">
<head>
    <!-- <link rel="stylesheet" type="text/css" href="{{URL::asset('css/treino/create.css')}}"> -->
</head>

<body class="body-custom" style="background-color: #f8f9fa;">

    <div class="container-md">
        <div class="row ml-2">
            <div class="d-flex flex-row justify-content-between">
                <div class="display-6 ">Cadastrar Treino</div> 
            </div>
        </div>

        <hr class="col-xs-12" style="margin-bottom: 2rem;">
        <div class="row gap-3 justify-content-evenly">

    <div class="col-md-5 col-12">
        <div class="card p-4" style="background-color: #e9ecef"> 
            <form action="{{route('treino.store')}}" method="POST">
                @csrf      
                
                <div class="mb-3">
                    <label class="form-label" for="init_date"> Data de início </label> 
                    <input class="form-control" type="date" name="init_date" id="init_date" required> 
                </div>

                <div class="mb-3">
                    <label class="form-label"for="end_date"> Data de término </label> 
                    <input class="form-control" type="date" name="end_date" id="end_date" required> 
                </div>
                
                <div class="mb-3">
                    <label class="form-label"for="name"> Nome </label> 
                    <input class="form-control" type="text" name="name" id="name" required> 
                </div>

                <div class="mb-3">
                    <label class="form-label" for="description"> Descrição </label> 
                    <input class="form-control" type="text" name="description" id="description" required>
                </div>
                
                <input type="hidden" value="{{$aluno->id}}" name="aluno_id" id="aluno_id">
                    
                <div class="d-flex flex-row justify-content-end" style="margin-bottom: -1rem">
                    <div>
                        <button class="btn btn-outline-success" type="submit"> Cadastrar </button>
                    </div>
                </div>
            </form>
        </div>
        </div>
    </div>
    </div>
</x-layout>