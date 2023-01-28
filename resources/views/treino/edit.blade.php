<x-layout title="Editar" :user="$user">

    <form action="{{route('treino.update', $treino->id)}}" method="POST">
        @csrf
        @method('PUT')
        <label for="init_date"> Data de início </label>
        <input type="date" value="{{$treino->init_date}}" name="init_date" id="init_date">

        <label for="end_date"> Data de término </label>
        <input type="date" value="{{$treino->end_date}}" name="end_date" id="end_date">

        <label for="name"> Nome </label>
        <input type="text" value="{{$treino->name}}" name="name" id="name">

        <label for="description"> Descrição </label>
        <input type="text" value="{{$treino->description}}" name="description" id="description">     
        
        <input type="hidden" value="{{$treino->id_aluno}}" name="id_aluno" id="id_aluno">

        <button type="submit"> Cadastrar </button>
    </form>

</x-layout>