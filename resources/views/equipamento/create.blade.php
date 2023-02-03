<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@600&display=swap" rel="stylesheet">
<x-layout title="Cadastrar" :user="$user">

<head>
<link rel="stylesheet" type="text/css" href="{{URL::asset('css/equipamentos/create.css')}}">
</head>

<h2>Adicionar Equipamento</h2>
<hr>

    <div class="card">
    <form action="{{route('equipamento.store')}}" method="POST">
        @csrf
        <label for="name"> Nome </label><br>
        <input type="text" name="name" id="name" required><br>

        <label for="description"> Descrição </label><br>
        <input type="text" name="description" id="description" required><br>       

        <label for="image_link"> Link da imagem </label><br>
        <input type="text" name="image_link" id="image_link"><br>        

        <br>
        <button class="button-cadastrar" type="submit"> Cadastrar </button>
    </form>
</div>
</x-layout>