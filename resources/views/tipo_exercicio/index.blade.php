<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@600&display=swap" rel="stylesheet">
<x-layout title="Listagem de Tipos de Exercicio" :user="$user">

    <head>
        <!-- <link rel="stylesheet" type="text/css" href="{{URL::asset('css/tipo_exercicio/index.css')}}"> -->
    </head>

    <body class="body-custom" style="background-color: #f8f9fa;">

        <div >
            <div class="row ml-2 ">
                <div class="d-flex flex-row justify-content-between">
                    <div class="display-6 ms-3">Tipo de Exercícios</div>
                    <div>
                        <form action="{{route('tipo_exercicio.create')}}" method="GET">
                            <button class="btn btn-outline-success me-3"> Adicionar </button>
                        </form>
                    </div>
                </div>
            </div>

            <hr class="col-xs-12" style="margin-bottom: 2rem;">
            <div class="card-group ">

                @foreach ($tipos_exercicio as $tipo_exercicio)
                <div class="col-12 col-md-6 col-lg-4 col-xl-4 col-xxl-2 p-2 ">
                    <div class="card" style="background-color: #e9ecef">
                        <div class="card-body ">
                            <div class="card-title h5">
                                {{$tipo_exercicio->name}}</div>
                            <div class="card-text"> Descrição: {{$tipo_exercicio->description}}</div>
                            <div class="card-text"> Equipamento: {{$tipo_exercicio->equipamento->name}}</div>
                        </div>

                        <div class="card-footer">
                            <div class="d-flex flex-row justify-content-evenly align-items-center"
                                style="margin-bottom: -1rem;">
                                <div>
                                    <form action="{{route('tipo_exercicio.edit', $tipo_exercicio->id)}}" method="GET">
                                        @csrf
                                        <button class="btn btn-outline-primary" type="submit"> Editar </button>
                                    </form>
                                </div>

                                <div>
                                    <form action="{{route('tipo_exercicio.destroy', $tipo_exercicio->id)}}"
                                        method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-outline-danger" type="submit"> Excluir </button>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                @endforeach
            </div>


</x-layout>