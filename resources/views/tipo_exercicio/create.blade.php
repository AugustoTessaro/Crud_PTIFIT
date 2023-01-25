<x-layout title="Criar" :role="$user->role">

    <form action="{{route('tipo_exercicio.store')}}" method="POST">
        @csrf              
        <label for="name"> Nome </label>
        <input type="text" name="name" id="name">

        <label for="description"> Descrição </label>
        <input type="text" name="description" id="description">

        <label for="gif_link"> Link do Gif </label>
        <input type="text" name="gif_link" id="gif_link">        

        <label for="id_equipamento"> Equipamento </label>
        <select name="id_equipamento" id="id_equipamento">
            @foreach ($equipamentos as $equipamento)
                <option value="{{$equipamento->id}}">{{$equipamento->name}}</option>
            @endforeach
        </select>                

        <button type="submit"> Cadastrar </button>


    </form>

</x-layout>