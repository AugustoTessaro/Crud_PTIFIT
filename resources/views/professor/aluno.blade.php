<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@600&display=swap" rel="stylesheet">
<x-layout title="Treinos" :user="$user">

    <head>
        <!-- <link rel="stylesheet" type="text/css" href="{{URL::asset('css/professores/aluno.css')}}"> -->
    </head>

    <body class="body-custom" style="background-color: #f8f9fa;">

        <div >
            <div class="row ml-2 ">
                <div class="d-flex flex-row justify-content-between">
                    <div class="display-6 ms-3 ">Treinos</div>
                    <div>
                        <form action="{{route('treino.createFromAluno', $data)}}" method="GET">
                            <button class="btn btn-outline-success me-3"> Criar </button>
                        </form>
                    </div>
                </div>
            </div>

            <hr class="col-xs-12" style="margin-bottom: 2rem;">
            <div class="card-group ">

                
                    @foreach ($data['treinos'] as $treino)
                    <div class="col-12 col-md-6 col-lg-6 col-xl-3 col-xxl-3 p-3">
                        <div class="card m-4 " style="background-color: #e9ecef">

                            <div class="card-body">
                                <div class="card-title h5">{{$treino->name}}</div>
                                <div class="card-text">Descrição: {{$treino->description}}</div>
                                <div class="card-text">Início: {{$treino->init_date}}</div>
                                <div class="card-text">Fim: {{$treino->end_date}}</div>
                            </div>
                            <div class="card-footer">
                                <div class="d-flex flex-row justify-content-between align-items-center "
                                    style="margin-bottom: -1rem;">

                                    <div>
                                        <form action="{{route('treino.edit', $treino->id)}}" method="GET">
                                            <button class="btn btn-outline-primary" type="submit">Editar</button>
                                        </form>
                                    </div>

                                    <div>
                                        <form action="{{route('treino.show', $treino->id)}}" method="GET">
                                            <button class="btn btn-outline-secondary" type="submit">
                                                Exercícios</button>
                                        </form>
                                    </div>

                                    <div>
                                        <form action="{{route('treino.destroy', $treino->id)}}" method="POST">
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
    </body>
</x-layout>