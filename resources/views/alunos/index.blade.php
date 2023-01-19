<x-layout title="Listagem de Alunos" :role="$user->role">

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
                <td>
                    {{$aluno->name}}
                </td>
                <td>
                    {{$aluno->age}}
                </td>
                <td>
                    {{$aluno->CPF}}
                </td>
                <td>
                    {{$aluno->RG}}
                </td>
                <td>
                    {{$aluno->phone}}
                </td>
                <td>
                    {{$aluno->endereco->city}}
                </td>
                <td>
                    {{$aluno->endereco->neighborhood}}
                </td>
                <td>
                    {{$aluno->endereco->street}}
                </td>
                <td>
                    {{$aluno->endereco->number}}
                </td>
                <td>
                    {{$aluno->endereco->CEP}}
                </td>
                <td>
                    <form action="{{route('alunos.edit', $aluno->id)}}" method="GET">
                        @csrf
                        <button type="submit"> Editar </button>
                    </form>
                </td>
                <td>
                    <form action="{{route('alunos.destroy', $aluno->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit"> Excluir </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <form action="{{route('alunos.create')}}" method= "GET">
    <button> adicionar </button>
    </form>
</x-layout>
