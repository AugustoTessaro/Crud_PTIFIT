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
                    <a href="{{route('alunos.edit', $aluno->id)}}">Editar</a>
                </th>
                <th>
                    <form action="{{route('alunos.destroy', $aluno->id)}}" method="POST">
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
