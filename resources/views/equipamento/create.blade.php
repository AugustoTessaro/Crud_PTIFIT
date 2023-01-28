<x-layout title="Cadastrar" :user="$user">

    <form action="{{route('equipamento.store')}}" method="POST">
        @csrf
        <label for="name"> Nome </label>
        <input type="text" name="name" id="name" required>

        <label for="description"> Descrição </label>
        <input type="text" name="description" id="description" required>        

        <label for="image_link"> Link da imagem </label>
        <input type="text" name="image_link" id="image_link">        

        <button type="submit"> Cadastrar </button>
    </form>

</x-layout>
