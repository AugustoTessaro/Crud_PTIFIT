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
                    <a href="{{route('alunos.edit', $aluno->id)}}">Editar</a>
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
</x-layout>
