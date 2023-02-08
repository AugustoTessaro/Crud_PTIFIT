<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@600&display=swap" rel="stylesheet">
<x-layout title="Criar" :user="$user">

<head>
<!-- <link rel="stylesheet" type="text/css" href="{{URL::asset('css/tipo_exercicio/create.css')}}"> -->
</head>

<body class="body-custom" style="background-color: #f8f9fa;">

    <div>
        <div class="row ml-2">
            <div class="d-flex flex-row justify-content-between">
                <div class="display-6 ms-3">Cadastrar Tipo de Exercício</div> 
            </div>
        </div>

        <hr class="col-xs-12" style="margin-bottom: 2rem;">
        <div class="row gap-3 justify-content-evenly">

    <div class="col-md-3 col-12">
        <div class="card p-4" style="background-color: #e9ecef"">
            <form action="{{route('tipo_exercicio.store')}}" method="POST">
                @csrf   
                
                <div class="mb-3">
                    <label class="form-label" for="name"> Nome </label>
                    <input class="form-control" type="text" name="name" id="name" required>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="description"> Descrição </label>
                    <input class="form-control" type="text" name="description" id="description" required>     
                </div>
                <div class="mb-3">
                    <label class="form-label" for="id_equipamento"> Equipamento </label>
                    <select class="form-select" name="id_equipamento" id="id_equipamento" required>
                        @foreach ($equipamentos as $equipamento)
                            <option value="{{$equipamento->id}}">{{$equipamento->name}} - {{$equipamento->description}}</option>
                        @endforeach
                    </select>                
                </div>
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
</body>
</x-layout>