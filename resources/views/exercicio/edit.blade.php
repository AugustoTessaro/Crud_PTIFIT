<x-layout title="Criar" :role="$user->role">

    <form action="{{route('exercicio.update', $data['exercicio']->id)}}" method="POST">
        @csrf       
        @method('PUT')       
        <label for="repetitions"> Repetições </label>
        <input type="number" value="{{$data['exercicio']->repetitions}}" name="repetitions" id="repetitions">

        <label for="sets"> Séries </label>
        <input type="number" value="{{$data['exercicio']->sets}}" name="sets" id="sets">

        <label for="weight"> Peso </label>
        <input type="number" value="{{$data['exercicio']->weight}}" name="weight" id="weight">        

        <label for="id_tipo_exercicio"> Tipo de exercicio </label>
        <select name="id_tipo_exercicio" id="id_tipo_exercicio">
            @foreach ($data['tipos_exercicio'] as $tipo_exercicio)
                @if ($tipo_exercicio->id == $data['exercicio']->tipo_exercicio->id)
                    <option selected value="{{$tipo_exercicio->id}}">{{$tipo_exercicio->name}}</option>
                @else
                    <option value="{{$tipo_exercicio->id}}">{{$tipo_exercicio->name}}</option>
                @endif
            @endforeach
        </select>        
        
        <input type="hidden" value="{{$data['exercicio']->treino->id}}" name="id_treino" id="id_treino">
        <button type="submit"> Cadastrar </button>

    </form>

</x-layout>