<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@600&display=swap" rel="stylesheet">
<x-layout title="Listagem de Alunos" :user="$user">


    <body style="background-color: #f8f9fa;">

        <div>
            <div class="row ml-2 ">
                <div class="d-flex flex-row justify-content-between">
                    <div class="display-6 ms-3">Alunos</div>
                    <div>
                        <form action="{{route('alunos.create')}}" method="GET">
                            <button class="btn btn-outline-success me-3"> Adicionar </button>
                        </form>
                    </div>
                </div>
            </div>

            <hr class="col-xs-12 px-3" style="margin-bottom: 2rem;">

            <div >

                <div class="card-group">
                    @foreach ($alunos as $aluno)

                    <div class=" col-12 col-md-6 col-lg-6 col-xl-3 col-xxl-3 ">
                        <div class="card m-4" style="background-color: #e9ecef">
                            <div class="card-body ">
                                <div class="card-title h5 " style="margin-left: 1.4rem">
                                    {{$aluno->name}} 
                                </div>

                                <div class="card-text ">
                                    <div >
                                        <div >Idade: {{$aluno->age}}</div>
                                        <div >Telefone: {{$aluno->phone}}</div>
                                    </div>

                                    <div >
                                        <div >RG: {{$aluno->RG}}</div>
                                        <div >CPF: {{$aluno->CPF}}</div>
                                    </div>

                                    <div >
                                        <div >Cidade: {{$aluno->endereco->city}}</div>
                                        <div >Bairro: {{$aluno->endereco->neighborhood}}</div>
                                    </div>

                                    <div >
                                        <div >Rua: {{$aluno->endereco->street}}</div>
                                        <div >Número: {{$aluno->endereco->number}}</div>
                                    </div>

                                    <div >
                                        <div >CEP: {{$aluno->endereco->CEP}}</div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-footer">
                                <div class="d-flex flex-row justify-content-evenly align-items-center">
                                    <div>
                                        <a href="{{route('alunos.edit', $aluno->id)}}" class="btn btn-outline-primary"> Editar </a>
                                    </div>

                                    <div>
                                        <a href="{{route('professor.visualizeAlunoTreino', $aluno->id)}}" class="btn btn-outline-secondary"> Treinos </a>
                                    </div>

                                    <div>
                                        <form action="{{route('alunos.destroy', $aluno->id)}}" method="POST"
                                            style="margin: 0">
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
            </div>
        </div>
    </body>
</x-layout>