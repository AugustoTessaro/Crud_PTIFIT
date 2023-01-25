<x-layout title="Listagem de Equipamentos" :role="$user->role">

    <table>
        <thead>
            <tr>
                <th>
                    nome
                </th>
                <th>
                    imagem
                </th>
                <th>
                    descrição
                </th>
                <th>
                    editar
                </th>     
                <th>
                    deletar
                </th>           
            </tr>

        </thead>
        <tbody>
            @foreach ($equipamentos as $equipamento)
            <tr>
                <td>
                    {{$equipamento->name}}
                </td>
                <td>
                    <img src="{{$equipamento->image_link}}" alt="imagem" >                    
                </td>
                <td>
                    {{$equipamento->description}}
                </td>
                <td>
                    <a href="{{route('equipamento.edit', $equipamento->id)}}">Editar</a>
                </td>                
                <td>
                    <form action="{{route('equipamento.destroy', $equipamento->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit"> Excluir </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <form action="{{route('equipamento.create')}}" method= "GET">
        <button> adicionar </button>
    </form>
</x-layout>
