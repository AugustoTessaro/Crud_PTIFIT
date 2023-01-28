<x-layout title="Criar" :user="$user">

    <form action="{{route('exercicio.store')}}" method="POST">
        @csrf              
        <label for="repetitions"> Repetições </label>
        <input type="number" name="repetitions" id="repetitions" required>

        <label for="sets"> Séries </label>
        <input type="number" name="sets" id="sets" required>

        <label for="weight"> Peso </label>
        <input type="number" name="weight" id="weight" required>        

        <label for="tipo_exercicio_id"> Tipo de exercicio </label>
        <select name="tipo_exercicio_id" id="tipo_exercicio_id" required>
            @foreach ($data['tipos_exercicio'] as $tipo_exercicio)
                <option value="{{$tipo_exercicio->id}}">{{$tipo_exercicio->name}}</option>
            @endforeach
        </select>        
        
        <input type="hidden" value="{{$data['treino']->id}}" name="treino_id" id="treino_id">

        <button type="submit"> Cadastrar </button>


    </form>

</x-layout>