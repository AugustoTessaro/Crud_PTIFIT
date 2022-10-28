<x-layout title="Listagem de professores">

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
            @foreach ($professores as $professor)
            <tr>
                <th>
                    {{$professor->name}}
                </th>
                <th>
                    {{$professor->dateBirth}}
                </th>
                <th>
                    {{$professor->CPF}}
                </th>
                <th>
                    {{$professor->RG}}
                </th>
                <th>
                    <a href="{{route('professor.edit', $professor->id)}}">Editar</a>
                </th>
                <th>
                    <form action="{{route('professor.destroy', $professor->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit"> Excluir </button>
                    </form>
                </th>

                <th>
                    <a href="{{route('professor.visualizeAlunoTreino', $aluno->id)}}">Visualizar </a>
                </th>
            </tr>
            @endforeach
        </tbody>
    </table>
</x-layout>