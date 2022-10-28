<x-layout title="Cadastrar">

    <form action="{{route('equipamento.store')}}" method="POST">
        @csrf
        <label for="name"> Nome </label>
        <input type="text" name="name" id="name">

        <label for="description"> Descrição </label>
        <input type="text" name="description" id="description">        

        <label for="image_link"> Link da imagem </label>
        <input type="text" name="image_link" id="image_link">        

        <button type="submit"> Cadastrar </button>
    </form>

</x-layout>
