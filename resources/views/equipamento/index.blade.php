<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@600&display=swap" rel="stylesheet">
<x-layout title="Listagem de Equipamentos" :user="$user">

    <head>
        <!-- <link rel="stylesheet" type="text/css" href="{{URL::asset('css/equipamentos/index.css')}}"> -->
    </head>

    <body class="body-custom" style="background-color: #f8f9fa;">

        <div>
            <div class="row ml-2 ">
                <div class="d-flex flex-row justify-content-between">
                    <div class="display-6 ">Equipamentos</div>
                    <form action="{{route('equipamento.create')}}" method="GET">
                        <button class="btn btn-outline-success"> Adicionar </button>
                    </form>
                </div>
            </div>

            <hr class="col-xs-12" style="margin-bottom: 2rem;">
            <div class="card-group ">


                
                    @foreach ($equipamentos as $equipamento)
                    <div class="col-12 col-md-6 col-lg-6 col-xl-4 col-xxl-2 p-2">
                        <div class="card" style="background-color: #e9ecef">
                            <div class="card-body">
                                <div class="card-title h6">{{$equipamento->name}}</div>
                                <div class="card-text">{{$equipamento->description}}</div>
                            </div>

                            <div class="card-footer ">
                                <div class="d-flex flex-row justify-content-end " style="margin-bottom: -1rem;">
                                    <form action="{{route('equipamento.destroy', $equipamento->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-outline-danger" type="submit"> Excluir </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                


</x-layout>