<x-layout title="Atualizar" :role="$user->role">

    <form action="{{route('tipo_exercicio.update', $data['tipo_exercicio']->id)}}" method="POST">
        @csrf              
        @method('PUT')
        <label for="name"> Nome </label>
        <input type="text" value="{{$data['tipo_exercicio']->name}}" name="name" id="name">

        <label for="description"> Descrição </label>
        <input type="text" value="{{$data['tipo_exercicio']->description}}" name="description" id="description">

        <label for="gif_link"> Link do Gif </label>
        <input type="text" value="{{$data['tipo_exercicio']->gif_link}}" name="gif_link" id="gif_link">        

        <label for="id_equipamento"> Equipamento </label>
        <select name="id_equipamento" id="id_equipamento">
            @foreach ($data['equipamentos'] as $equipamento)
                @if ($equipamento->id == $data['tipo_exercicio']->equipamento->id)
                    <option selected value="{{$equipamento->id}}">{{$equipamento->name}}</option>
                @else
                    <option value="{{$equipamento->id}}">{{$equipamento->name}}</option>
                @endif
            @endforeach
        </select>                

        <button type="submit"> Cadastrar </button>
    </form>

</x-layout>