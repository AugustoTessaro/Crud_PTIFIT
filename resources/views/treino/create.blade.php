<x-layout title="Criar" :user="$user">

    <form action="{{route('treino.store')}}" method="POST">
        @csrf      

        <label for="init_date"> Data de início </label>
        <input type="date" name="init_date" id="init_date" required>

        <label for="end_date"> Data de término </label>
        <input type="date" name="end_date" id="end_date" required>

        <label for="name"> Nome </label>
        <input type="text" name="name" id="name" required>

        <label for="description"> Descrição </label>
        <input type="text" name="description" id="description" required>     
        
        <input type="hidden" value="{{$aluno->id}}" name="id_aluno" id="id_aluno">

        <button type="submit"> Cadastrar </button>


    </form>

</x-layout>