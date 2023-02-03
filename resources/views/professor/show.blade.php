<x-layout title="Treino" :user="$user">
    <table>
        <thead>
            <tr>
                <th>
                Data de início
                </th>
                <th>
                Data de término
                </th>
                <th>
                Nome
                </th>
                <th>
                Descrição
                </th>                
            </tr>

        </thead>
        <tbody>            
            <tr>
                <th>
                    {{$treino->init_date}}
                </th>
                <th>
                    {{$treino->end_date}}
                </th>
                <th>
                    {{$treino->name}}
                </th>
                <th>
                    {{$treino->description}}
                </th>               
            </tr>            
        </tbody>
    </table>

    <table>
        <thead>
            <tr>
                <th>
                Nome
                </th>
                <th>
                Repetições
                </th>
                <th>
                Séries
                </th>
                <th>
                Peso
                </th>     
                <th>
                    Editar
                </th>     
                <th>
                    Deletar
                </th>      
            </tr>

        </thead>
        <tbody>     
            @foreach ($dexercicios as $exercicio)       
            <tr>    
                <td>
                    {{$exercicio->tipo_exercicio->name}}
                </td>
                <th>
                    {{$exercicio->repetitions}}
                </th>
                <th>
                    {{$exercicio->sets}}
                </th>
                <th>
                    {{$exercicio->weight}}
                </th>
                      
                <th>
                    <a href="{{route('exercicio.edit', $exercicio->id)}}">Editar</a>
                </th>                
                <th>
                    <form action="{{route('exercicio.destroy', $exercicio->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit"> Excluir </button>
                    </form>
                </th>
            </tr>          
            @endforeach
        </tbody>        
    </table>
    
    <a href="{{route('exercicio.createFromTreino', $data['treino']->id)}}">Adicionar exercicio </a>
    
</x-layout>