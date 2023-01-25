<x-layout title="Listagem de Tipos de Exercicio" :role="$user->role">

    <table>
        <thead>
            <tr>
                <th>
                    nome
                </th>
                {{-- <th>
                    gif
                </th> --}}
                <th>
                    descrição
                </th>
                <th>
                    equipamento
                </th>     
                <th>
                    editar
                </th>
                <th>
                    deletarddddddd
                </th>           
            </tr>

        </thead>
        <tbody>
            @foreach ($tipos_exercicio as $tipo_exercicio)
            <tr>
                <td>
                    {{$tipo_exercicio->name}}
                </td>
                {{-- <th>
                    <img src="{{$tipo_exercicio->gif_link}}" alt="imagem" >                    
                </th> --}}
                <td>
                    {{$tipo_exercicio->description}}
                </td>
                <td>
                    {{$tipo_exercicio->equipamento->name}}
                </td>
                <td>
                    <a href="{{route('tipo_exercicio.edit', $tipo_exercicio->id)}}">Editar</a>
                </td>                
                <td>
                    <form action="{{route('tipo_exercicio.destroy', $tipo_exercicio->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit"> Excluir </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <form action="{{route('tipo_exercicio.create')}}" method= "GET">
        <button> adicionar </button>
</x-layout>
