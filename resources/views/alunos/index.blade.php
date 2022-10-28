<x-layout title="Listagem de Alunos">

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
            @foreach ($alunos as $aluno)
            <tr>
                <th>
                    {{$aluno->name}}
                </th>
                <th>
                    {{$aluno->dateBirth}}
                </th>
                <th>
                    {{$aluno->CPF}}
                </th>
                <th>
                    {{$aluno->RG}}
                </th>
                <th>
                    {{$aluno->phone}}
                </th>
                <th>
                    {{$aluno->endereco->city}}
                </th>
                <th>
                    {{$aluno->endereco->neighborhood}}
                </th>
                <th>
                    {{$aluno->endereco->street}}
                </th>
                <th>
                    {{$aluno->endereco->number}}
                </th>
                <th>
                    {{$aluno->endereco->CEP}}
                </th>
                <th>
                    <form action="{{route('alunos.edit', $aluno->id)}}" method="GET">
                        @csrf
                        <button type="submit"> Editar </button>
                    </form>
                </th>
                <th>
                    <form action="{{route('alunos.destroy', $aluno->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit"> Excluir </button>
                    </form>
                </th>
            </tr>
            @endforeach
        </tbody>
    </table>
    <form action="{{route('alunos.create')}}" method= "GET">
    <button> adicionar </button>
    </form>
</x-layout>
