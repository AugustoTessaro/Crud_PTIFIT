<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@600&display=swap" rel="stylesheet">
<x-layout title="Listagem de professores" :user="$user">

    <head>
        <!-- <link rel="stylesheet" type="text/css" href="{{URL::asset('css/professores/index.css')}}"> -->
    </head>


    <body class="body-custom" style="background-color: #f8f9fa;">

        <div>
            <div class="row ml-2">
                <div class="d-flex flex-row justify-content-between">
                    <div class="display-6 ms-3 ">Professores</div>
                    <div>
                        <form action="{{route('professor.create')}}" method="GET">
                            <button class="btn btn-outline-success me-3"> Adicionar </button>
                        </form>
                    </div>
                </div>
            </div>

            <hr class="col-xs-12" style="margin-bottom: 2rem;">
            
            <div class="card-group ">

                @foreach ($professores as $professor)
                <div class="col-12 col-md-4 col-lg-6 col-xl-3 col-xxl-3 ">
                    <div class="card m-4" style="background-color: #e9ecef">
                        <div class="card-body">
                            <div class="card-title h5 tw-bolder " style="margin-left: 1.4rem">
                                {{$professor->name}}</div>

                            <div class="card-text ">
                                <div>
                                    <div>Idade: {{$professor->age}}</div>
                                    <div>Telefone: {{$professor->phone}}</div>
                                </div>

                                <div>
                                    <div>RG: {{$professor->RG}}</div>
                                    <div>CPF: {{$professor->CPF}}</div>
                                </div>

                                <div>
                                    <div>Cidade: {{$professor->endereco->city}}</div>
                                    <div>Bairro: {{$professor->endereco->neighborhood}}</div>
                                </div>

                                <div>
                                    <div>Rua: {{$professor->endereco->street}}</div>
                                    <div>Número: {{$professor->endereco->number}}</div>
                                </div>

                                <div>
                                    <div>CEP: {{$professor->endereco->CEP}}</div>
                                    <div>Qualificação: {{$professor->professional_qualification}}</div>
                                </div>
                            </div>
                        </div>

                        @if($user->role == 'admin')
                        <div class="card-footer">
                            <div class="d-flex flex-row justify-content-evenly align-items-center">
                                <div>
                                    <form action="{{route('professor.edit', $professor->id)}}" method="GET"
                                        style="margin: 0">
                                        @csrf
                                        <button class="btn btn-outline-primary" type="submit"> Editar </button>
                                    </form>
                                </div>

                                <div>
                                    <form action="{{route('professor.destroy', $professor->id)}}" method="POST"
                                        style="margin: 0">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-outline-danger" type="submit"> Excluir </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
                @endforeach

            </div>
    </body>
</x-layout>