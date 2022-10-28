<x-layout title="Criar">

    <form action="{{route('exercicio.store')}}" method="POST">
        @csrf              
        <label for="repetitions"> Repetições </label>
        <input type="number" name="repetitions" id="repetitions">

        <label for="sets"> Séries </label>
        <input type="number" name="sets" id="sets">

        <label for="weight"> Peso </label>
        <input type="number" name="weight" id="weight">        

        <label for="id_tipo_exercicio"> Tipo de exercicio </label>
        <select name="id_tipo_exercicio" id="id_tipo_exercicio">
            @foreach ($data['tipos_exercicio'] as $tipo_exercicio)
                <option value="{{$tipo_exercicio->id}}">{{$tipo_exercicio->name}}</option>
            @endforeach
        </select>        
        
        <input type="hidden" value="{{$data['treino']->id}}" name="id_treino" id="id_treino">

        <button type="submit"> Cadastrar </button>


    </form>

</x-layout>