<x-layout title="Editar" :user="$user">

    <form action="{{route('equipamento.update', $equipamento->id)}}" method="POST">
        @csrf
        @method('PUT')
        <label for="name"> Nome </label>
        <input type="text" value="{{$equipamento->name}}" name="name" id="name">

        <label for="description"> Descrição </label>
        <input type="text" value="{{$equipamento->description}}" name="description" id="description">        

        <label for="image_link"> Link da imagem </label>
        <input type="text" value="{{$equipamento->image_link}}" name="image_link" id="image_link">        

        <button type="submit"> Cadastrar </button>
    </form>

</x-layout>
