<x-layout title="Listagem de Alunos" :user="$user">
    <table>
        <thead>
            <tr>
                <th>
                    nome
                </th>
                <th>
                    idade
                </th>
                <th>
                    CPF
                </th>
                <th>
                    RG
                </th>
                <th>
                    phone
                </th>
                <th>
                    city
                </th>
                <th>
                    neighborhood
                </th>
                <th>
                    street
                </th>
                <th>
                    number
                </th>
                <th>
                    CEP
                </th>
                <th>
                    Editar
                </th>
                <th>
                    Excluir
                </th>
            </tr>

        </thead>
        <tbody>            
            <tr>
                
                <th>
                    {{$data['aluno']->name}}
                </th>
                <th>
                    {{$data['aluno']->age}}
                </th>
                <th>
                    {{$data['aluno']->CPF}}
                </th>
                <th>
                    {{$data['aluno']->RG}}
                </th>
                <th>
                    {{$data['aluno']->phone}}
                </th>
                <th>
                    {{$data['aluno']->endereco->city}}
                </th>
                <th>
                    {{$data['aluno']->endereco->neighborhood}}
                </th>
                <th>
                    {{$data['aluno']->endereco->street}}
                </th>
                <th>
                    {{$data['aluno']->endereco->number}}
                </th>
                <th>
                    {{$data['aluno']->endereco->CEP}}
                </th>
                <th>
                    <a href="{{route('alunos.edit', $data['aluno']->id)}}">Editar</a>
                </th>
                <th>
                    <form action="{{route('alunos.destroy', $data['aluno']->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit"> Excluir </button>
                    </form>
                </th>
            </tr>            
        </tbody>
    </table>




    <table>
        <thead>
            <tr>
                <th>
                    Data inicial
                </th>
                <th>
                    Data final
                </th>
                <th>
                    Id Aluno
                </th>
                <th>
                    Nome do Treino
                </th>
                <th>
                    Descrição
                </th>      

                <th>
                    Editar
                </th>
                <th>
                    Excluir
                </th>

            </tr>

        </thead>
        <tbody>
            @foreach ($data['treinos'] as $treino)
            <tr>
                <th>
                    {{$treino->init_date}}
                </th>
                <th>
                    {{$treino->end_date}}
                </th>
                <th>
                    {{$treino->id_aluno}}
                </th>
                <th>
                    {{$treino->name}}
                </th>
                <th>
                    {{$treino->description}}
                </th>      
        
                <th>
                    <a href="{{route('treino.edit', $treino->id)}}">Editar</a>
                </th>
                <th>
                    <form action="{{route('treino.destroy', $treino->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit"> Excluir </button>
                    </form>
                </th>
            </tr>
            @endforeach
        </tbody>
    </table>
    
    {{-- <form action="{{route('aluno.create')}}" method= "GET">
    <button> adicionar </button>
    </form> --}}
    <a href="{{route('treino.createFromAluno', $data)}}">Criar treino</a>
</x-layout>

