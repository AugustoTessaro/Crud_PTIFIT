<x-layout title="Listagem de professores" :user="$user">

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
                @if($user->role == 'admin')
                <th>
                    Editar
                </th>
                <th>
                    Excluir
                </th>
                @endif
            </tr>

        </thead>
        <tbody>
            @foreach ($professores as $professor)
            <tr>
                <td>
                    {{$professor->name}}
                </td>
                <td>
                    {{$professor->age}}
                </td>
                <td>
                    {{$professor->CPF}}
                </td>
                <td>
                    {{$professor->RG}}
                </td>
                <td>
                    {{$professor->phone}}
                </td>
                <td>
                    {{$professor->endereco->city}}
                </td>
                <td>
                    {{$professor->endereco->neighborhood}}
                </td>
                <td>
                    {{$professor->endereco->street}}
                </td>
                <td>
                    {{$professor->endereco->number}}
                </td>
                <td>
                    {{$professor->endereco->CEP}}
                </td>
                @if($user->role == 'admin')
                <td>
                    <a href="{{route('professor.edit', $professor->id)}}">Editar</a>
                </td>
                <td>
                    <form action="{{route('professor.destroy', $professor->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit"> Excluir </button>
                    </form>
                </td>
                @endif

                {{-- <th>
                    <a href="{{route('professor.visualizeAlunoTreino', $aluno->id)}}">Visualizar </a>
                </th> --}}
            </tr>
            @endforeach
        </tbody>
    </table>
    <form action="{{route('professor.create')}}" method= "GET">
    <button> adicionar </button>
</x-layout>