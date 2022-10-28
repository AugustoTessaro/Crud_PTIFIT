<x-layout title="Listagem de Tipos de Exercicio">

    <table>
        <thead>
            <tr>
                <th>
                    nome
                </th>
                <th>
                    gif
                </th>
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
                    deletar
                </th>           
            </tr>

        </thead>
        <tbody>
            @foreach ($tipos_exercicio as $tipo_exercicio)
            <tr>
                <th>
                    {{$tipo_exercicio->name}}
                </th>
                <th>
                    <img src="{{$tipo_exercicio->gif_link}}" alt="imagem" >                    
                </th>
                <th>
                    {{$tipo_exercicio->description}}
                </th>
                <th>
                    {{$tipo_exercicio->equipamento->name}}
                </th>
                <th>
                    <a href="{{route('tipo-exercicio.edit', $tipo_exercicio->id)}}">Editar</a>
                </th>                
                <th>
                    <form action="{{route('tipo-exercicio.destroy', $tipo_exercicio->id)}}" method="POST">
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
