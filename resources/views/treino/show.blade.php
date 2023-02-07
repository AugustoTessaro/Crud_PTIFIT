<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@600&display=swap" rel="stylesheet">
<x-layout title="Treino" :user="$user">


    <body style="background-color: #f8f9fa;">

        <div>
            <div class="row ml-2">
                <div class="d-flex flex-row justify-content-between ">
                    <div class="display-6 ms-3">{{$data['treino']->name}}</div>
                    <div>
                        @if($user->role != 'aluno')
                        <form class="align-items-center"
                            action="{{route('exercicio.createFromTreino', $data['treino']->id)}}" method="GET">
                            @csrf
                            <button class=" btn- btn btn-outline-success" type="submit"> Adicionar </button>
                        </form>
                        @endif
                    </div>
                </div>
            </div>

            <hr class="col-xs-12">

            <div class="row h4 ml-2 mb-4 ms-3"> Exercícios </div>

            <div class="row gap-3 justify-content-evenly">
                <div class="row">
                    @foreach ($data['exercicios'] as $exercicio)
                    <div class="col-12 col-md-6 col-lg-6 col-xl-3 col-xxl-3 ">
                        <div class="card m-4" style="background-color: #e9ecef">
                            <div class="card-body">
                                <div class="card-title h5" style="margin-left: 1.4rem">
                                    {{$exercicio->tipo_exercicio->name}}</div>

                                <div class="card-title h5" style="margin-left: 1.4rem">
                                    {{$exercicio->tipo_exercicio->equipamento->description}}</div>

                                <div class="card-title h5" style="margin-left: 1.4rem">Equipamento:
                                    {{$exercicio->tipo_exercicio->equipamento->name}}</div>

                                <div class="card-text container">
                                    <div class="row">
                                        <div class="col">Repetições: {{$exercicio->repetitions}}</div>
                                    </div>

                                    <div class="row">
                                        <div class="col">Séries: {{$exercicio->sets}}</div>
                                    </div>

                                    <div class="row">
                                        <div class="col">Peso: {{$exercicio->weight}} Kg</div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <p>Exercício feito: <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="" aria-label="..."></p>
                                    </div>
                                </div>
                            </div>

                            @if($user->role != 'aluno')
                            <div class="card-footer">
                                <div class="d-flex flex-row justify-content-evenly align-items-center">
                                    <form action="{{route('exercicio.edit', $exercicio->id)}}" method="GET"
                                        style="margin: 0">
                                        @csrf
                                        <button class="btn btn-outline-success" type="submit"> Editar </button>
                                    </form>

                                    <form action="{{route('exercicio.destroy', $exercicio->id)}}" method="POST"
                                        style="margin: 0">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-outline-danger" type="submit"> Excluir </button>
                                    </form>
                                </div>
                            </div>
                            @endif

                        </div>
                    </div>
                    @endforeach
                </div>

    </body>
</x-layout>