<x-layout title="Criar" :user="$user">

    <form action="{{route('tipo_exercicio.store')}}" method="POST">
        @csrf              
        <label for="name"> Nome </label>
        <input type="text" name="name" id="name" required>

        <label for="description"> Descrição </label>
        <input type="text" name="description" id="description" required>

        <label for="gif_link"> Link do Gif </label>
        <input type="text" name="gif_link" id="gif_link">        

        <label for="id_equipamento"> Equipamento </label>
        <select name="id_equipamento" id="id_equipamento" required>
            @foreach ($equipamentos as $equipamento)
                <option value="{{$equipamento->id}}">{{$equipamento->name}}</option>
            @endforeach
        </select>                

        <button type="submit"> Cadastrar </button>


    </form>

</x-layout>