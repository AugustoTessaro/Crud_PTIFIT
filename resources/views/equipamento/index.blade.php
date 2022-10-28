<x-layout title="Listagem de Equipamentos">

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
                <th>
                    {{$equipamento->name}}
                </th>
                <th>
                    <img src="{{$equipamento->image_link}}" alt="imagem" >                    
                </th>
                <th>
                    {{$equipamento->description}}
                </th>
                <th>
                    <a href="{{route('equipamento.edit', $equipamento->id)}}">Editar</a>
                </th>                
                <th>
                    <form action="{{route('equipamento.destroy', $equipamento->id)}}" method="POST">
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
