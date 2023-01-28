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
                    {{$data['treino']->init_date}}
                </th>
                <th>
                    {{$data['treino']->end_date}}
                </th>
                <th>
                    {{$data['treino']->name}}
                </th>
                <th>
                    {{$data['treino']->description}}
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
            @foreach ($data['exercicios'] as $exercicio)       
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
                    @if($user->role != 'aluno')
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
            @endif           
            @endforeach
        </tbody>        
    </table>
    @if($user->role != 'aluno')
    <a href="{{route('exercicio.createFromTreino', $data['treino']->id)}}">Adicionar exercicio </a>
    @endif
</x-layout>
